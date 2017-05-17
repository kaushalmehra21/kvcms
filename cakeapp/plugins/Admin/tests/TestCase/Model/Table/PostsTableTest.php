<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\PostsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\PostsTable Test Case
 */
class PostsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\PostsTable
     */
    public $Posts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.posts',
        'plugin.admin.categories',
        'plugin.admin.users',
        'plugin.admin.post_types',
        'plugin.admin.post_meta',
        'plugin.admin.documents',
        'plugin.admin.posts_documents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Posts') ? [] : ['className' => 'Admin\Model\Table\PostsTable'];
        $this->Posts = TableRegistry::get('Posts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Posts);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
