<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoUsuario::create([
            'tipo' => 'admin'
        ]);

        TipoUsuario::create([
            'tipo' => 'sistema'
        ]);

        TipoUsuario::create([
            'tipo' => 'comum'
        ]);
    }
}
