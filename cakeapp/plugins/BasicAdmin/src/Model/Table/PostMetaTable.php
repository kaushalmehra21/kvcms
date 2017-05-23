<?php
namespace BasicAdmin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PostMeta Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Posts
 *
 * @method \Admin\Model\Entity\PostMetum get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\PostMetum newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\PostMetum[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\PostMetum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\PostMetum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\PostMetum[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\PostMetum findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PostMetaTable extends Table
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

        $this->setTable('post_meta');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Posts', [
            'foreignKey' => 'post_id',
            'joinType' => 'INNER',
            'className' => 'BasicAdmin.Posts'
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
            ->requirePresence('post_key', 'create')
            ->notEmpty('post_key');

        $validator
            ->requirePresence('post_value', 'create')
            ->notEmpty('post_value');

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
        $rules->add($rules->existsIn(['post_id'], 'Posts'));

        return $rules;
    }
}
