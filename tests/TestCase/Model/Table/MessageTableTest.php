<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MessageTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MessageTable Test Case
 */
class MessageTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MessageTable
     */
    protected $Message;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Message',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Message') ? [] : ['className' => MessageTable::class];
        $this->Message = $this->getTableLocator()->get('Message', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Message);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MessageTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
