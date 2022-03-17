<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublicationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PublicationTable Test Case
 */
class PublicationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PublicationTable
     */
    protected $Publication;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Publication',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Publication') ? [] : ['className' => PublicationTable::class];
        $this->Publication = $this->getTableLocator()->get('Publication', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Publication);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PublicationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
