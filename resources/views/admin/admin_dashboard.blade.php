@extends('layouts.unishop')
@section('content')
<!-- Page Content-->
<div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row">
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
                        <h4>{{ auth()->user()->name }}</h4><span><b>Since
                            </b>{{ date('F d Y', strtotime(auth()->user()->created_at)) }}</span>
                    </div>
                </div>
            </aside>
            <nav class="list-group">
                <a class="list-group-item with-badge active" href="{{ route('admin.dashboard') }}"><i
                        class="icon-bar-graph-2"></i>dashboard</a>
                <a class="list-group-item " href="{{ route('admin.profile') }}"><i class="icon-head"></i>My
                    Profile</a>
                <a class="list-group-item " href="{{ route('admin.add_category') }}"><i class="icon-plus"></i>Add
                    Category</a>
                <a class="list-group-item with-badge" href="{{ route('admin.maintenance_and_approval')}}"><i
                        class="icon-clipboard"></i>Maintenance
                    & Approval</a>
                <a class="list-group-item with-badge" href="{{ route('home') }}"><i class="icon-bag"></i>Back to
                    <span style="color: orangered">MulVenZ</span></a>

            </nav>
        </div>
        <div class="col-lg-8">
            <div class="d-flex justify-content-around">
                <div class="card border-primary w-25 dashboard1">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <span class="card-title text-white h6 text-nowrap">Number of Customers</span>
                        @php
                        $customer_count=App\User::where('role',3)->count();
                        @endphp
                        <p class="card-text text-white text-center h3">{{ $customer_count }}</p>
                        <a href="{{ route('admin.maintenance_and_approval')}}" class="">
                            <span class="card-text text-white"><i class="icon-box">
                                    View Customer List</i></span> </a> </div>
                </div>
                <div class="card border-success w-25 dashboard2">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <span class="card-title h6 text-nowrap">Number of Vendors</span>
                        @php
                        $vendor_count=App\User::where('role',2)->count();
                        @endphp
                        <p class="card-text h3 text-center">{{ $vendor_count }}</p>
                        <a href="{{ route('admin.maintenance_and_approval')}}" class="">
                            <p class="card-text h6 pt-2 text-danger"><i class="icon-bag"> View
                                    Vendor List</i></p>
                        </a>
                    </div>
                </div>
                <div class="card border-warning w-25 dashboard3">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <span class="card-title text-white h6 text-nowrap">Buyers Data Table</span>
                        <a href="{{ route('buyers.list') }}">
                            <p class="card-text h5 text-white text-center pt-4"><i class="icon-head"> View List</i>
                            </p>
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
        [new Date(2020, 3), 9.3],
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
        Temps: {label: 'Sales'},
        Daylight: {label: 'Daylight'}
        }
        }
        };

        var classicOptions = {
        title: 'Average Temperatures and Daylight in Iceland Throughout the Year',
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
