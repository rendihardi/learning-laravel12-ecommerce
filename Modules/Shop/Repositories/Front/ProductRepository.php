<?php

namespace Modules\Shop\Repositories\Front;

use Modules\Shop\Repositories\Front\Interface\ProductRepositoryInterface;
use Modules\Shop\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function findAll($options = [])
    {
       $perPage = $options['per_page'] ?? null;
       $products = Product::with('categories', 'tags');
       if ($perPage) {
           return $products->paginate($perPage);
       }
       return $products->get();
    }
}