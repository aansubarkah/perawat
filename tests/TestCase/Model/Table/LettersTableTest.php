<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LettersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LettersTable Test Case
 */
class LettersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LettersTable
     */
    public $Letters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.letters',
        'app.senders',
        'app.users',
        'app.vias',
        'app.dispositions',
        'app.recipients',
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
        $config = TableRegistry::exists('Letters') ? [] : ['className' => 'App\Model\Table\LettersTable'];
        $this->Letters = TableRegistry::get('Letters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Letters);

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
