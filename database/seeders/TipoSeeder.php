<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin ivon',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '1',
        ]);

        $user1=User::create([
            'name' => 'usuario Javi',
            'email' => 'user@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '2',
        ]);

    }
}
