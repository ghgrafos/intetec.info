<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class StaticPagesController extends AppController
{
    public function display()
    {

    }

    
    public function beforeRender(Event $event)
    {
        $this->layout ='site';
    }
}
