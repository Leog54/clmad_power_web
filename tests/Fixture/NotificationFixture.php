<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotificationFixture
 */
class NotificationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'notification';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_notif' => 1,
                'nom_notif' => 'Lorem ipsum dolor sit amet',
                'date_notif' => '2022-02-28 19:37:41',
                'id_message' => 1,
                'id_user' => 1,
            ],
        ];
        parent::init();
    }
}
