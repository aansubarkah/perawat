<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartementsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartementsUsersTable Test Case
 */
class DepartementsUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartementsUsersTable
     */
    public $DepartementsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.departements_users',
        'app.departements',
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
        $config = TableRegistry::exists('DepartementsUsers') ? [] : ['className' => 'App\Model\Table\DepartementsUsersTable'];
        $this->DepartementsUsers = TableRegistry::get('DepartementsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DepartementsUsers);

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
