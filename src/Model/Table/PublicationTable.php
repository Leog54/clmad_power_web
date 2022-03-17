<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Publication Model
 *
 * @method \App\Model\Entity\Publication newEmptyEntity()
 * @method \App\Model\Entity\Publication newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Publication[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Publication get($primaryKey, $options = [])
 * @method \App\Model\Entity\Publication findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Publication patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Publication[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Publication|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publication saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publication[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Publication[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Publication[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Publication[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PublicationTable extends Table
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

        $this->setTable('publication');
        $this->setDisplayField('id_publi');
        $this->setPrimaryKey('id_publi');
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
            ->integer('id_publi')
            ->allowEmptyString('id_publi', null, 'create');

        $validator
            ->scalar('contenu_publi')
            ->maxLength('contenu_publi', 5000)
            ->requirePresence('contenu_publi', 'create')
            ->notEmptyString('contenu_publi');

        $validator
            ->dateTime('date_publi')
            ->requirePresence('date_publi', 'create')
            ->notEmptyDateTime('date_publi');

        $validator
            ->scalar('link_img_publi')
            ->maxLength('link_img_publi', 500)
            ->allowEmptyString('link_img_publi');

        $validator
            ->scalar('link_pj_publi')
            ->maxLength('link_pj_publi', 500)
            ->allowEmptyString('link_pj_publi');

        $validator
            ->integer('id_categ')
            ->requirePresence('id_categ', 'create')
            ->notEmptyString('id_categ');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmptyString('id_user');

        return $validator;
    }
}
