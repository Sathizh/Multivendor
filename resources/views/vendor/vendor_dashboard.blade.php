@extends('layouts.unishop')
@section('content')
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row">
        @php
        $id=auth()->user()->id;
        $details=App\Shop::where('user_id',$id)->get();
        $details=$details[0];
        @endphp
        <div class="col-lg-4">
            <aside class="user-info-wrapper">
                <div class="user-cover" style="background-image: url(assets/img/account/user-cover-img.jpg);">
                </div>
                <div class="user-info">
                    <div class="user-avatar">
                        <form action="/new_profile_change" id="profile_change" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <a class="edit-avatar" id="profile_tog"></a>
                            <input type="file" class="edit-avatar d-none" name="new_profile_photo"
                                id="profile_update_trig" href="#">
                        </form>
                        <img src="../assets/img/profile_img/{{ auth()->user()->profile_photo }}" alt="User">
                    </div>
                    <div class="user-data">
                        <h4>{{ $details->shop_name }}</h4><span><b>Since
                            </b>{{ date('F d Y', strtotime($details->created_at)) }}</span>
                    </div>
                </div>
            </aside>
            <nav class="list-group">
                <a class="list-group-item with-badge active" href="#"><i class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item " href="{{ route('shop.profile') }}"><i class="icon-head"></i>Shop
                    Profile</a>
                <a class="list-group-item " href="{{ route('product.add') }}"><i class="icon-plus"></i>Add Product</a>
                <a class="list-group-item with-badge" href="{{ route('product.list')}}"><i class="icon-box"></i>My
                    Products</a>
                <a class="list-group-item with-badge" href="{{ route('MyOrders')}}"><i class="icon-archive"></i>My
                    Orders</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <div class="d-flex justify-content-around">
                <div class="card border-primary w-25 dashboard1">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <span class="card-title text-white h6 text-nowrap">Number of Products</span>
                        @php
                        $product_count=App\Product::where('user_id',auth()->user()->id)->count();
                        @endphp
                        <p class="card-text text-white text-center h3">{{ $product_count }}</p>
                        <a href="{{ route('product.list')}}" class="">
                            <p class="card-text h6 text-white"><i class="icon-box">
                                    View Product List</i></p>
                        </a>
                    </div>
                </div>
                <div class="card border-success w-25 dashboard2">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <span class="card-title h6 text-nowrap">Profit Details</span>
                        @php
                        $orders_for_sum=App\Order::get();
                        $profit=0;
                        foreach ($orders_for_sum as $order_for_sum) {
                        $Orders=$order_for_sum->order_items;
                        foreach ($Orders as $Order)
                        {
                        if ($Order['associatedModel']['user_id']==auth()->user()->id)
                        {
                        $profit+=$Order['price'];
                        }
                        }
                        }

                        @endphp
                        <p class="card-text h3 text-center" id="profit">₹</p>
                        <a href="{{ route('MyOrders')}}" class="">
                            <p class="card-text h6 pt-2 text-danger"><i class="icon-bag"> View Order List</i></p>
                        </a>
                        <script>
                            var x={{ $profit }};
                            x=x.toString();
                            var lastThree = x.substring(x.length-3);
                            var otherNumbers = x.substring(0,x.length-3);
                            if(otherNumbers != '')
                            lastThree = ',' + lastThree;
                            var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
                            // alert(res);
                            document.getElementById("profit").innerHTML = "₹ "+res;
                        </script>
                    </div>
                </div>
                <div class="card border-warning w-25 dashboard3">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <span class="card-title text-white h6 text-nowrap">Buyers Data Table</span>
                        <a href="{{ route('buyers.list') }}">
                            <p class="card-text h5 text-white text-center pt-4"><i class="icon-head"> View List</i></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pt-5" id="chart_div"></div>

        </div>
    </div>
</div>
{{-- chart --}}

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {'packages':['line', 'corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Month');
        data.addColumn('number', "Profit Range");

        data.addRows([
        [new Date(2020, 0), 5.7],
        [new Date(2020, 1), 8.7],
        [new Date(2020, 2), 12],
        [new Date(2020, 3), 15.3],
        [new Date(2020, 4), 18.6],
        [new Date(2020, 5), 20.9],
        [new Date(2020, 6), 6.8],
        [new Date(2020, 7), 16.6],
        [new Date(2020, 8), 13.3],
        [new Date(2020, 9), 9.9],
        [new Date(2020, 10), 6.6],
        [new Date(2020, 11), 4.5]
        ]);

        var materialOptions = {
        chart: {
        title: 'Profit Progress Details'
        },
        width: 800,
        height: 400,
        series: {
        // Gives each series an axis name that matches the Y-axis below.
        0: {axis: 'Salse'},
        1: {axis: 'Daylight'}
        },
        axes: {
        // Adds labels to each axis; they don't have to match the axis names.
        y: {
        Temps: {label: 'Salse'},
        Daylight: {label: 'Daylight'}
        }
        }
        };

        var classicOptions = {
        title: 'Profit Progress Details',
        width: 900,
        height: 500,
        // Gives each series an axis that matches the vAxes number below.
        series: {
        0: {targetAxisIndex: 0},
        1: {targetAxisIndex: 1}
        },
        vAxes: {
        // Adds titles to each axis.
        0: {title: 'Salse'},
        1: {title: 'Daylight'}
        },
        hAxis: {
        ticks: [new Date(2014, 0), new Date(2014, 1), new Date(2014, 2), new Date(2014, 3),
        new Date(2014, 4), new Date(2014, 5), new Date(2014, 6), new Date(2014, 7),
        new Date(2014, 8), new Date(2014, 9), new Date(2014, 10), new Date(2014, 11)
        ]
        },
        vAxis: {
        viewWindow: {
        max: 30
        }
        }
        };

        function drawMaterialChart() {
        var materialChart = new google.charts.Line(chartDiv);
        materialChart.draw(data, materialOptions);
        button.innerText = 'Change to Classic';
        button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
        var classicChart = new google.visualization.LineChart(chartDiv);
        classicChart.draw(data, classicOptions);
        button.innerText = 'Change to Material';
        button.onclick = drawMaterialChart;
        }

        drawMaterialChart();

        }
</script>
@endsection
