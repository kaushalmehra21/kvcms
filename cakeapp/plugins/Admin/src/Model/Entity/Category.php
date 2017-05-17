<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string $title
 * @property string $short_description
 * @property string $description
 * @property string $image
 * @property int $parent_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Admin\Model\Entity\ParentCategory $parent_category
 * @property \Admin\Model\Entity\ChildCategory[] $child_categories
 * @property \Admin\Model\Entity\Post[] $posts
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
        '*' => true,
        'id' => false
    ];
}
