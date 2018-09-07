<div class="news-post">
    <a href="#">
        <h3>জাতীয়</h3>
    </a>
    <hr>
    <div class="d-news-post">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-6">
                    <!-- jatio section main post 1-->
                    <div class="initial-post">
                        <div class="news-image">
                            <a href=""><img class="img-fluid img-thumbnail change-color" src="/storage/uploads/{{$post->image}}" alt=""></a>
                        </div>
                        <a class="change-color" href="#">
                            <h6>{{$post->title}}</h6>
                        </a>
                        <p>{{$post->short_description}}</p>
                        <a href="individual-post.html" class="ini-post-overlay"></a>
                    </div>

                    <div class="time-date">
                        <i class="fa fa-clock-o"><span>9:30am</span></i>
                        <i class="fa fa-calendar"><span>7/8/12</span></i>
                    </div>
                </div>
                @endforeach
                <!-- jatio news section main post 2-->
                {{--<div class="col-md-6">--}}
                    {{--<div class="initial-post">--}}
                        {{--<div class="news-image">--}}
                            {{--<a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/la.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<a class="change-color" href="#">--}}
                            {{--<h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>--}}
                        {{--</a>--}}
                        {{--<p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>--}}
                        {{--<a href="#" class="ini-post-overlay"></a>--}}
                    {{--</div>--}}

                    {{--<div class="time-date">--}}
                        {{--<i class="fa fa-clock-o"><span>9:30am</span></i>--}}
                        {{--<i class="fa fa-calendar"><span>7/8/12</span></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <hr>
    {{--<!--   other Jatio news post 1-->--}}
    {{--<div class="tri-news-post">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="initial-post">--}}
                        {{--<div class="news-image">--}}
                            {{--<a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/d.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<a class="change-color" href="#">--}}
                            {{--<h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>--}}
                        {{--</a>--}}
                        {{--<p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>--}}
                        {{--<a href="#" class="ini-post-overlay"></a>--}}
                    {{--</div>--}}

                    {{--<div class="time-date">--}}
                        {{--<i class="fa fa-clock-o"><span>9:30am</span></i>--}}
                        {{--<i class="fa fa-calendar"><span>7/8/12</span></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--   other Jatio news post 2-->--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="initial-post">--}}
                        {{--<div class="news-image">--}}
                            {{--<a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/f.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<a class="change-color" href="#">--}}
                            {{--<h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>--}}
                        {{--</a>--}}
                        {{--<p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>--}}
                        {{--<a href="#" class="ini-post-overlay"></a>--}}
                    {{--</div>--}}

                    {{--<div class="time-date">--}}
                        {{--<i class="fa fa-clock-o"><span>9:30am</span></i>--}}
                        {{--<i class="fa fa-calendar"><span>7/8/12</span></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--   other Jatio news post 3-->--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="initial-post">--}}
                        {{--<div class="news-image">--}}
                            {{--<a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/s.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<a class="change-color" href="#">--}}
                            {{--<h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>--}}
                        {{--</a>--}}
                        {{--<p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>--}}
                        {{--<a href="#" class="ini-post-overlay"></a>--}}
                    {{--</div>--}}

                    {{--<div class="time-date">--}}
                        {{--<i class="fa fa-clock-o"><span>9:30am</span></i>--}}
                        {{--<i class="fa fa-calendar"><span>7/8/12</span></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--   other Jatio news post 4-->--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="initial-post">--}}
                        {{--<div class="news-image">--}}
                            {{--<a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/d.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<a class="change-color" href="#">--}}
                            {{--<h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>--}}
                        {{--</a>--}}
                        {{--<p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>--}}
                        {{--<a href="#" class="ini-post-overlay"></a>--}}
                    {{--</div>--}}

                    {{--<div class="time-date">--}}
                        {{--<i class="fa fa-clock-o"><span>9:30am</span></i>--}}
                        {{--<i class="fa fa-calendar"><span>7/8/12</span></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

</div>
