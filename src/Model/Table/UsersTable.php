<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\GroupsTable|\Cake\ORM\Association\BelongsTo $Groups
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\HasMany $Orders
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select(['id', 'username', 'password'])
            ->where(['Users.username' => $options['username']]);
       
        return $query;
    }
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'user_id'
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
            ->scalar('username')
            ->maxLength('username', 100)
            ->allowEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->allowEmpty('password');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 100)
            ->allowEmpty('lastname');

        $validator
            ->scalar('img')
            ->maxLength('img', 255)
            ->allowEmpty('img');

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 100)
            ->allowEmpty('firstname');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 100)
            ->allowEmpty('phone');

        $validator
            ->integer('gender')
            ->allowEmpty('gender');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmpty('address');

        $validator
            ->boolean('status')
            ->allowEmpty('status');

        $validator
            ->scalar('domain')
            ->maxLength('domain', 255)
            ->allowEmpty('domain');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));

        return $rules;
    }
}
