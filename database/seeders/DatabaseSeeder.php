<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        $admin = Role::create(['name'=>'admin']);
        $user1 = Role::create(['name'=>'user1']);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        $user1= User::create([
            'name' => 'Tatiana Tunon',
            'email' => 'tatianatunon@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole($admin->id);
        $user1->assignRole($user1->id);

        User::factory(10)->create();

    }
    
}
