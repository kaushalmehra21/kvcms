<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\UserMetaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\UserMetaTable Test Case
 */
class UserMetaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\UserMetaTable
     */
    public $UserMeta;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.user_meta',
        'plugin.admin.users',
        'plugin.admin.roles',
        'plugin.admin.companies',
        'plugin.admin.company_meta',
        'plugin.admin.documents',
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
        $config = TableRegistry::exists('UserMeta') ? [] : ['className' => 'Admin\Model\Table\UserMetaTable'];
        $this->UserMeta = TableRegistry::get('UserMeta', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserMeta);

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
