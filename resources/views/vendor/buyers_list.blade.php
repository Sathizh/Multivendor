<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/vendor.min.css') }}">
    <title>MulVenZ</title>
</head>

<body>
    <div class="container mt-5">
        <a href="{{ route('shop.dashboard') }}" class="btn btn-primary btn-sm" style="background-color: orangered"><i
                class="icon-arrow-left"></i></a>
        <table id="table" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zipcode</th>
                </tr>
            </thead>
            @php
            $orders=App\Order::groupBy('shipping_phone')->select('shipping_fullname','shipping_phone','shipping_address','shipping_city','shipping_state','shipping_zipcode','order_items')->get();
            @endphp
            @foreach ($orders as $order)
            @php
            $products=$order->order_items;
            @endphp
            @foreach ($products as $product)
            @if ($product['associatedModel']['user_id']==auth()->user()->id)
            <tbody>
                <tr>
                    <td>{{ $order->shipping_fullname }}</td>
                    <td>{{ $order->shipping_phone }}</td>
                    <td>{{ $order->shipping_address }}</td>
                    <td>{{ $order->shipping_city }}</td>
                    <td>{{ $order->shipping_state }}</td>
                    <td>{{ $order->shipping_zipcode }}</td>
                </tr>
            </tbody>
            @endif
            @endforeach
            @endforeach
        </table>
    </div>
    {{-- datatables --}}
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('assets/customizer/customizer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropzone/min/dropzone.min.css') }}">
    <script>
        $(document).ready(function() {
        $('#table').DataTable();
    } );
    </script>
</body>

</html>
