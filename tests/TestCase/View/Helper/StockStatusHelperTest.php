<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\StockStatusHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\StockStatusHelper Test Case
 */
class StockStatusHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\StockStatusHelper
     */
    public $StockStatus;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->StockStatus = new StockStatusHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StockStatus);

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
