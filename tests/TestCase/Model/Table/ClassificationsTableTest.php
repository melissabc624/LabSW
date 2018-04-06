<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassificationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassificationsTable Test Case
 */
class ClassificationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassificationsTable
     */
    public $Classifications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.classifications',
        'app.assets',
        'app.brands',
        'app.users',
        'app.conservations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Classifications') ? [] : ['className' => ClassificationsTable::class];
        $this->Classifications = TableRegistry::get('Classifications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Classifications);

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
}
