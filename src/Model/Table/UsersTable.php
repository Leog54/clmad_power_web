<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id_user');
        $this->setPrimaryKey('id_user');
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
            ->scalar('nom_user')
            ->maxLength('nom_user', 100)
            ->requirePresence('nom_user', 'create')
            ->notEmptyString('nom_user');

        $validator
            ->scalar('prenom_user')
            ->maxLength('prenom_user', 100)
            ->requirePresence('prenom_user', 'create')
            ->notEmptyString('prenom_user');

        $validator
            ->scalar('sexe_user')
            ->maxLength('sexe_user', 1)
            ->requirePresence('sexe_user', 'create')
            ->notEmptyString('sexe_user');

        $validator
            ->scalar('num_rue_user')
            ->maxLength('num_rue_user', 4)
            ->requirePresence('num_rue_user', 'create')
            ->notEmptyString('num_rue_user');

        $validator
            ->scalar('rue_user')
            ->maxLength('rue_user', 200)
            ->requirePresence('rue_user', 'create')
            ->notEmptyString('rue_user');

        $validator
            ->scalar('cp_user')
            ->maxLength('cp_user', 5)
            ->requirePresence('cp_user', 'create')
            ->notEmptyString('cp_user');

        $validator
            ->scalar('ville_user')
            ->maxLength('ville_user', 200)
            ->allowEmptyString('ville_user');

        $validator
            ->scalar('num_tel_user')
            ->maxLength('num_tel_user', 10)
            ->requirePresence('num_tel_user', 'create')
            ->notEmptyString('num_tel_user');

        $validator
            ->scalar('email_user')
            ->maxLength('email_user', 200)
            ->requirePresence('email_user', 'create')
            ->notEmptyString('email_user');

        $validator
            ->scalar('mdp_user')
            ->maxLength('mdp_user', 500)
            ->requirePresence('mdp_user', 'create')
            ->notEmptyString('mdp_user');

        $validator
            ->dateTime('date_naissance_user')
            ->requirePresence('date_naissance_user', 'create')
            ->notEmptyDateTime('date_naissance_user');

        $validator
            ->scalar('situation_familial_user')
            ->maxLength('situation_familial_user', 1)
            ->allowEmptyString('situation_familial_user');

        $validator
            ->boolean('cgu_consent_user')
            ->allowEmptyString('cgu_consent_user');

        $validator
            ->integer('id_role_user')
            ->allowEmptyString('id_role_user');

        return $validator;
    }
}
