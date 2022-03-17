<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MessageFixture
 */
class MessageFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'message';
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
                'date_message' => '2022-02-28 19:37:41',
                'contenu_message' => 'Lorem ipsum dolor sit amet',
                'id_conver' => 1,
            ],
        ];
        parent::init();
    }
}
