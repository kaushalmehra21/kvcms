<?php
namespace Admin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Roles
 * @property \Cake\ORM\Association\HasMany $Companies
 * @property \Cake\ORM\Association\HasMany $Documents
 * @property \Cake\ORM\Association\HasMany $Posts
 * @property \Cake\ORM\Association\HasMany $UserMeta
 *
 * @method \Admin\Model\Entity\User get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER',
            'className' => 'Admin.Roles'
        ]);
        $this->hasMany('Companies', [
            'foreignKey' => 'user_id',
            'className' => 'Admin.Companies'
        ]);
        $this->hasMany('Documents', [
            'foreignKey' => 'user_id',
            'className' => 'Admin.Documents'
        ]);
        $this->hasMany('Posts', [
            'foreignKey' => 'user_id',
            'className' => 'Admin.Posts'
        ]);
        $this->hasMany('UserMeta', [
            'foreignKey' => 'user_id',
            'className' => 'Admin.UserMeta'
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
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('activation_key', 'create')
            ->notEmpty('activation_key');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }
}
