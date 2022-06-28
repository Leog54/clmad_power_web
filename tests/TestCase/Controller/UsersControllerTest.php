<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\UsersController Test Case
 *
 * @uses \App\Controller\UsersController
 */
class UsersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.users',
    ];

    /**
     * Test Ajout utilisateur
     *
     * @return void
     * @uses \App\Controller\UsersController::add()
     */
    public function testAdd(): void
    {
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        
        $data = [
            'nom_user' => 'GERARD',
            'prenom' => 'Léo',
            'sexe_user' => 'M',
            'num_rue_user' => '10',
            'rue_user' => 'rue du Test',
            'cp_user' => '12345',
            'ville_user' => 'TEST',
            'num_tel_user' => '0123456789',
            'email' => 'test@mail.com',
            'password' => 'test123&*',
            'date_naissance_user' => 2022-06-01,
            'situation_familial_user' => 'C',
        ];
        $this->post('users', $data);
        $this->assertResponseSuccess();

        $users = $this->getTableLocator()->get('Users');
        $query = $users->find()->where(['email' => $data['email']]);
        $this->assertEquals(1, $query->count());
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\UsersController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\UsersController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
