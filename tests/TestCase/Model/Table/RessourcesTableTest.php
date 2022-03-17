<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RessourcesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RessourcesTable Test Case
 */
class RessourcesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RessourcesTable
     */
    protected $Ressources;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ressources',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ressources') ? [] : ['className' => RessourcesTable::class];
        $this->Ressources = $this->getTableLocator()->get('Ressources', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ressources);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RessourcesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
