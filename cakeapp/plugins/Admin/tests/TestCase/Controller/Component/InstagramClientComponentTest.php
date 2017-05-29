<?php
namespace Admin\Test\TestCase\Controller\Component;

use Admin\Controller\Component\InstagramClientComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * Admin\Controller\Component\InstagramClientComponent Test Case
 */
class InstagramClientComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Admin\Controller\Component\InstagramClientComponent
     */
    public $InstagramClient;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->InstagramClient = new InstagramClientComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InstagramClient);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
