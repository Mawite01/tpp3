<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'sophia',
            'email' => 'sophia@gmail.com',
            'password' => Hash::make('asdf1234')
        ]);
        $admin->assignRole('Admin');

        $editor = User::create([
            'name' => 'Editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('asdf1234')
        ]);
        $editor->assignRole('Editor');
    }
}
