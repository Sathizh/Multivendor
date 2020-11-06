@extends('layouts.unishop')
@section('content')
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <!-- Shop Toolbar-->
        <div class="shop-toolbar padding-bottom-1x mb-2 pt-3">
            <div class="column">
                <div class="shop-sorting">
                    <label for="sorting">Sort by:</label>
                    <select class="form-control" id="sorting">
                        <option>Popularity</option>
                        <option>Low - High Price</option>
                        <option>High - Low Price</option>
                        <option>Avarage Rating</option>
                        <option>A - Z Order</option>
                        <option>Z - A Order</option>
                    </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
                </div>
            </div>

        </div>
        <!-- Products Grid-->
        <div class="isotope-grid cols-4 mb-2">
            <div class="gutter-sizer"></div>
            <div class="grid-sizer"></div>

            <!-- Product-->
            @foreach ($Products as $product)
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i
                            class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                    </div><a class="product-thumb" href="{{ route('details',$product->id) }}">
                        @php
                        $img=\App\Image::where('product_id',$product->id)->get();
                        @endphp
                        <img class="card-img-top" src="/assets/img/product_img/{{ $img[3]->file_name }}"
                            alt="MulVenZ"></a>
                    <h3 class="product-title"><a href="{{ route('details',$product->id) }}">{{ $product->name }}</a>
                    </h3>
                    <h4 class="product-price">₹ {{ $product->price }}</h4>
                    <div class="product-buttons">
                        {{-- <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                            title="Whishlist"></button> --}}
                        <a href="{{ route('wishlist.add_or_remove', $product->id) }}"
                            class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                            title="Whishlist" data-toast data-toast-type="success" data-toast-position="topRight"
                            data-toast-icon="icon-circle-check" data-toast-title="Product"
                            data-toast-message="successfuly added to cart!"><i class="icon-heart"></i></a>

                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-outline-primary btn-sm"
                            data-toast data-toast-type="success" data-toast-position="topRight"
                            data-toast-icon="icon-circle-check" data-toast-title="Product"
                            data-toast-message="successfuly added to cart!">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $Products->links() }}
        <!-- Pagination-->
        <nav class="pagination">
            <div class="column">
                <ul class="pages">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>...</li>
                    <li><a href="#">12</a></li>
                </ul>
            </div>
            <div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm"
                    href="#">Next&nbsp;<i class="icon-arrow-right"></i></a></div>
        </nav>
    </div>
</div>
@endsection
