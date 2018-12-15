<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommentsFixture
 *
 */
class CommentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'post_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'content' => ['type' => 'text', 'length' => 4294967295, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'is_delete' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'user_id' => ['type' => 'unique', 'columns' => ['user_id'], 'length' => []],
            'post_id' => ['type' => 'unique', 'columns' => ['post_id'], 'length' => []],
            'comments_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'comments_ibfk_2' => ['type' => 'foreign', 'columns' => ['post_id'], 'references' => ['posts', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => 1,
                'user_id' => 1,
                'post_id' => 1,
                'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'is_delete' => 1,
                'modified' => '2018-11-08 16:18:10',
                'created' => '2018-11-08 16:18:10'
            ],
        ];
        parent::init();
    }
}
