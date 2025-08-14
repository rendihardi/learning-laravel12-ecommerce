 <div class="col-lg-3 col-6">
     <div class="card card-product card-body p-lg-4 p3">
         <a href="{{ shop_product_link($product) }}"><img src="{{ asset('img/shop_01.jpg') }}" alt=""
                 class="img-fluid"></a>
         <h3 class="product-name mt-3">{{ $product->name }}</h3>
         <div class="rating">
             <i class="bx bxs-star"></i>
             <i class="bx bxs-star"></i>
             <i class="bx bxs-star"></i>
             <i class="bx bxs-star"></i>
             <i class="bx bxs-star"></i>
         </div>
         <div class="detail d-flex justify-content-between align-items-center mt-4">
             <p class="price">{{ $product->price_label }}</p>
             <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
         </div>
     </div>
 </div>
