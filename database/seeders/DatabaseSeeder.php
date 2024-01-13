<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Shop\Database\seeders\ShopDatabaseSeeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        if ($this->command->confirm('Do You Want to Referesh Migrate before seeding, it will clear the data?')) {
            $this->command->call('migrate:refresh');
            $this->command->info('Data Cleared, Starting from blank Database');
        }

        User::factory()->create();
        $this->command->info('sample user seeded.');
        // Lanjut Sampe Sini.
        if ($this->command->confirm('Do you want to seed some sample products?')) {
            $this->call(ShopDatabaseSeeder::class);
        }
    }
}
