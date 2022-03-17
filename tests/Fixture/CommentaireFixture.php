<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommentaireFixture
 */
class CommentaireFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'commentaire';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_comm' => 1,
                'contenu_comm' => 'Lorem ipsum dolor sit amet',
                'date_comm' => '2022-02-28 19:37:41',
                'id_publi' => 1,
            ],
        ];
        parent::init();
    }
}
