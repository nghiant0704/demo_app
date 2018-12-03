<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdminGroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdminGroupsTable Test Case
 */
class AdminGroupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdminGroupsTable
     */
    public $AdminGroups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.admin_groups',
        'app.admins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AdminGroups') ? [] : ['className' => AdminGroupsTable::class];
        $this->AdminGroups = TableRegistry::getTableLocator()->get('AdminGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdminGroups);

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
