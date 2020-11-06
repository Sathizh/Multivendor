@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            @foreach ($Products as $product)
            <div class="col-4">
                <div class="card">
                    @php
                    $imgs=\App\Image::where('product_id',$details->id)->get();
                    @endphp
                    <img class="card-img-top" src="/assets/img/product_img/{{ $img[0]->file_name }}" alt="MulVenZ">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <h3 class="text-center">₹ {{ $product->price }}</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary ">Add to cart</a>

                    </div>
                </div>

            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
