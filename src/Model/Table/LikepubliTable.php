<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Likepubli Model
 *
 * @method \App\Model\Entity\Likepubli newEmptyEntity()
 * @method \App\Model\Entity\Likepubli newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Likepubli[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Likepubli get($primaryKey, $options = [])
 * @method \App\Model\Entity\Likepubli findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Likepubli patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Likepubli[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Likepubli|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Likepubli saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Likepubli[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Likepubli[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Likepubli[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Likepubli[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LikepubliTable extends Table
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

        $this->setTable('likepubli');
        $this->setDisplayField(['id_user', 'id_publi']);
        $this->setPrimaryKey(['id_user', 'id_publi']);
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
            ->integer('id_user')
            ->allowEmptyString('id_user', null, 'create');

        $validator
            ->integer('id_publi')
            ->allowEmptyString('id_publi', null, 'create');

        return $validator;
    }
}
