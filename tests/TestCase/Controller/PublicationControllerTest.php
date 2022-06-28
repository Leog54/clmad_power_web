<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\PublicationController;
use Authentication\AuthenticationServiceProviderInterface;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\PublicationController Test Case
 *
 * @uses \App\Controller\PublicationController
 */
class PublicationControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.publication',
        'app.users',
        'app.categorie',
    ];

    public function setUp(): void
    {
        parent::setUp();
        $this->Publication = $this->getTableLocator()->get('Publication');
        $this->Session = $this->session([
            'Auth' => [
                'User' => [
                    'id' => 1,
                    'username' => 'testing',
                ]
             ]
        ]);
    }
    // public function testIndex(): void
    // {
    //     $this->Session;
    //     $this->get('/publication');

    //     $this->assertResponseOk();
    // }

    public function testView(): void
    {
        $this->get('/publication/view/1');
        $this->assertResponseOk();
        $this->assertResponseContains('Publication');
    }

    public function testAdd(): void
    {
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $data = [
            'contenu_publi' => "Test contenu publication",
            'data_publi' => '2022-02-28 19:37:41',
            'link_img_publi' => 'https://www.thebackpackerz.com/wp-content/uploads/2019/09/kikesa-concert-olympia-paris-800x800.jpg',
            'link_pj_publi' => '56.png',
            'id_categ' => 1,
            'id_user' => 1,
            'visi' => 1
        ];
        $this->post('/publication', $data);
        $this->assertResponseSuccess();

        $publications = $this->getTableLocator()->get('Publication');
        $query = $publications->find()->where(['contenu_publi' => $data['contenu_publi']]);
        $this->assertEquals(1, $query->count());
    }

//     /**
//      * Test edit method
//      *
//      * @return void
//      * @uses \App\Controller\PublicationController::edit()
//      */
//     public function testEdit(): void
//     {
//         $this->markTestIncomplete('Not implemented yet.');
//     }

//     /**
//      * Test delete method
//      *
//      * @return void
//      * @uses \App\Controller\PublicationController::delete()
//      */
//     public function testDelete(): void
//     {
//         $this->markTestIncomplete('Not implemented yet.');
//     }
// }
}