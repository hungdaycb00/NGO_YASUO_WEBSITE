
@extends('layout.admin_layout')
@section('admin_content')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of Donate
            </div>
            <div class="position-center text-center">

                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert alert" >'.$message.'</span>';
                    Session::put('message', null);
                }
                ?>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Donate ID</th>
                        <th>Code Payment</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone number</th>
                        <th>Amount</th>
{{--                        <th>Events</th>--}}
                        <th>Category</th>
                        <th>Donator-status</th>
                        <th>Payment-status</th>
                        <th>Comment</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listDonate as $key =>$d)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>{{$d->id}}</td>
                        <td>{{$d->code_payment}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->address}}</td>
                        <td>{{$d->phone}}</td>
                        <td>{{number_format($d->amount,0)}}</td>
{{--                        <td>{{$d->events->events_title}}</td>--}}
                        <td>{{$d->category->category_name}}</td>
                        <td>{{$d->statusDonator->status_name}}</td>
                        <td>{{$d->statusMoney->status_name}}</td>
                        <td>{{$d->updated_at}}</td>
                        <td>
                            <a href="{{URL::to('admin/donate/edit/'.$d->id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Are you sure to delete ?')" href="{{URL::to('admin/donate/delete/'.$d->id)}}" class="active  styling-edit" ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
