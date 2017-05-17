<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserMetum Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $user_key
 * @property string $user_value
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Admin\Model\Entity\User $user
 */
class UserMetum extends Entity
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
        '*' => true,
        'id' => false
    ];
}
