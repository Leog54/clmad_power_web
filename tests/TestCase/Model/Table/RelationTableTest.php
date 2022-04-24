<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RelationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RelationTable Test Case
 */
class RelationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RelationTable
     */
    protected $Relation;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Relation',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Relation') ? [] : ['className' => RelationTable::class];
        $this->Relation = $this->getTableLocator()->get('Relation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Relation);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RelationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
