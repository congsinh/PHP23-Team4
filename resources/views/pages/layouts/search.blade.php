@foreach($result as $product)
    <div class="single-product-widget">
        <div class="single-wid-product">
            <a href="single_product.blade.php"><img src="@if($product->imageDetail()->first()) {{asset('uploads/images/products/' . $product->imageDetail()->first()->image_detail )}} @endif" alt="" class="product-search"></a>
            <h2><a href="single_product.blade.php">{{ $product->name }}</a></h2>
            <div class="product-wid-price">
                <ins>{{ number_format($product->price) }}</ins>
            </div>
        </div>
    </div>

@endforeach

