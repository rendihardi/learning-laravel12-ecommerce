<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Shop\Database\Seeders\ShopDatabaseSeeder;
use Illuminate\Support\Facades\Artisan;

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
        //     'email' => 'test1@example.com',
        // ]);
        if($this->command->confirm('Do you want to refresh migraton before seeding, it will delete all data?')) {
             Artisan::call('migrate:refresh');
            $this->command->info('Migrations refreshed');
        }
        User::factory(10)->create();
        $this->command->info('User Table Seeded');

        if($this->command->confirm('Do you want to create products?')) {
            $this->call(ShopDatabaseSeeder::class);
        }
       
    }
}
