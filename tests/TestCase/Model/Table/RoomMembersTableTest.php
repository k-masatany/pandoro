<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomMembersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomMembersTable Test Case
 */
class RoomMembersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomMembersTable
     */
    public $RoomMembers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.room_members',
        'app.rooms',
        'app.whispers',
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
        $config = TableRegistry::exists('RoomMembers') ? [] : ['className' => RoomMembersTable::class];
        $this->RoomMembers = TableRegistry::get('RoomMembers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoomMembers);

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
