<?php

namespace Modules\Shop\Database\Seeders;

use Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Shop\Database\Factories\ProductFactory;
 
use Modules\Shop\Models\Attribute;
use Modules\Shop\Models\Category;
use Modules\Shop\Models\Product as ModelsProduct;
use Modules\Shop\Models\ProductAttribute;
use Modules\Shop\Models\ProductInventory;
use Modules\Shop\Models\Tag;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

     Model::unguard();

      $user =User::first();

      Attribute::setDefaultAttributes();
      $this->command->info('Attribute Table Seeded');
      $atributWeigth = Attribute::where('code', Attribute::ATTR_WEIGHT)->first();

      Category::factory()->count(10)->create();
      $this->command->info('Category Table Seeded');
      $randomCategoriIds = Category::all()->random()->limit(2)->pluck('id');
      
      Tag::factory()->count(10)->create();
      $this->command->info('Tag Table Seeded');
      $randomTagIds = Tag::all()->random()->limit(2)->pluck('id');

      for ($i=0; $i < 10; $i++) { 
       $manageStock = (bool)random_int(0,1);
       $product = ModelsProduct::factory()->create([
        'user_id' => $user->id,
        'manage_stock' => $manageStock,
       ]);

       $product->categories()->sync($randomCategoriIds);
       $product->tags()->syncWithoutDetaching($randomTagIds);

       ProductAttribute::create([
        'product_id' => $product->id,
        'attribute_id' => $atributWeigth->id,
        'integer_value' => random_int(200, 2000), //gram
       ]);

       if($manageStock){
        ProductInventory::factory()->create([
            'product_id' => $product->id,
            'qty' => random_int(10, 100),
            'low_stock_threshold' => random_int(1, 3),
        ]);
       };
      }
        $this->command->info('Product Table Seeded');
    }
}
