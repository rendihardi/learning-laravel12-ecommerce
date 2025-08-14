<?php
if (!function_exists('shop_product_link')) {
    function shop_product_link($product)
    {
        // Default slug kategori kalau tidak ada
        $categorySlug = 'product';

        // Kalau relasi categories ada dan punya isi
        if ($product->categories && $product->categories->count() > 0) {
            $categorySlug = $product->categories->first()->slug;
        }

        // Hasil URL produk
        return url($categorySlug . '/' . $product->slug . '-' . $product->sku);
    }
}
