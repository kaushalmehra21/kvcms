<?php
namespace BasicAdmin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompanyMeta Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Companies
 *
 * @method \Admin\Model\Entity\CompanyMetum get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\CompanyMetum newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\CompanyMetum[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\CompanyMetum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\CompanyMetum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\CompanyMetum[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\CompanyMetum findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompanyMetaTable extends Table
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

        $this->setTable('company_meta');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER',
            'className' => 'BasicAdmin.Companies'
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
            ->requirePresence('company_key', 'create')
            ->notEmpty('company_key');

        $validator
            ->requirePresence('company_value', 'create')
            ->notEmpty('company_value');

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
        $rules->add($rules->existsIn(['company_id'], 'Companies'));

        return $rules;
    }
}
