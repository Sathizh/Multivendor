@component('mail::message')
# MulVen Invoice
ThankYour for the purchase Come, Again
Your Receipt
<h4>Your Order ID : {{ $order->id }}</h4>
@php
// condition needed to superate vendor
$order=App\Order::findOrFail($order->id);
$items=$order->order_items;
@endphp

<table class="table">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td scope="row">{{ $item['name'] }}</td>
            <td>{{ $item['quantity'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h2 class="text-right">Total: ₹ {{$order->grand_total+50}}</h2>


@component('mail::button', ['url' => ''])
product details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
