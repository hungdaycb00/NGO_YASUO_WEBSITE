@extends('layout.user_layout')
@section('title')
    Blog details
@endsection
@section('user_content')
    <!--? Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        @foreach($data as $p)
                        <div class="feature-img text-center">
                            <img class="img-fluid" src="../upload/{{$p->events_imageName}}" alt="">
                        </div>

                        <div class="blog_details">

                            <h2 style="color: #2d2d2d;"> {!!$p->events_title!!}
                            </h2>
                            <label for=""><b>End Time: {{$p->end_time}}</b></label>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                            <p class="excert">
                           {!!$p->events_content!!}
                            </p>
                        </div>
                            <div class="mb-15 "><button class="btn mr-10 color-blue"><a href="{{URL::to('donate/'.$p->events_id)}}">Donate</a></button>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Invite Friend
                                </button>
                                <!-- Modal -->
                            </div>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Invite Friend</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{URL::to('invite_friend')}}" method="post">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="{{$p->events_id}}">
                                                    <input name="message" type="text" class="form-control" onfocus="this.placeholder = ''"
                                                           onblur="this.placeholder = 'Enter messages...'" placeholder='Enter messages...' required><br>
                                                    <input name="mail" type="email" class="form-control" onfocus="this.placeholder = ''"
                                                           onblur="this.placeholder = 'Enter friend email'" placeholder='Enter friend email' required>
                                                </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and
                                4
                                people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
              @include('layout.rightSideBar')
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
@endsection
