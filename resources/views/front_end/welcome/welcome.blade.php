@extends('front_end.layout')

@section('title','Newspaper Site')

@section('content')
    <div class="post-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="carouse-post">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href=""><img src="{{asset('assets/front_end/image/')}}/la.jpg" alt="Los Angeles" width="1100" height="500"></a>
                                    <div class="carousel-caption">
                                        <div class="top-news">
                                            <div class="news-shorting l-p">
                                                <a href=""><i class="fa fa-calendar">7-10-2018</i></a>

                                                <a href=""><i class="fa fa-comment">0</i></a>
                                            </div>
                                            <div class="news-heading l-p">
                                                <a href="#">
                                                    <h5>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h5>
                                                </a>
                                                <p>বালিয়ায় স্কুল ছাত্রীকে জোর পূর্বক ধর্ষণ : আটক ১</p>
                                            </div>
                                            <div class="category l-p">
                                                <a href="#">চাদপুর</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="{{asset('assets/front_end/image/')}}/ny.jpg" alt="Los Angeles" width="1100" height="500"></a>
                                    <div class="carousel-caption">
                                        <div class="top-news">
                                            <div class="news-shorting l-p">
                                                <a href=""><i class="fa fa-calendar">7-10-2018</i></a>

                                                <a href=""><i class="fa fa-comment">0</i></a>
                                            </div>
                                            <div class="news-heading l-p">
                                                <a href="#">
                                                    <h5>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h5>
                                                </a>
                                                <p>বালিয়ায় স্কুল ছাত্রীকে জোর পূর্বক ধর্ষণ : আটক ১</p>
                                            </div>
                                            <div class="category l-p">
                                                <a href="#">চাদপুর</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                    <!--    news publishing jatio news-post section-->
                 @include('front_end.welcome.post-category.jatio')
                    <!-- antarjatik news publish section-->
                  @include('front_end.welcome.post-category.antarjatik')
                </div>

                <!-- lastest news will be publish here-->
                @include('front_end.partials.latest_news')
                @include('front_end.welcome.post-category.add')
        </div>
    </div>
    <!--    Chadpur section post will publish here-->
   @include('front_end.welcome.post-category.cadpur')
    <!--    Chadpur section post will publish here-->
    @include('front_end.welcome.post-category.rajniti')
    <!--    binodon.blade.php and rajnoitik post area-->
    <div class="binodon-khela">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   @include('front_end.welcome.post-category.khela')

                </div>
                <div class="col-md-6">
                   @include('front_end.welcome.post-category.binodon')
                </div>
            </div>
        </div>
    </div>
    <!--    motamot.blade.php section post-->
    @include('front_end.welcome.post-category.motamot')
    <!--    onnanno section-->
    <div class="onnanno">
        <div class="container">
            <div class="row no-gutters">
                @include('front_end.welcome.post-category.islam')
                @include('front_end.welcome.post-category.crime')
                @include('front_end.welcome.post-category.interview')
                @include('front_end.welcome.post-category.helth')
            </div>
        </div>
    </div>
@stop
