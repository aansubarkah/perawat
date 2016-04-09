<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartementsTable Test Case
 */
class DepartementsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartementsTable
     */
    public $Departements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.departements',
        'app.users',
        'app.departements_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Departements') ? [] : ['className' => 'App\Model\Table\DepartementsTable'];
        $this->Departements = TableRegistry::get('Departements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Departements);

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
