@component('mail::message')
# MulVen Invoice
ThankYour for the purchase Come, Again
Your Receipt
@php
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
            <td>₹ {{ $item['price'] }}</td>
        </tr>
        @endforeach
        <tr>
            <td>Delivery</td>
            <td></td>
            <td>₹ 50</td>
        </tr>
    </tbody>
</table>

<h2 class="text-right">Total: ₹ {{$order->grand_total+50}}</h2>


@component('mail::button', ['url' => ''])
Open Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
