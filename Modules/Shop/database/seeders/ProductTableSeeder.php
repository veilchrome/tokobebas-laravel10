<?php

namespace Modules\Shop\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Model::unguard();
        // $this->call([]);
        $this->command->info("This Is Product Seeder");
    }
}
