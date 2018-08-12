<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Urls Model
 *
 * @method \App\Model\Entity\Url get($primaryKey, $options = [])
 * @method \App\Model\Entity\Url newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Url[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Url|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Url|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Url patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Url[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Url findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UrlsTable extends Table
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

        $this->setTable('urls');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('main_url')
            ->maxLength('main_url', 255)
            ->requirePresence('main_url', 'create')
            ->notEmpty('main_url');

        $validator
            ->scalar('tiny_url')
            ->maxLength('tiny_url', 255)
            ->requirePresence('tiny_url', 'create')
            ->notEmpty('tiny_url');

        $validator
            ->scalar('user_ip')
            ->maxLength('user_ip', 255)
            ->allowEmpty('user_ip');

        return $validator;
    }
}
