@extends('admin.layouts.master')
@section('title')
    Thống kê
@endsection
@section('content')

    <!-- Main content -->
    <section class="content container-fluid">
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @foreach($boxes as $box)
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box {{ $box['background'] }}">
                            <div class="inner">
                                <h3>{{ $box['count'] }}</h3>

                                <p>{{ $box['title'] }}</p>
                            </div>
                            <div class="icon">
                                <i class="{{ $box['icon'] }}"></i>
                            </div>
                            <a href="{{ $box['url'] }}" class="small-box-footer">Chi tiết <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                @endforeach
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class=" connectedSortable ui-sortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thống kê đơn hàng</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="barChart" style="height: 261px; width: 623px;" width="1246"
                                        height="522"></canvas>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <span class='notice' style="background-color: rgba(210, 214, 222, 1)"></span>&nbsp;Đơn
                                    hàng đã hủy
                                </div>
                                <div class="col-sm-4 text-center">
                                    <span class='notice' style="background-color: #00a65a"></span>&nbsp;Đơn hàng thành
                                    công
                                </div>
                                <div class="col-sm-4 text-center">
                                    <span class='notice' style="background-color: rgba(60,141,188,0.9)"></span>&nbsp;Doanh
                                    thu ( ĐVT: x 10.000.000 VNĐ )
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->

                <!-- right col -->
            </div>
            <div class="row">
                <section class=" connectedSortable ui-sortable">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Lịch giao hàng</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div id="calendar" class="fc fc-unthemed fc-ltr"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </section>
            </div>
            <!-- /.row (main row) -->

        </section>


    </section>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var now = moment();
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: now.format("YYYY-MM-DD"),
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    @foreach($calendarOrder as $order)
                    {
                        title: 'Đ-{{ $order->id }}',
                        url: '{{ route('orders.edit', ['id' => $order->id ]) }}',
                        start: '{{ \Carbon\Carbon::parse($order->created_at)->format('Y-m-d') }}'
                    },
                    @endforeach
                ]
            });
        });
        $(function () {
            var barChartCanvas = $('#barChart').get(0).getContext('2d');
            var barChart = new Chart(barChartCanvas);
            var barChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Novenber', 'December'],
                datasets: [
                    {
                        label: 'Đơn hàng đã hủy',
                        fillColor: 'rgba(210, 214, 222, 1)',
                        strokeColor: 'rgba(210, 214, 222, 1)',
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [
                            @foreach($countOrders as $month)
                            @if($month['status'] !== 1)
                            @continue
                            @endif
                            {{ $month['countOrder'] }},
                            @endforeach
                        ]
                    },
                    {
                        label: 'Đơn hàng thành công',
                        fillColor: 'rgba(60,141,188,0.9)',
                        strokeColor: 'rgba(60,141,188,0.8)',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [
                            @foreach($countOrders as $month)
                            @if($month['status'] !== 4)
                            @continue
                            @endif
                            {{ $month['countOrder'] }},
                            @endforeach
                        ]
                    },
                    {
                        label: 'Doanh thu',
                        fillColor: 'rgba(60,141,188,0.9)',
                        strokeColor: 'rgba(60,141,188,0.8)',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [
                            @foreach($countOrders as $month)
                            @if($month['status'] !== 4)
                            @continue
                            @endif
                            {{ round($month['revenue'] / 10000000, 1) }},
                            @endforeach
                        ]
                    }
                ]
            };
            barChartData.datasets[1].fillColor = '#00a65a';
            barChartData.datasets[1].strokeColor = '#00a65a';
            barChartData.datasets[1].pointColor = '#00a65a';
            var barChartOptions = {
                scaleBeginAtZero: true,
                scaleShowGridLines: true,
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                scaleGridLineWidth: 1,
                scaleShowHorizontalLines: true,
                scaleShowVerticalLines: true,
                barShowStroke: true,
                barStrokeWidth: 2,
                barValueSpacing: 5,
                barDatasetSpacing: 1,
                legendTemplate: "<ul class='<%=name.toLowerCase()%>-legend'><% for (var i=0; i<datasets.length; i++){%><li><span    style='background-color:<%=datasets[i].fillColor%>'></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                responsive              : true,
                maintainAspectRatio     : true
        };
        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
    });



    </script>
@endsection