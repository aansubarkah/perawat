<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvidencesDispositionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvidencesDispositionsTable Test Case
 */
class EvidencesDispositionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvidencesDispositionsTable
     */
    public $EvidencesDispositions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evidences_dispositions',
        'app.evidences',
        'app.users',
        'app.dispositions',
        'app.letters',
        'app.recipients',
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
        $config = TableRegistry::exists('EvidencesDispositions') ? [] : ['className' => 'App\Model\Table\EvidencesDispositionsTable'];
        $this->EvidencesDispositions = TableRegistry::get('EvidencesDispositions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvidencesDispositions);

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
