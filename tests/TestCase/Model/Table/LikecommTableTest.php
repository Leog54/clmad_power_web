<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LikecommTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LikecommTable Test Case
 */
class LikecommTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LikecommTable
     */
    protected $Likecomm;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Likecomm',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Likecomm') ? [] : ['className' => LikecommTable::class];
        $this->Likecomm = $this->getTableLocator()->get('Likecomm', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Likecomm);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LikecommTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
