<?php
namespace Admin\Test\TestCase\Model\Table;

use Admin\Model\Table\CompanyMetaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Model\Table\CompanyMetaTable Test Case
 */
class CompanyMetaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Model\Table\CompanyMetaTable
     */
    public $CompanyMeta;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.admin.company_meta',
        'plugin.admin.companies',
        'plugin.admin.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CompanyMeta') ? [] : ['className' => 'Admin\Model\Table\CompanyMetaTable'];
        $this->CompanyMeta = TableRegistry::get('CompanyMeta', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompanyMeta);

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
