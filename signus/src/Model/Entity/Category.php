<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Inflector;


class Category extends Entity
{

    protected $_accessible = [
        'title' => true,
        'created' => true,
        'modified' => true,
        'images' => true
    ];

    protected function _getSlug()
    {
        $title = $this->_properties['title'];
        return strtolower(Inflector::slug($title));
    }
}
