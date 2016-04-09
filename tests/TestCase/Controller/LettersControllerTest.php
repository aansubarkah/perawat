<?php
namespace App\Test\TestCase\Controller;

use App\Controller\LettersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\LettersController Test Case
 */
class LettersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.letters',
        'app.senders',
        'app.users',
        'app.groups',
        'app.dispositions',
        'app.recipients',
        'app.evidences',
        'app.evidences_dispositions',
        'app.evidences_letters',
        'app.departements',
        'app.departements_users',
        'app.vias'
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
