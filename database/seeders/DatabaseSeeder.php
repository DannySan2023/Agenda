<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'staff']);
        Role::create(['name' => 'client']);
        
        $users = \App\Models\User::factory(10)->create();

        foreach ($users as $user){
            $user->assignRole('client');
        }

        $userAdmin = \App\Models\User::factory()->create([
            'name' => 'Danny',
            'email' => 'danny@example.com'
        ]);
        $userAdmin->assignRole('admin');

        $userStaff = \App\Models\User::factory()->create([
            'name' => 'Jhon',
            'email' => 'jhon@example.com'
        ]);
        $userStaff->assignRole('staff');

        $this->call(OpeningHoursSeeder::class);
        $this->call(ServicesSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
