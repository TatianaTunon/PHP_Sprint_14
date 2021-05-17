<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\shop;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        $user1= User::create([
            'name' => 'Tatiana Tunon',
            'email' => 'tatianatunon@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        //$admin->assignRole($admin->id);
        //$user1->assignRole($user1->id);

        shop::factory(10)->create();
        User::factory(10)->create();
    }
}
