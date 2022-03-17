<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecevoirFixture
 */
class RecevoirFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'recevoir';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_message' => 1,
                'id_conver' => 1,
                'date_reception' => '2022-03-06 16:29:56',
            ],
        ];
        parent::init();
    }
}
