<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PublicationFixture
 */
class PublicationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'publication';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_publi' => 1,
                'contenu_publi' => 'Lorem ipsum dolor sit amet',
                'date_publi' => '2022-02-28 19:37:41',
                'link_img_publi' => 'Lorem ipsum dolor sit amet',
                'link_pj_publi' => 'Lorem ipsum dolor sit amet',
                'id_categ' => 1,
                'id_user' => 1,
            ],
        ];
        parent::init();
    }
}
