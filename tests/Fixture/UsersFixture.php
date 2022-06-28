<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */

    public function init(): void
    {
        $this->records = [
            [
                'nom_user' => 'Lorem ipsum dolor sit amet',
                'prenom_user' => 'Lorem ipsum dolor sit amet',
                'sexe_user' => 'M',
                'num_rue_user' => 'Lo',
                'rue_user' => 'Lorem ipsum dolor sit amet',
                'cp_user' => 'Lor',
                'ville_user' => 'Lorem ipsum dolor sit amet',
                'num_tel_user' => 'Lorem ip',
                'email' => 'test@mail.com',
                'password' => '123',
                'date_naissance_user' => '2022-03-14 13:18:16',
                'situation_familial_user' => 'L',
                'cgu_consent_user' => 1,
                'id_role_user' => 1,
            ],
        ];
        parent::init();
    }
}
