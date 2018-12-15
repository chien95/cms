<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostsCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostsCategoriesTable Test Case
 */
class PostsCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PostsCategoriesTable
     */
    public $PostsCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.posts_categories',
        'app.posts',
        'app.categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PostsCategories') ? [] : ['className' => PostsCategoriesTable::class];
        $this->PostsCategories = TableRegistry::getTableLocator()->get('PostsCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostsCategories);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
