@extends('layout.admin_layout')
@section('admin_content')
    <!-- //market-->
    <div class="market-updates">
        <div class="col-md-4 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Events</h4>

                    <h3><?php
                        echo count($data1);
                        ?></h3>
                    <p class="btn btn-default mt-10"><a href="{{URL::to('admin/events/list_post')}}">View details ></a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4 market-update-gd">
            <div class="market-update-block clr-block-1">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-users" ></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Users</h4>
                    <h3><?php
                        echo count($data2);
                        ?></h3>
                    <p class="btn btn-default mt-10"><a href="{{URL::to('admin/list_member')}}">View details ></a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Total Donate</h4>
                    <h3><?php
                        echo $data4;
                        ?></h3>
                    <p class="btn btn-default mt-10"><a href="{{URL::to('admin/donate/list')}}">View details ></a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="chart_agile">
        <div class="col-md-12 floatcharts_w3layouts_left">
            <div class="floatcharts_w3layouts_top">
                <h1>Category Donation</h1>
                <div class="floatcharts_w3layouts_bottom">
                    <div id="graph5"></div>
                    <script>
                        // Use Morris.Bar
                        Morris.Bar({
                            element: 'graph5',
                            data: [

                                {x: 'Education', y: <?php echo $donate1; ?>},
                                {x: 'Health Care',y:  <?php echo $donate2; ?>},
                                {x: 'Privileged Children',y:  <?php echo $donate3; ?>},
                                {x: 'Other', y: <?php echo $donate4; ?>}

                            ],
                            xkey: 'x',
                            ykeys: ['y'],
                            labels: ['Y'],
                            stacked: true
                        });
                    </script>

                </div>

            </div>
        </div>
{{--        <div class="col-md-6 floatcharts_w3layouts_left">--}}
{{--            <div class="floatcharts_w3layouts_top">--}}
{{--                <h1>Events Details</h1>--}}
{{--                <div class="floatcharts_w3layouts_bottom">--}}
{{--                    <div id="graph8"></div>--}}
{{--                    <script>--}}
{{--                        /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */--}}
{{--                        var day_data = [--}}
{{--                            {"title": "hfdghfgh", "Total": 9407, "current": 660},--}}
{{--                            {"title": "2012-09-30", "Total": 3351, "current": 629},--}}
{{--                            {"title": "2012-09-29", "Total": 3269, "current": 618},--}}
{{--                        ];--}}
{{--                        Morris.Bar({--}}
{{--                            element: 'graph8',--}}
{{--                            data: day_data,--}}
{{--                            xkey: 'title',--}}
{{--                            ykeys: ['Total', 'current'],--}}
{{--                            labels: ['Total', 'Current'],--}}
{{--                            xLabelAngle: 60--}}
{{--                        });--}}
{{--                    </script>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="clearfix"></div>
    </div>
    <!-- //market-->
@endsection
