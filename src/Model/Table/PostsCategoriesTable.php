<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PostsCategories Model
 *
 * @property \App\Model\Table\PostsTable|\Cake\ORM\Association\BelongsTo $Posts
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\PostsCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\PostsCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PostsCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PostsCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PostsCategory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PostsCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PostsCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PostsCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class PostsCategoriesTable extends Table
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

        $this->setTable('posts_categories');
        $this->setDisplayField('post_id');
        $this->setPrimaryKey(['post_id', 'category_id']);

        $this->belongsTo('Posts', [
            'foreignKey' => 'post_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['post_id'], 'Posts'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
