<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Likecomm Model
 *
 * @method \App\Model\Entity\Likecomm newEmptyEntity()
 * @method \App\Model\Entity\Likecomm newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Likecomm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Likecomm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Likecomm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Likecomm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Likecomm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Likecomm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Likecomm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Likecomm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Likecomm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Likecomm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Likecomm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LikecommTable extends Table
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

        $this->setTable('likecomm');
        $this->setDisplayField(['id_user', 'id_comm']);
        $this->setPrimaryKey(['id_user', 'id_comm']);
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
            ->integer('id_comm')
            ->allowEmptyString('id_comm', null, 'create');

        return $validator;
    }
}
