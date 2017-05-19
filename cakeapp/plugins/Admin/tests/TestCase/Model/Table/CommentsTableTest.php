<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\CommentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\CommentsTable Test Case
 */
class CommentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\CommentsTable
     */
    public $Comments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.comments',
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
        'plugin.admin.post_meta'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Comments') ? [] : ['className' => 'Admin\Model\Table\CommentsTable'];
        $this->Comments = TableRegistry::get('Comments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Comments);

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
