<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\StockManagerBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\StockManagerBehavior Test Case
 */
class StockManagerBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\StockManagerBehavior
     */
    public $StockManager;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->StockManager = new StockManagerBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StockManager);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
