<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $lastname
 * @property string $img
 * @property string $firstname
 * @property string $email
 * @property string $phone
 * @property int $gender
 * @property string $address
 * @property int $group_id
 * @property bool $status
 * @property string $domain
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Order[] $orders
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'lastname' => true,
        'img' => true,
        'firstname' => true,
        'email' => true,
        'phone' => true,
        'gender' => true,
        'address' => true,
        'group_id' => true,
        'status' => true,
        'domain' => true,
        'modified' => true,
        'created' => true,
        'group' => true,
        'comments' => true,
        'orders' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
