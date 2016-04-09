<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvidencesLettersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvidencesLettersTable Test Case
 */
class EvidencesLettersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvidencesLettersTable
     */
    public $EvidencesLetters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evidences_letters',
        'app.evidences',
        'app.users',
        'app.dispositions',
        'app.letters',
        'app.recipients',
        'app.evidences_dispositions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EvidencesLetters') ? [] : ['className' => 'App\Model\Table\EvidencesLettersTable'];
        $this->EvidencesLetters = TableRegistry::get('EvidencesLetters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvidencesLetters);

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
