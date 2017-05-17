<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\DocumentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\DocumentsTable Test Case
 */
class DocumentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\DocumentsTable
     */
    public $Documents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.documents',
        'plugin.admin.users',
        'plugin.admin.posts',
        'plugin.admin.categories',
        'plugin.admin.post_types',
        'plugin.admin.post_meta',
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
        $config = TableRegistry::exists('Documents') ? [] : ['className' => 'Admin\Model\Table\DocumentsTable'];
        $this->Documents = TableRegistry::get('Documents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Documents);

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
