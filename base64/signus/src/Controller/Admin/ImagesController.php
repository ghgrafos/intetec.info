<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class ImagesController extends AppController
{

    public function index()
    {
        $images = $this->paginate($this->Images);

        $this->set(compact('images'));
    }

    public function view($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('image', $image);
    }

    public function add()
    {
        $image = $this->Images->newEntity();
        if ($this->request->is('post')) {
            $image = $this->Images->patchEntity($image, $this->request->getData());
            $image->url = $this->Images->singleUpload($this->request->data['url']);
            //debug($image);exit;
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $categories = $this->Images->Categories->find('list', ['limit' => 200]);
        $this->set(compact('image', 'categories'));
    }


    public function edit($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => ['Categories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $this->Images->patchEntity($image, $this->request->getData());
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $categories = $this->Images->Categories->find('list', ['limit' => 200]);
        $this->set(compact('image', 'categories'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Images->get($id);
        if ($this->Images->delete($image)) {
            $this->Flash->success(__('The image has been deleted.'));
        } else {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
