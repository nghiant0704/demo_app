<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdminGroups Model
 *
 * @property \App\Model\Table\AdminsTable|\Cake\ORM\Association\HasMany $Admins
 *
 * @method \App\Model\Entity\AdminGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdminGroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdminGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdminGroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminGroup|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdminGroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdminGroup findOrCreate($search, callable $callback = null, $options = [])
 */
class AdminGroupsTable extends Table
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

        $this->setTable('admin_groups');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Admins', [
            'foreignKey' => 'admin_group_id'
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
            ->scalar('name')
            ->maxLength('name', 128)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('sort_order', 'create')
            ->notEmpty('sort_order');

        $validator
            ->scalar('permissions')
            ->requirePresence('permissions', 'create')
            ->notEmpty('permissions');

        return $validator;
    }
}
