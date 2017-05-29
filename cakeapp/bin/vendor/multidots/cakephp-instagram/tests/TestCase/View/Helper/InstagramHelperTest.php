<?php
namespace Instagram\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Instagram\View\Helper\InstagramHelper;

/**
 * Instagram\View\Helper\InstagramHelper Test Case
 */
class InstagramHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Instagram\View\Helper\InstagramHelper
     */
    public $Instagram;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Instagram = new InstagramHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Instagram);

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
