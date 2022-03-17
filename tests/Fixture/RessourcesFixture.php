<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RessourcesFixture
 */
class RessourcesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_ress' => 1,
                'nom_ress' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
