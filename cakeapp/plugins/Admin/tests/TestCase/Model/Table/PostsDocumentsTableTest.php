<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\PostsDocumentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\PostsDocumentsTable Test Case
 */
class PostsDocumentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\PostsDocumentsTable
     */
    public $PostsDocuments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.posts_documents',
        'plugin.admin.posts',
        'plugin.admin.categories',
        'plugin.admin.users',
        'plugin.admin.post_types',
        'plugin.admin.post_meta',
        'plugin.admin.documents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PostsDocuments') ? [] : ['className' => 'Admin\Model\Table\PostsDocumentsTable'];
        $this->PostsDocuments = TableRegistry::get('PostsDocuments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostsDocuments);

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
