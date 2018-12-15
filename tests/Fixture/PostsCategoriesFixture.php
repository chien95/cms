<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PostsCategoriesFixture
 *
 */
class PostsCategoriesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'post_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'category_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'category_id' => ['type' => 'index', 'columns' => ['category_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['post_id', 'category_id'], 'length' => []],
            'posts_categories_ibfk_1' => ['type' => 'foreign', 'columns' => ['category_id'], 'references' => ['categories', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'posts_categories_ibfk_2' => ['type' => 'foreign', 'columns' => ['post_id'], 'references' => ['posts', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'post_id' => 1,
                'category_id' => 1
            ],
        ];
        parent::init();
    }
}
