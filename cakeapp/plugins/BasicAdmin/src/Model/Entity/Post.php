<?php
namespace BasicAdmin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $short_description
 * @property string $description
 * @property int $category_id
 * @property int $user_id
 * @property int $post_type_id
 * @property int $status
 * @property string $featured_image
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Admin\Model\Entity\Category $category
 * @property \Admin\Model\Entity\User $user
 * @property \Admin\Model\Entity\PostType $post_type
 * @property \Admin\Model\Entity\PostMetum[] $post_meta
 * @property \Admin\Model\Entity\Document[] $documents
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
        '*' => true,
        'id' => false
    ];
}
