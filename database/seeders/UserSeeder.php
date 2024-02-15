<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
            [
                'id' => 1,
                'name' => 'SUPER ADMINISTRADOR',
                'email' => 'admin@admin.com',
                'password' => Hash::make('stzEF1970')
            ]
        ];

        foreach ($usuarios as $usuario) {
            User::create($usuario);
        }
    }
}
