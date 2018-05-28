<div class="pt-10 animated fadeIn row">
    @forelse($products as $product)
        <div class="wp_product">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img class='image'
                         src="@if($product->imageDetail()->first()) {{ asset('uploads/images/products/'.$product->imageDetail()->first()->image_detail) }} @endif"
                         alt="">
                    <h5 class="pt-5 text-center fix-font"><a title="{{$product->name}}" href="{{ asset('product/' . $product->id )}}">{{$product->name}}</a>
                    </h5>
                    <div class="product-carousel-price pt-5">
                        <ins class="price">{{ number_format($product->price) }}đ</ins>
                    </div>
                    <div class="product-option-shop pt-5">
                        <button type="button" class="add_to_cart_button pull-left tryMe" value="{{$product->id}}">
                            <i class="fa fa-shopping-cart"></i>&nbsp;Giỏ hàng
                        </button>
                        <span class="pull-right"
                              style="padding:15px 5px 0px 0px">Sales: {{ $product->sales }}</span>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p> Không tìm thấy sản phẩm nào !</p>
    @endforelse
</div>
<div class="row text-center">
    {{ $products->links() }}
</div>