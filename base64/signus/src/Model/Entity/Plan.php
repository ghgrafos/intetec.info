<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plan Entity
 *
 * @property int $id
 * @property string $title
 * @property float $value
 * @property string $description
 * @property int $articles
 *
 * @property \App\Model\Entity\User[] $users
 */
class Plan extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'value' => true,
        'description' => true,
        'articles' => true,
        'users' => true
    ];
}
