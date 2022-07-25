<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ImagesTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('images');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Upload', [
            'image'=>[
                'image'=>[
                    'height'=>null,
                ],
                'image_thumb'=>[
                    'height'=>null,
                    'crop'=>false
                ],
            ],
        ]);

        $this->belongsToMany('Categories', [
            'foreignKey' => 'image_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'categories_images',
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('url')
            ->maxLength('url', 500)
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        $validator
            ->scalar('title')
            ->maxLength('title', 500)
            ->allowEmptyString('title');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
