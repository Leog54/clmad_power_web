<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategorieFixture
 */
class CategorieFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'categorie';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_categ' => 1,
                'nom_categ' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
