<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecevoirTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecevoirTable Test Case
 */
class RecevoirTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecevoirTable
     */
    protected $Recevoir;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Recevoir',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Recevoir') ? [] : ['className' => RecevoirTable::class];
        $this->Recevoir = $this->getTableLocator()->get('Recevoir', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Recevoir);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RecevoirTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
