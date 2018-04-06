<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConservationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConservationsTable Test Case
 */
class ConservationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConservationsTable
     */
    public $Conservations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.conservations',
        'app.assets',
        'app.classifications',
        'app.brands',
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
        $config = TableRegistry::exists('Conservations') ? [] : ['className' => ConservationsTable::class];
        $this->Conservations = TableRegistry::get('Conservations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Conservations);

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
