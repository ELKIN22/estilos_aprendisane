<?php

namespace Database\Seeders;

use Database\Seeders\UserSeeder;

use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class
        ]);
    }
}
