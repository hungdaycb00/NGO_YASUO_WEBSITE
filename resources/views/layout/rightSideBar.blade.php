<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="search" method="post" role="search">
                <input type="hidden" name="_token" value="{{csrf_token()}}";>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder='Search Keyword'
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = 'Search Keyword'">
                        <div class="input-group-append">
                            <button class="btns" type="submit"><a><i class="ti-search"></i></a></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Search</button>
            </form>
        </aside>
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
            <ul class="list cat-list">
                <li>
                    <a href="/Education" class="d-flex">
                        <p>Education</p>
                    </a>
                </li>
                <li>
                    <a href="/Health" class="d-flex">
                        <p>Health Care</p>
                    </a>
                </li>
                <li>
                    <a href="/Children" class="d-flex">
                        <p>Privileged Children</p>
                    </a>
                </li>
                <li>
                    <a href="/Other" class="d-flex">
                        <p>Others</p>
                    </a>
                </li>
            </ul>
        </aside>
        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
            @foreach($news as $n)
            <div class="media post_item">
                <img src="../upload/{{$n->post_imageName}}" alt="" style="width: 80px; height: 80px;">
                <div class="media-body">
                    <a href="blog_details.html">
                        <h3 style="color: #2d2d2d;">{{$n->post_title}}</h3>
                    </a>
                    <p>{{ \Carbon\Carbon::parse($n->created_at)->format('d M Y') }}</p>
                </div>
            </div>
            @endforeach
        </aside>
        <aside class="single_sidebar_widget instagram_feeds">
            <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
            <ul class="instagram_row flex-wrap">
                <li>
                    <a href="#">
                        <img class="img-fluid" src="frontend/img/children/photo5.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="frontend/img/children/photo6.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="frontend/img/children/photo7.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="frontend/img/children/photo8.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="frontend/img/children/photo9.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="frontend/img/children/photo10.jpg" alt="">
                    </a>
                </li>
            </ul>
        </aside>

    </div>
</div>
