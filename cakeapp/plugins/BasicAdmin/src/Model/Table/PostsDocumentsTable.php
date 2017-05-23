<?php
namespace BasicAdmin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PostsDocuments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Posts
 * @property \Cake\ORM\Association\BelongsTo $Documents
 *
 * @method \Admin\Model\Entity\PostsDocument get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\PostsDocument newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\PostsDocument[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\PostsDocument|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\PostsDocument patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\PostsDocument[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\PostsDocument findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PostsDocumentsTable extends Table
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

        $this->setTable('posts_documents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Posts', [
            'foreignKey' => 'post_id',
            'joinType' => 'INNER',
            'className' => 'BasicAdmin.Posts'
        ]);
        $this->belongsTo('Documents', [
            'foreignKey' => 'document_id',
            'joinType' => 'INNER',
            'className' => 'BasicAdmin.Documents'
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
        $rules->add($rules->existsIn(['document_id'], 'Documents'));

        return $rules;
    }
}
