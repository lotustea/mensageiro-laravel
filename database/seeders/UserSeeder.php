<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@bussolasocial.com.br',
            'password' => bcrypt($faker->password),
            'token' => bcrypt($faker->password),
            'tipo_usuario_id' => 1
        ]);

        User::create([
            'name' => 'teste sistema',
            'email' => 'testesistema@bussolasocial.com.br',
            'password' => bcrypt($faker->password),
            'token' => bcrypt($faker->password),
            'tipo_usuario_id' => 2
        ]);

        User::create([
            'name' => 'teste usuario comum',
            'email' => 'testesusuariocomum@bussolasocial.com.br',
            'password' => bcrypt($faker->password),
            'token' => bcrypt($faker->password),
            'tipo_usuario_id' => 3
        ]);
    }
}
