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
                        echo number_format($data4,0).'$';
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
        <div class="clearfix"></div>
    </div>
    <div class="agileits-w3layouts-stats">
        <div class="col-md-12 stats-info widget">
            <div class="stats-info-agileits">
                <div class="stats-title">
                    <h4 class="title">Events Stats</h4>
                </div>
                <div class="stats-body">
                    <ul class="list-unstyled">
                        @foreach($data1 as $e)

                            @foreach($data6 as $d)
                                @if($d->events_id == $e->events_id)
                        <li>{{$e->events_title}} <span class="pull-right">{{number_format($d->total_donates/$e->total_donate*100,2)}}%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar red" style="width:{{number_format($d->total_donates/$e->total_donate*100,2)}}%;"></div>
                            </div>
                        </li>
                                @endif
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{--        <div class="col-md-8 stats-info stats-last widget-shadow">--}}
{{--            <div class="stats-last-agile">--}}
{{--                <table class="table stats-table ">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>S.NO</th>--}}
{{--                        <th>PRODUCT</th>--}}
{{--                        <th>STATUS</th>--}}
{{--                        <th>PROGRESS</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">1</th>--}}
{{--                        <td>Lorem ipsum</td>--}}
{{--                        <td><span class="label label-success">In progress</span></td>--}}
{{--                        <td><h5>85% <i class="fa fa-level-up"></i></h5></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">2</th>--}}
{{--                        <td>Aliquam</td>--}}
{{--                        <td><span class="label label-warning">New</span></td>--}}
{{--                        <td><h5>35% <i class="fa fa-level-up"></i></h5></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">3</th>--}}
{{--                        <td>Lorem ipsum</td>--}}
{{--                        <td><span class="label label-danger">Overdue</span></td>--}}
{{--                        <td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">4</th>--}}
{{--                        <td>Aliquam</td>--}}
{{--                        <td><span class="label label-info">Out of stock</span></td>--}}
{{--                        <td><h5>100% <i class="fa fa-level-up"></i></h5></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">5</th>--}}
{{--                        <td>Lorem ipsum</td>--}}
{{--                        <td><span class="label label-success">In progress</span></td>--}}
{{--                        <td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">6</th>--}}
{{--                        <td>Aliquam</td>--}}
{{--                        <td><span class="label label-warning">New</span></td>--}}
{{--                        <td><h5>38% <i class="fa fa-level-up"></i></h5></td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="clearfix"> </div>
    </div>
    <!-- //market-->
@endsection
