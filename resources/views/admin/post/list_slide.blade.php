
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
{{--            <div class="row w3-res-tb">--}}
{{--                <div class="col-sm-5 m-b-xs">--}}
{{--                    <select class="input-sm form-control w-sm inline v-middle">--}}
{{--                        <option value="0">Bulk action</option>--}}
{{--                        <option value="1">Delete selected</option>--}}
{{--                        <option value="2">Bulk edit</option>--}}
{{--                        <option value="3">Export</option>--}}
{{--                    </select>--}}
{{--                    <button class="btn btn-sm btn-default">Apply</button>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="input-sm form-control" placeholder="Search">--}}
{{--                        <span class="input-group-btn">--}}
{{--            <button class="btn btn-sm btn-default" type="button">Go!</button>--}}
{{--          </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
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
                        <th>Category</th>
                        <th>Summary</th>
                        <th>Image Name</th>
                        <th>Post Status</th>
                        <th>Upload Date</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $key =>$cate_pro)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>{{$cate_pro->post_title}}</td>
                        <td>{{$cate_pro->categoryPost->category_name}}</td>
                        <td>{{$cate_pro->post_summary}}</td>
                        <td><img src="/upload/{{$cate_pro->post_imageName}}" alt="" height="100" width="100"></td>
                        <td><?php
                            if($cate_pro->post_status == 0){
                                ?>

                                <a href="{{URL::to('admin/post/inactive/'.$cate_pro->post_id)}}"><span class='fa thumbs-up-style fa-thumbs-down'></span></a>
                           <?php
                            }
                            else{
                            ?>
                                <a href="{{URL::to('admin/post/active/'.$cate_pro->post_id)}}"><span class='fa thumbs-down-style fa-thumbs-up'></span></a>
                            <?php
                            }
                        ?>
                        </td>
                        <td>{{$cate_pro->updated_at}}</td>
                        <td>
                            <a href="{{URL::to('admin/post/edit_post/'.$cate_pro->post_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Are you sure to delete ?')" href="{{URL::to('admin/post/delete_post/'.$cate_pro->post_id)}}" class="active  styling-edit" ui-toggle-class="">
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
