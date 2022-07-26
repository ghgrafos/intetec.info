<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Images Controller
 *
 * @property \App\Model\Table\ImagesTable $Images
 *
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImagesController extends AppController
{
    public function display($category = null)
    {
        $conditions = [];

        if ($category) {
            $conditions = [
                'Categories.id'=>$category
            ];
        }

        $categories = $this->Images->Categories
            ->find()
            ->where($conditions)
            ->all();

        $query = $this->Images->find();
        $query->contain('Categories');
        $query->matching('Categories', function($q) use ($conditions) {
            return $q->where($conditions);
        });

        $images = $query->all();
        //debug($images);
        $this->set(compact('images', 'categories'));
    }

    public function beforeRender(Event $event)
    {
        $this->layout ='default';
    }
}
