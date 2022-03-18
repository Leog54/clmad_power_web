<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LikepubliTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LikepubliTable Test Case
 */
class LikepubliTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LikepubliTable
     */
    protected $Likepubli;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Likepubli',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Likepubli') ? [] : ['className' => LikepubliTable::class];
        $this->Likepubli = $this->getTableLocator()->get('Likepubli', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Likepubli);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LikepubliTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
