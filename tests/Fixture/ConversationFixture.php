<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConversationFixture
 */
class ConversationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'conversation';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_conver' => 1,
                'nom_conver' => 'Lorem ipsum dolor sit amet',
                'id_user' => 1,
            ],
        ];
        parent::init();
    }
}
