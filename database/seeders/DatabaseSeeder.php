<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::factory()->times(1)->create([
            'name'=>'Sergio Gm',
            'email'=>'sg.moya@email.com',
            'password'=>bcrypt('admin')
        ]);

        Project::factory()->times(20)->create();
    }
}
