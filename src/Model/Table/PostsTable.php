<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsToMany $Categories
 *
 * @method \App\Model\Entity\Post get($primaryKey, $options = [])
 * @method \App\Model\Entity\Post newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Post[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Post|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Post[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Post findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PostsTable extends Table
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

        $this->setTable('posts');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Comments', [
            'foreignKey' => 'post_id'
        ]);
        $this->belongsToMany('Categories', [
            'foreignKey' => 'post_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'posts_categories'
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title')
            ->add('title', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('slug')
            ->maxLength('slug', 255)
            ->allowEmpty('slug');

        $validator
            ->scalar('arr_img')
            ->maxLength('arr_img', 4294967295)
            ->allowEmpty('arr_img');

        $validator
            ->scalar('info')
            ->maxLength('info', 4294967295)
            ->allowEmpty('info');

        $validator
            ->scalar('description')
            ->maxLength('description', 4294967295)
            ->allowEmpty('description');

        $validator
            ->scalar('content')
            ->maxLength('content', 4294967295)
            ->allowEmpty('content');

        $validator
            ->scalar('info_text1')
            ->maxLength('info_text1', 255)
            ->allowEmpty('info_text1');

        $validator
            ->scalar('info_text2')
            ->maxLength('info_text2', 255)
            ->allowEmpty('info_text2');

        $validator
            ->scalar('info_text3')
            ->maxLength('info_text3', 255)
            ->allowEmpty('info_text3');

        $validator
            ->scalar('info_text4')
            ->maxLength('info_text4', 4294967295)
            ->allowEmpty('info_text4');

        $validator
            ->scalar('info_text5')
            ->maxLength('info_text5', 4294967295)
            ->allowEmpty('info_text5');

        $validator
            ->integer('info_number1')
            ->allowEmpty('info_number1');

        $validator
            ->integer('info_number2')
            ->allowEmpty('info_number2');

        $validator
            ->integer('info_number3')
            ->allowEmpty('info_number3');

        $validator
            ->date('publish_date')
            ->allowEmpty('publish_date');

        $validator
            ->boolean('is_delete')
            ->allowEmpty('is_delete');

        $validator
            ->boolean('published')
            ->requirePresence('published', 'create')
            ->notEmpty('published');

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
        $rules->add($rules->isUnique(['title']));

        return $rules;
    }
}
