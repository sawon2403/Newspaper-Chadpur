@extends('front-end.layout')

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
                                    <a href=""><img src="image/la.jpg" alt="Los Angeles" width="1100" height="500"></a>
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
                                    <a href=""><img src="image/ny.jpg" alt="Los Angeles" width="1100" height="500"></a>
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
                    <div class="news-post">
                        <a href="#">
                            <h3>জাতীয়</h3>
                        </a>
                        <hr>
                        <div class="d-news-post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- jatio section main post 1-->
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/chicago.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="individual-post.html" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!-- jatio news section main post 2-->
                                    <div class="col-md-6">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/la.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
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
                        <hr>
                        <!--   other Jatio news post 1-->
                        <div class="tri-news-post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/d.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!--   other Jatio news post 2-->
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/f.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!--   other Jatio news post 3-->
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/s.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!--   other Jatio news post 4-->
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/d.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
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
                    <!-- antarjatik news publish section-->
                    <div class="news-post">
                        <a href="#">
                            <h3>আন্তর্জাতিক</h3>
                        </a>
                        <hr>
                        <div class="d-news-post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- jatio section main post 1-->
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/chicago.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!-- jatio section main post 2-->
                                    <div class="col-md-6">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/la.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
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
                        <hr>
                        <div class="tri-news-post">
                            <div class="container">
                                <div class="row">
                                    <!--   other Jatio news post 1-->
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/d.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!--   other Jatio news post 2-->
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/f.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!--   other Jatio news post 3-->
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/s.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!--   other Jatio news post 4-->
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/d.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
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

                <!-- lastest news will be publish here-->
                <div class="col-md-4">
                    <div class="lastest">
                        <h3>সর্বশেষ খবর</h3>
                        <hr>
                        <ul>
                            <li>
                                <a href="#">মতলবে রথ যাত্রায় বিদ্যুৎস্পৃষ্টে স্কুল শিক্ষক নিহত ॥ আহত ২৫</a>
                            </li>
                            <hr>
                            <li>
                                <a href="#">হাজীগঞ্জে অফিস খরচ না দেয়ায় ৪২ জন প্রাথমিক শিক্ষক পদোন্নতি থেকে বঞ্চিত</a>
                            </li>
                            <hr>
                            <li>
                                <a href="#">চাঁদপুর সদর উপজেলা গণফোরামের বর্ধিত সভা</a>
                            </li>
                            <hr>
                            <li>
                                <a href="#">পারমাণবিক বিদ্যুৎ কেন্দ্রের দ্বিতীয় ইউনিটের উদ্বোধন চাঁদপুরে বড় পর্দায় প্রচার</a>
                            </li>
                            <hr>
                            <li>
                                <a href="#">মতলবে রথ যাত্রায় বিদ্যুৎস্পৃষ্টে স্কুল শিক্ষক নিহত ॥ আহত ২৫</a>
                            </li>
                            <hr>
                            <li>
                                <a href="#">পারমাণবিক বিদ্যুৎ কেন্দ্রের দ্বিতীয় ইউনিটের উদ্বোধন চাঁদপুরে বড় পর্দায় প্রচার</a>
                            </li>
                            <hr>
                        </ul>
                    </div>
                    <!--                    post your add here-->
                    <div class="biggapon">
                        <h1>post your add</h1>
                    </div>
                    <div class="biggapon">
                        <h1>post your add</h1>
                    </div>
                    <div class="biggapon">
                        <h1>post your add</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Chadpur section post will publish here-->
    <div class="chadpur">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news-post">
                        <a href="#">
                            <h3>চাঁদপুর</h3>
                        </a>
                        <hr>
                        <div class="d-news-post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- Chadpur section main post 1-->
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/chicago.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!-- Chadpur section main post 2-->
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/la.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <!-- Chadpur section main post 4-->
                                    <div class="col-md-3">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/la.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <!-- Chadpur section main post 1-->
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/chicago.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
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
    </div>
    <!--    Chadpur section post will publish here-->
    <div class="rajniti">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news-post">
                        <a href="#">
                            <h3>রাজনীতি</h3>
                        </a>
                        <hr>
                        <div class="d-news-post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- rajniti section main post 1-->
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/chicago.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
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
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/la.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
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
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/la.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
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
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/chicago.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
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
    </div>
    <!--    binodon and rajnoitik post area-->
    <div class="binodon-khela">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="news-post">
                        <a href="#">
                            <h3>খেলা</h3>
                        </a>
                        <hr>
                        <div class="d-news-post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--       KHELA left side main post-->
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/aa.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container-fluid p-none ">
                                            <div class="flex-post">
                                                <div class="row no-gutters">
                                                    <div class="col-md-5"><img class="img-fluid" src="image/bb.jpg" alt=""></div>
                                                    <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                                    <a href="#" class="link-overlay"></a>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px" class="flex-post">
                                                <div class="row no-gutters">
                                                    <div class="col-md-5"><img class="img-fluid" src="image/aa.jpg" alt=""></div>
                                                    <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                                    <!--                                                    post link should be inserted bellow in href-->
                                                    <a href="#" class="link-overlay"></a>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px" class="flex-post">
                                                <div class="row no-gutters">
                                                    <div class="col-md-5"><img class="img-fluid" src="image/cc.jpg" alt=""></div>
                                                    <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                                    <!--post link should be inserted bellow in href-->
                                                    <a href="#" class="link-overlay"></a>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px" class="flex-post">
                                                <div class="row no-gutters">
                                                    <div class="col-md-5"><img class="img-fluid" src="image/s.jpg" alt=""></div>
                                                    <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                                    <!--post link should be inserted bellow in href-->
                                                    <a href="#" class="link-overlay"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="news-post">
                        <a href="#">
                            <h3>বিনোদন</h3>
                        </a>
                        <hr>
                        <div class="d-news-post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="initial-post">
                                            <div class="news-image">
                                                <a href=""><img class="img-fluid img-thumbnail change-color" src="image/s.jpg" alt=""></a>
                                            </div>
                                            <a class="change-color" href="#">
                                                <h6>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</h6>
                                            </a>
                                            <p>হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণহাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</p>
                                            <a href="#" class="ini-post-overlay"></a>
                                        </div>

                                        <div class="time-date">
                                            <i class="fa fa-clock-o"><span>9:30am</span></i>
                                            <i class="fa fa-calendar"><span>7/8/12</span></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container-fluid p-none ">
                                            <div class="flex-post">
                                                <div class="row no-gutters">
                                                    <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                                    <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                                    <a href="#" class="link-overlay"></a>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px" class="flex-post">
                                                <div class="row no-gutters">
                                                    <div class="col-md-5"><img class="img-fluid" src="image/f.jpg" alt=""></div>
                                                    <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                                    <!--                                                    post link should be inserted bellow in href-->
                                                    <a href="#" class="link-overlay"></a>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px" class="flex-post">
                                                <div class="row no-gutters">
                                                    <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                                    <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                                    <!--post link should be inserted bellow in href-->
                                                    <a href="#" class="link-overlay"></a>
                                                </div>
                                            </div>
                                            <div style="margin-top: 10px" class="flex-post">
                                                <div class="row no-gutters">
                                                    <div class="col-md-5"><img class="img-fluid" src="image/s.jpg" alt=""></div>
                                                    <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                                    <!--post link should be inserted bellow in href-->
                                                    <a href="#" class="link-overlay"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    motamot section post-->
    <div class="motamot">
        <div class="container">
            <div class="row no-gutters">
                <div class="news-post">
                    <a href="">
                        <a href="" class="trn-red"><h6>মতামত</h6><hr></a>
                    </a>
                    <div class="container">
                        <div class="row">
                            <!--                           motamot section post1-->
                            <div class="col-md-3">
                                <div class="flex-post">
                                    <div class="row no-gutters">
                                        <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                        <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                        <a href="#" class="link-overlay"></a>
                                    </div>
                                </div>
                            </div>
                            <!--                            motamot section post2-->
                            <div class="col-md-3">
                                <div class="flex-post">
                                    <div class="row no-gutters">
                                        <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                        <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                        <a href="#" class="link-overlay"></a>
                                    </div>
                                </div>
                            </div>
                            <!--                            motamot section post3-->
                            <div class="col-md-3">
                                <div class="flex-post">
                                    <div class="row no-gutters">
                                        <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                        <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                        <a href="#" class="link-overlay"></a>
                                    </div>
                                </div>
                            </div>
                            <!--                            motamot section post4-->
                            <div class="col-md-3">
                                <div class="flex-post">
                                    <div class="row no-gutters">
                                        <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                        <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                        <a href="#" class="link-overlay"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    onnanno section-->
    <div class="onnanno">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="news-post">
                        <a href="">
                            <a href="" class="trn-red"><h6>ইসলাম</h6></a>
                        </a>
                        <hr>
                        <div class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                        <div style="margin-top: 10px" class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/f.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <!--                                                    post link should be inserted bellow in href-->
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-post">
                        <a href="">
                            <a href="" class="trn-red"><h6>অপরাধ</h6></a>
                        </a>
                        <hr>
                        <div class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                        <div style="margin-top: 10px" class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/f.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <!--                                                    post link should be inserted bellow in href-->
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                        <div style="margin-top: 10px" class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/f.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <!--                                                    post link should be inserted bellow in href-->
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-post">
                        <a href="">
                            <a href="" class="trn-red"><h6>সাক্ষাতকার</h6></a>
                        </a>
                        <hr>
                        <div class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                        <div style="margin-top: 10px" class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/f.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <!--                                                    post link should be inserted bellow in href-->
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-post">
                        <a href="">
                            <a href="" class="trn-red"><h6>স্বাস্থ্</h6></a>
                        </a>
                        <hr>
                        <div class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                        <div style="margin-top: 10px" class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/f.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <!--                                                    post link should be inserted bellow in href-->
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
