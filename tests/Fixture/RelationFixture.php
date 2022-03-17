<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RelationFixture
 */
class RelationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'relation';
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
                'id_user_1' => 1,
                'statut' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
