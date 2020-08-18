@extends('layout.user_layout')
@section('title')
    Health Care
@endsection
@section('user_content')

    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class=" d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-25 text-left">
                                <h2>Health Care</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
        <section class="blog_area pt-25 pb-30" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach($children as $p)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="upload/{{$p->post_imageName}}" alt="">
                                    <a href="blog_detail/{{$p->post_id}}" class="blog_item_date">
                                        <h3>{{ \Carbon\Carbon::parse($p->created_at)->format('j') }}</h3>
                                        <p>{{ \Carbon\Carbon::parse($p->created_at)->format('F') }}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_detail/{{$p->post_id}}">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{$p->post_title}}</h2>
                                    </a>
                                    <p>{!!$p->post_summary!!}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            @endforeach
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {{--                    right sidebar--}}
                    @include('layout.rightSideBar')
                    {{--                    end sidebar--}}
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>

@endsection
