<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\PostMetaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\PostMetaTable Test Case
 */
class PostMetaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\PostMetaTable
     */
    public $PostMeta;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.post_meta',
        'plugin.admin.posts',
        'plugin.admin.categories',
        'plugin.admin.users',
        'plugin.admin.post_types',
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
        $config = TableRegistry::exists('PostMeta') ? [] : ['className' => 'Admin\Model\Table\PostMetaTable'];
        $this->PostMeta = TableRegistry::get('PostMeta', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostMeta);

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
