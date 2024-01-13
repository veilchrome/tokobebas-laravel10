<?php

namespace Modules\Shop\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Modules\Shop\Entities\Category;
use Modules\Shop\Entities\Attribute;
use Modules\Shop\Entities\Product;
use Modules\Shop\Entities\Tag;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Model::unguard();
        // $this->call([]);

        $user = User::first();

        Attribute::setDefaultAttributes();
        $this->command->info('Default Atrribute seeded');

        Category::factory(10)->create();
        $this->command->info('Categories Seeded');
        $randomCategoryIDs = Category::all()->random()->limit(2)->pluck('id');

        Tag::factory(10)->count(10)->create();
        $this->command->info('Tags Seeded');
        $randomTagsIDs = Tag::all()->random()->limit(2)->pluck('id');

        for ($i = 1; $i <= 10; $i++) {
            $manageStock = (bool)random_int(0, 1);

            $product = Product::factory()->create([
                'user_id' => $user->id,
                'manage_stock' => $manageStock,
            ]);

            $product->categories()->sync(randomCategoryIDs);
            $product->tags()->sync(randomTagsIDs);

            // masih ada yang eror karena Undefined constant.
        }
    }
}
