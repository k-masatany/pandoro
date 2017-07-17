<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WhispersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WhispersTable Test Case
 */
class WhispersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WhispersTable
     */
    public $Whispers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.whispers',
        'app.rooms',
        'app.room_members',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Whispers') ? [] : ['className' => WhispersTable::class];
        $this->Whispers = TableRegistry::get('Whispers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Whispers);

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
