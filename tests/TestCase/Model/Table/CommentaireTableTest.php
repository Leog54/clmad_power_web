<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommentaireTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommentaireTable Test Case
 */
class CommentaireTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommentaireTable
     */
    protected $Commentaire;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Commentaire',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Commentaire') ? [] : ['className' => CommentaireTable::class];
        $this->Commentaire = $this->getTableLocator()->get('Commentaire', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Commentaire);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CommentaireTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
