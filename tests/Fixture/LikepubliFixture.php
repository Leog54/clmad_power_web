<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LikepubliFixture
 */
class LikepubliFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'likepubli';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_user' => 1,
                'id_publi' => 1,
            ],
        ];
        parent::init();
    }
}
