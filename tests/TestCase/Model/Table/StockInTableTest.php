<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StockInTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StockInTable Test Case
 */
class StockInTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StockInTable
     */
    public $StockIn;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stock_in',
        'app.products',
        'app.stock',
        'app.stock_out',
        'app.categories',
        'app.categories_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StockIn') ? [] : ['className' => 'App\Model\Table\StockInTable'];
        $this->StockIn = TableRegistry::get('StockIn', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StockIn);

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
