<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\PostsTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\PostsTagsTable Test Case
 */
class PostsTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\PostsTagsTable
     */
    public $PostsTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.posts_tags',
        'plugin.admin.posts',
        'plugin.admin.categories',
        'plugin.admin.users',
        'plugin.admin.roles',
        'plugin.admin.companies',
        'plugin.admin.company_meta',
        'plugin.admin.documents',
        'plugin.admin.posts_documents',
        'plugin.admin.user_meta',
        'plugin.admin.post_types',
        'plugin.admin.post_meta',
        'plugin.admin.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PostsTags') ? [] : ['className' => 'Admin\Model\Table\PostsTagsTable'];
        $this->PostsTags = TableRegistry::get('PostsTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostsTags);

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
