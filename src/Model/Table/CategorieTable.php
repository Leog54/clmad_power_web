<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorie Model
 *
 * @method \App\Model\Entity\Categorie newEmptyEntity()
 * @method \App\Model\Entity\Categorie newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Categorie[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categorie get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categorie findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Categorie patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categorie[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categorie|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorie saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorie[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categorie[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categorie[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categorie[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CategorieTable extends Table
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

        $this->setTable('categorie');
        $this->setDisplayField('id_categ');
        $this->setPrimaryKey('id_categ');
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
            ->integer('id_categ')
            ->allowEmptyString('id_categ', null, 'create');

        $validator
            ->scalar('nom_categ')
            ->maxLength('nom_categ', 50)
            ->requirePresence('nom_categ', 'create')
            ->notEmptyString('nom_categ');

        return $validator;
    }
}
