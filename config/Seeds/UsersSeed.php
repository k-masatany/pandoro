<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */


    public function run()
    {
        $passwordHasher = new DefaultPasswordHasher();

        $data = [
            [
                'username' => 'administrator',
                'password' => $passwordHasher->hash('password'),
                'display_name' => 'admin',
                'administrator' => 'true',
            ],
            [
                'username' => 'guest',
                'password' => $passwordHasher->hash('anonymous'),
                'username' => 'guest',
                'administrator' => 'false',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
