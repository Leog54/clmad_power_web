<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublicationTable;
use Cake\TestSuite\TestCase;

class PublicationTableTest extends TestCase 
{
    protected $fixtures = ['app.Publication', 'app.Users', 'app.Categorie'];

    public function setUp(): void
    {
        parent::setUp();
        $this->Publication = $this->getTableLocator()->get('Publications');
    }
}    