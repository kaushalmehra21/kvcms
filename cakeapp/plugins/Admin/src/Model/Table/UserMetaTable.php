<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserMeta Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \Admin\Model\Entity\UserMetum get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\UserMetum newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\UserMetum[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\UserMetum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\UserMetum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\UserMetum[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\UserMetum findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserMetaTable extends Table
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

        $this->setTable('user_meta');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Users'
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
            ->requirePresence('user_key', 'create')
            ->notEmpty('user_key');

        $validator
            ->requirePresence('user_value', 'create')
            ->notEmpty('user_value');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
