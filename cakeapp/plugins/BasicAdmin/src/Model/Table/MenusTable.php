<?php
namespace BasicAdmin\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Menus Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentMenus
 * @property \Cake\ORM\Association\HasMany $ChildMenus
 *
 * @method \Admin\Model\Entity\Menu get($primaryKey, $options = [])
 * @method \Admin\Model\Entity\Menu newEntity($data = null, array $options = [])
 * @method \Admin\Model\Entity\Menu[] newEntities(array $data, array $options = [])
 * @method \Admin\Model\Entity\Menu|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Admin\Model\Entity\Menu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Admin\Model\Entity\Menu[] patchEntities($entities, array $data, array $options = [])
 * @method \Admin\Model\Entity\Menu findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MenusTable extends Table
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

        $this->setTable('menus');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ParentMenus', [
            'className' => 'BasicAdmin.Menus',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildMenus', [
            'className' => 'BasicAdmin.Menus',
            'foreignKey' => 'parent_id'
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

        $validator
            ->requirePresence('short_description', 'create')
            ->notEmpty('short_description');

        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->integer('serial_number')
            ->requirePresence('serial_number', 'create')
            ->notEmpty('serial_number');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentMenus'));

        return $rules;
    }
}
