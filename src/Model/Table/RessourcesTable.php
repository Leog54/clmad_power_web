<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ressources Model
 *
 * @method \App\Model\Entity\Ressource newEmptyEntity()
 * @method \App\Model\Entity\Ressource newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ressource[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ressource get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ressource findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ressource patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ressource[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ressource|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ressource saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ressource[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ressource[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ressource[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ressource[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RessourcesTable extends Table
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

        $this->setTable('ressources');
        $this->setDisplayField('id_ress');
        $this->setPrimaryKey('id_ress');
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
            ->integer('id_ress')
            ->allowEmptyString('id_ress', null, 'create');

        $validator
            ->scalar('nom_ress')
            ->maxLength('nom_ress', 50)
            ->requirePresence('nom_ress', 'create')
            ->notEmptyString('nom_ress');

        return $validator;
    }
}
