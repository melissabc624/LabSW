<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conservations Model
 *
 * @property \App\Model\Table\AssetsTable|\Cake\ORM\Association\BelongsTo $Assets
 *
 * @method \App\Model\Entity\Conservation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conservation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conservation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conservation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conservation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conservation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conservation findOrCreate($search, callable $callback = null, $options = [])
 */
class ConservationsTable extends Table
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

        $this->setTable('conservations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Assets', [
            'foreignKey' => 'asset_id',
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->scalar('observation')
            ->maxLength('observation', 300)
            ->requirePresence('observation', 'create')
            ->notEmpty('observation');

        $validator
            ->scalar('user')
            ->maxLength('user', 30)
            ->requirePresence('user', 'create')
            ->notEmpty('user');

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
        $rules->add($rules->existsIn(['asset_id'], 'Assets'));

        return $rules;
    }
}
