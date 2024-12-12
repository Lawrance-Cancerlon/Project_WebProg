<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'phone' => '-',
        ]);

        $categories = [
            ['Computer Programming and Networking', 'computer'],
            ['Creative Writing', 'edit_note'],
            ['Graphics and Design', 'design_services'],
            ['Virtual Assistants', 'person_apron'],
            ['Music & Audio', 'discover_tune'],
            ['Digital Marketing', 'storefront'],
            ['Other', 'dynamic_feed']
        ];
        foreach ($categories as $category) {
            Category::create(['name' => $category[0], 'image' => $category[1]]);
        }
    }
}
