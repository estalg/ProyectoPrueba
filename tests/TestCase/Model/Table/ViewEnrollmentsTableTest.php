<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewEnrollmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewEnrollmentsTable Test Case
 */
class ViewEnrollmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewEnrollmentsTable
     */
    public $ViewEnrollments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.view_enrollments',
        'app.enrollments',
        'app.students',
        'app.subjects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewEnrollments') ? [] : ['className' => ViewEnrollmentsTable::class];
        $this->ViewEnrollments = TableRegistry::getTableLocator()->get('ViewEnrollments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewEnrollments);

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
