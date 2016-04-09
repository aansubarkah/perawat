<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvidencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvidencesTable Test Case
 */
class EvidencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvidencesTable
     */
    public $Evidences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evidences',
        'app.users',
        'app.dispositions',
        'app.letters',
        'app.recipients',
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
        $config = TableRegistry::exists('Evidences') ? [] : ['className' => 'App\Model\Table\EvidencesTable'];
        $this->Evidences = TableRegistry::get('Evidences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Evidences);

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
