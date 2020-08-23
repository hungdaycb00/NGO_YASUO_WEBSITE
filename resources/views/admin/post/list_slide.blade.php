
@extends('layout.admin_layout')
@section('admin_content')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of post
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
                        <th>Title</th>
                        <th>Image</th>
                        <th>Post Status</th>
                        <th>Link Address</th>
                        <th>Upload Date</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $key =>$c)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>{{$c->title}}</td>
                        <td><img src="/upload/{{$c->image_name}}" alt="" height="100" width="100"></td>
                        <td><?php
                            if($c->post_status == 0){
                                ?>
                                <a href="{{URL::to('admin/our_partners/inactive/'.$c->id)}}"><span class='fa thumbs-up-style fa-thumbs-down'></span></a>
                           <?php
                            }
                            else{
                            ?>
                                <a href="{{URL::to('admin/our_partners/active/'.$c->id)}}"><span class='fa thumbs-down-style fa-thumbs-up'></span></a>
                            <?php
                            }
                        ?>
                        </td>
                         <td><a href="{{$c->link_address}}">{{$c->link_address}}</a></td>
                        <td>{{$c->updated_at}}</td>
                        <td>
                            <a href="{{URL::to('admin/our_partners/edit/'.$c->id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Are you sure to delete ?')" href="{{URL::to('admin/our_partners/delete/'.$c->id)}}" class="active  styling-edit" ui-toggle-class="">
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
