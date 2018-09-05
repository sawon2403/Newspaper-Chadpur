@extends('front_end.layout')
@section('title','Binodon')

@section('content')
    <!--page subtitle area using bootstrap breadcrumbs-->
    <div class="page-subtitle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">বিনোদন</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--news will be published here-->
    <div class="post-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-post m-none">
                        <div class="container">
                            <div class="row">
                                <!-- jatio news post 1-->
                                <div class="col-md-6">
                                    <div class="initial-post">
                                        <div class="news-image">
                                            <a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/la.jpg" alt=""></a>
                                        </div>
                                        <a class="change-color" href="#"><h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6></a>
                                        <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                        <a href="#" class="ini-post-overlay"></a>
                                    </div>

                                    <div class="time-date">
                                        <i class="fa fa-clock-o"><span>9:30am</span></i>
                                        <i class="fa fa-calendar"><span>7/8/12</span></i>
                                    </div>
                                </div>
                                <!-- jatio news post 2-->
                                <div class="col-md-6">
                                    <div class="initial-post">
                                        <div class="news-image">
                                            <a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/la.jpg" alt=""></a>
                                        </div>
                                        <a class="change-color" href="#"><h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6></a>
                                        <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                        <a href="#" class="ini-post-overlay"></a>
                                    </div>

                                    <div class="time-date">
                                        <i class="fa fa-clock-o"><span>9:30am</span></i>
                                        <i class="fa fa-calendar"><span>7/8/12</span></i>
                                    </div>
                                </div>
                                <!-- jatio news post 3-->
                                <div class="col-md-6">
                                    <div class="initial-post">
                                        <div class="news-image">
                                            <a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/la.jpg" alt=""></a>
                                        </div>
                                        <a class="change-color" href="#"><h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6></a>
                                        <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                        <a href="#" class="ini-post-overlay"></a>
                                    </div>

                                    <div class="time-date">
                                        <i class="fa fa-clock-o"><span>9:30am</span></i>
                                        <i class="fa fa-calendar"><span>7/8/12</span></i>
                                    </div>
                                </div>
                                <!-- jatio news post 4-->
                                <div class="col-md-6">
                                    <div class="initial-post">
                                        <div class="news-image">
                                            <a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/la.jpg" alt=""></a>
                                        </div>
                                        <a class="change-color" href="#"><h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6></a>
                                        <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                        <a href="#" class="ini-post-overlay"></a>
                                    </div>

                                    <div class="time-date">
                                        <i class="fa fa-clock-o"><span>9:30am</span></i>
                                        <i class="fa fa-calendar"><span>7/8/12</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- lastest news will be publish here-->
                @include('front_end.partials.latest_news')
        </div>
    </div>
    <!--    Jatio section other posts will be published here-->
    <div class="jatio">
        <div class="container">
            <div class="row">
                <div class="news-post">
                    <a href="#"><h3>আরও</h3></a>
                    <hr>
                    <div class="d-news-post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <!-- rajniti section main post 1-->
                                    <div class="initial-post">
                                        <div class="news-image">
                                            <a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/chicago.jpg" alt=""></a>
                                        </div>
                                        <a class="change-color" href="#"><h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6></a>
                                        <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                        <a href="#" class="ini-post-overlay"></a>
                                    </div>

                                    <div class="time-date">
                                        <i class="fa fa-clock-o"><span>9:30am</span></i>
                                        <i class="fa fa-calendar"><span>7/8/12</span></i>
                                    </div>
                                </div>
                                <!-- rajniti section main post 2-->
                                <div class="col-md-3">
                                    <div class="initial-post">
                                        <div class="news-image">
                                            <a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/la.jpg" alt=""></a>
                                        </div>
                                        <a class="change-color" href="#"><h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6></a>
                                        <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                        <a href="#" class="ini-post-overlay"></a>
                                    </div>

                                    <div class="time-date">
                                        <i class="fa fa-clock-o"><span>9:30am</span></i>
                                        <i class="fa fa-calendar"><span>7/8/12</span></i>
                                    </div>
                                </div>
                                <!-- rajniti section main post 4-->
                                <div class="col-md-3">
                                    <div class="initial-post">
                                        <div class="news-image">
                                            <a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/la.jpg" alt=""></a>
                                        </div>
                                        <a class="change-color" href="#"><h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6></a>
                                        <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                        <a href="#" class="ini-post-overlay"></a>
                                    </div>

                                    <div class="time-date">
                                        <i class="fa fa-clock-o"><span>9:30am</span></i>
                                        <i class="fa fa-calendar"><span>7/8/12</span></i>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <!-- rajniti section main post 1-->
                                    <div class="initial-post">
                                        <div class="news-image">
                                            <a href=""><img class="img-fluid img-thumbnail change-color" src="{{asset('assets/front_end/image/')}}/chicago.jpg" alt=""></a>
                                        </div>
                                        <a class="change-color" href="#"><h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6></a>
                                        <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                        <a href="#" class="ini-post-overlay"></a>
                                    </div>

                                    <div class="time-date">
                                        <i class="fa fa-clock-o"><span>9:30am</span></i>
                                        <i class="fa fa-calendar"><span>7/8/12</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

