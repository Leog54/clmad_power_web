<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LikecommFixture
 */
class LikecommFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'likecomm';
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
                'id_comm' => 1,
            ],
        ];
        parent::init();
    }
}
