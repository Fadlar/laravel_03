<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Editor',
                'email' => 'editor@example.com',
                'role' => 'editor',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Operator',
                'email' => 'operator@example.com',
                'role' => 'operator',
                'password' => bcrypt('password')
            ]

        ])->each(fn ($admin) => \App\Models\Admin::create($admin));
    }
}
