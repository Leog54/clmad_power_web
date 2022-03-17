<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recevoir Model
 *
 * @method \App\Model\Entity\Recevoir newEmptyEntity()
 * @method \App\Model\Entity\Recevoir newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Recevoir[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recevoir get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recevoir findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Recevoir patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recevoir[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recevoir|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recevoir saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recevoir[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Recevoir[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Recevoir[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Recevoir[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RecevoirTable extends Table
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

        $this->setTable('recevoir');
        $this->setDisplayField(['id_message', 'id_conver']);
        $this->setPrimaryKey(['id_message', 'id_conver']);
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
            ->integer('id_message')
            ->allowEmptyString('id_message', null, 'create');

        $validator
            ->integer('id_conver')
            ->allowEmptyString('id_conver', null, 'create');

        $validator
            ->dateTime('date_reception')
            ->allowEmptyDateTime('date_reception');

        return $validator;
    }
}
