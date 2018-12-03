<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
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
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('alias')
            ->maxLength('alias', 100)
            ->requirePresence('alias', 'create')
            ->notEmpty('alias');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->scalar('content')
            ->requirePresence('content', 'create')
            ->notEmpty('content');

        $validator
            ->integer('discount')
            ->requirePresence('discount', 'create')
            ->notEmpty('discount');

        $validator
            ->scalar('image_link')
            ->maxLength('image_link', 50)
            ->requirePresence('image_link', 'create')
            ->notEmpty('image_link');

        $validator
            ->scalar('image_list')
            ->requirePresence('image_list', 'create')
            ->notEmpty('image_list');

        $validator
            ->integer('view')
            ->requirePresence('view', 'create')
            ->notEmpty('view');

        $validator
            ->scalar('warranty')
            ->maxLength('warranty', 50)
            ->requirePresence('warranty', 'create')
            ->notEmpty('warranty');

        $validator
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        $validator
            ->integer('buyed')
            ->requirePresence('buyed', 'create')
            ->notEmpty('buyed');

        $validator
            ->integer('rate_total')
            ->requirePresence('rate_total', 'create')
            ->notEmpty('rate_total');

        $validator
            ->integer('rate_count')
            ->requirePresence('rate_count', 'create')
            ->notEmpty('rate_count');

        $validator
            ->scalar('gifts')
            ->maxLength('gifts', 100)
            ->requirePresence('gifts', 'create')
            ->notEmpty('gifts');

        $validator
            ->scalar('video')
            ->maxLength('video', 255)
            ->requirePresence('video', 'create')
            ->notEmpty('video');

        $validator
            ->scalar('feature')
            ->requirePresence('feature', 'create')
            ->notEmpty('feature');

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

        return $rules;
    }
}
