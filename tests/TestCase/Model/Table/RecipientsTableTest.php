<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipientsTable Test Case
 */
class RecipientsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipientsTable
     */
    public $Recipients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recipients',
        'app.dispositions',
        'app.letters',
        'app.senders',
        'app.users',
        'app.vias',
        'app.evidences',
        'app.evidences_dispositions',
        'app.evidences_letters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recipients') ? [] : ['className' => 'App\Model\Table\RecipientsTable'];
        $this->Recipients = TableRegistry::get('Recipients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recipients);

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
