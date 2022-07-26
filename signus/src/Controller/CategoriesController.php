<?php
namespace App\Controller;

use App\Controller\AppController;

class CategoriesController extends AppController
{
	public function view($url = null)
    {
    	$categoria = $this->Categories->getCategoryByUrl($url);

    	$this->set(compact('category'));
    }
}