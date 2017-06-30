<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\AccountSessionComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\AccountSessionComponent Test Case
 */
class AccountSessionComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\AccountSessionComponent
     */
    public $AccountSessionComponent;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->AccountSessionComponent = new AccountSessionComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountSessionComponent);

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
