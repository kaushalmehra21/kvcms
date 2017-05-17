<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\PostTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\PostTypesTable Test Case
 */
class PostTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\PostTypesTable
     */
    public $PostTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.post_types',
        'plugin.admin.posts',
        'plugin.admin.categories',
        'plugin.admin.users',
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
        $config = TableRegistry::exists('PostTypes') ? [] : ['className' => 'Admin\Model\Table\PostTypesTable'];
        $this->PostTypes = TableRegistry::get('PostTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostTypes);

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
}
