<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EvidencesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EvidencesController Test Case
 */
class EvidencesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evidences',
        'app.users',
        'app.groups',
        'app.dispositions',
        'app.letters',
        'app.senders',
        'app.vias',
        'app.evidences_letters',
        'app.recipients',
        'app.evidences_dispositions',
        'app.departements',
        'app.departements_users'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
