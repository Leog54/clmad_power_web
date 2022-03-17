<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConversationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConversationTable Test Case
 */
class ConversationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConversationTable
     */
    protected $Conversation;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Conversation',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Conversation') ? [] : ['className' => ConversationTable::class];
        $this->Conversation = $this->getTableLocator()->get('Conversation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Conversation);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConversationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
