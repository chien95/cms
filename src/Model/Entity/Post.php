<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $arr_img
 * @property string $info
 * @property string $description
 * @property string $content
 * @property string $info_text1
 * @property string $info_text2
 * @property string $info_text3
 * @property string $info_text4
 * @property string $info_text5
 * @property int $info_number1
 * @property int $info_number2
 * @property int $info_number3
 * @property \Cake\I18n\FrozenDate $publish_date
 * @property bool $is_delete
 * @property bool $published
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Category[] $categories
 */
class Post extends Entity
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
        'info' => true,
        'description' => true,
        'content' => true,
        'info_text1' => true,
        'info_text2' => true,
        'info_text3' => true,
        'info_text4' => true,
        'info_text5' => true,
        'info_number1' => true,
        'info_number2' => true,
        'info_number3' => true,
        'publish_date' => true,
        'is_delete' => true,
        'published' => true,
        'modified' => true,
        'created' => true,
        'comments' => true,
        'categories' => true
    ];
}
