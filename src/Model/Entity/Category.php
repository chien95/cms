<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $arr_img
 * @property int $parent_id
 * @property int $type
 * @property string $domain
 * @property string $description
 * @property bool $is_delete
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Category $parent_category
 * @property \App\Model\Entity\Category[] $child_categories
 * @property \App\Model\Entity\Post[] $posts
 */
class Category extends Entity
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
        'slug' => true,
        'arr_img' => true,
        'parent_id' => true,
        'type' => true,
        'domain' => true,
        'description' => true,
        'is_delete' => true,
        'modified' => true,
        'created' => true,
        'parent_category' => true,
        'child_categories' => true,
        'posts' => true
    ];
}
