<?php
namespace BasicAdmin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $PostTypes
 * @property \Cake\ORM\Association\HasMany $PostMeta
 * @property \Cake\ORM\Association\BelongsToMany $Documents
 *
 * @method \Admin\Model\Entity\Post get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Post newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Post[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Post|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Post patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Post[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Post findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PostsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('posts');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('BasicAdmin.Sluggable');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'className' => 'BasicAdmin.Categories'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'BasicAdmin.Users'
        ]);
        $this->belongsTo('PostTypes', [
            'foreignKey' => 'post_type_id',
            'joinType' => 'INNER',
            'className' => 'BasicAdmin.PostTypes'
        ]);
        $this->hasMany('PostMeta', [
            'foreignKey' => 'post_id',
            'className' => 'BasicAdmin.PostMeta'
        ]);
        $this->belongsToMany('Documents', [
            'foreignKey' => 'post_id',
            'targetForeignKey' => 'document_id',
            'joinTable' => 'posts_documents',
            'className' => 'BasicAdmin.Documents'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'post_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'posts_tags',
            'className' => 'BasicAdmin.Tags'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        /*$validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');*/

        $validator
            ->requirePresence('short_description', 'create')
            ->notEmpty('short_description');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->allowEmpty('featured_image');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['post_type_id'], 'PostTypes'));

        return $rules;
    }
}
