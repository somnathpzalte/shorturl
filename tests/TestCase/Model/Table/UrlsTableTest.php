<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UrlsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UrlsTable Test Case
 */
class UrlsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UrlsTable
     */
    public $Urls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.urls'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Urls') ? [] : ['className' => UrlsTable::class];
        $this->Urls = TableRegistry::getTableLocator()->get('Urls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Urls);

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
