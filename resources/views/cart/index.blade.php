@extends('layouts.unishop')

@section('content')
<div class="container">
    <div class="table-responsive shopping-cart mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Subtotal</th>
                    <th class="text-center"><a class="btn btn-sm btn-outline-danger"
                            href="{{ route('cart.clear') }}">Clear Cart</a></th>
                </tr>
            </thead>
            <tbody>
                @if (count($cartItems))
                @foreach ($cartItems as $item)
                <tr>
                    <td>
                        <div class="product-item"><a class="product-thumb" href="{{ route('details',$item->id) }}"><img
                                    src="{{ asset('default.jpg') }}" alt="Product"></a>
                            <div class="product-info align-middle">
                                <h4 class="product-title"><a
                                        href="{{ route('details',$item->id) }}">{{ $item->name }}</a></h4>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-end">
                            <form action="{{route('cart.update',$item->id)}}" class="form-inline" method="get">
                                <input type="number" class="form-control w-25 form-control-sm" name="quantity" min="1"
                                    required value="{{$item->quantity}}">
                                <input class="btn text-primary btn-sm" type="submit" value="save">
                            </form>
                        </div>
                    </td>
                    <td class="text-center text-lg text-medium">₹
                        {{\Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>

                    <td class="text-center"><a class="remove-from-cart" href="{{route ('cart.destroy',$item->id)}}"
                            data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">

                        <h4 class="text-center">-- No items --</h4>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="shopping-cart-footer">
        <div class="column">
            <form class="coupon-form" method="post">
                <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required>
                <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
            </form>
        </div>
        <div class="column text-lg">
            <h4>Total price: <span class="text-medium">₹{{\Cart::session(auth()->id())->getTotal()}}.00</span></h4>
        </div>
    </div>

    @if (\Cart::session(auth()->id())->getTotal()>0)
    <div class="d-flex justify-content-end pb-5 mb-5 pl-5">
        <a href="{{ route('cart.checkout')}}" class="btn btn-info">Proceed to checkout</a>
    </div>
    @endif

</div>
@endsection
