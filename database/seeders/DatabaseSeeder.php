<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // rights
        $rightSeeder = new RightSeeder();
        $rightSeeder->run();

        // roles and roles right pivot
        $roleSeeder = new RoleSeeder();
        $roleSeeder->run();
    }
}
