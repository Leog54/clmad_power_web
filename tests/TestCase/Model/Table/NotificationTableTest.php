<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificationTable Test Case
 */
class NotificationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificationTable
     */
    protected $Notification;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Notification',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Notification') ? [] : ['className' => NotificationTable::class];
        $this->Notification = $this->getTableLocator()->get('Notification', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Notification);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NotificationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
