<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alquiler Model
 *
 * @method \App\Model\Entity\Alquiler newEmptyEntity()
 * @method \App\Model\Entity\Alquiler newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Alquiler[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alquiler get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alquiler findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Alquiler patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alquiler[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alquiler|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alquiler saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alquiler[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alquiler[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alquiler[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Alquiler[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlquilerTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('alquiler');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('user')
            ->maxLength('user', 150)
            ->requirePresence('user', 'create')
            ->notEmptyString('user');

        $validator
            ->scalar('book')
            ->maxLength('book', 150)
            ->requirePresence('book', 'create')
            ->notEmptyString('book');

        $validator
            ->date('startDate')
            ->requirePresence('startDate', 'create')
            ->notEmptyDate('startDate');

        $validator
            ->date('endDate')
            ->requirePresence('endDate', 'create')
            ->notEmptyDate('endDate');

        $validator
            ->date('deliveryDate')
            ->requirePresence('deliveryDate', 'create')
            ->notEmptyDate('deliveryDate');

        $validator
            ->scalar('status')
            ->maxLength('status', 100)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('statusFine')
            ->maxLength('statusFine', 100)
            ->requirePresence('statusFine', 'create')
            ->notEmptyString('statusFine');

        $validator
            ->integer('fine')
            ->requirePresence('fine', 'create')
            ->notEmptyString('fine');

        return $validator;
    }
}
