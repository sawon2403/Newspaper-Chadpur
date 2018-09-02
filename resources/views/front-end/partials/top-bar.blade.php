<body>
<div class="toggle-megamenu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="display: inline-block;">All CATEGORY</h3>
                <i id="menuhide" class="fa fa-window-close float-right"></i>
                <hr>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <li>
                            <p>Firday, June12, 2018</p>
                        </li>
                        <li>
                            <p>সর্বশেষ খবর</p>
                        </li>
                    </ul>
                </div>
                <!--         scrolling text-->
                <div class="col-md-6">
                    <marquee>
                        <a href="#" style="color:white; line-height: 2.5;">A scrolling text created with HTML Marquee element. A scrolling text created with HTML Marquee element.A scrolling text created with HTML Marquee element.</a>
                    </marquee>
                </div>
                <!--  social media icocn-->
                <div class="col-md-3">
                    <div class="social-icon text-center">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        <a href=""><i class="fa fa-google-plus-official"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--            Here inside the col-md-12 insert logo or banner-->
        <div class="logo-area">
            <div class="row">
                <div class="col-md-12">
                    <img src="image/a.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <!--            menu area-->
        <div class="nevigation">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <i id="showmenu" class="fa fa-bars"></i>
                        </li>
                        <li class="nav-item">
                            <i id="showhide" class="fa fa-search"></i>
                            <div id="myDiv" class="search-box">
                                <form id="" action="" method="">
                                    <input class="m-search-style" type="search" placeholder="search....">
                                    <button class="m-button-style" type="submit" id="">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{('/')}}"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ ('/jatio') }}">জাতীয়</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/antarjatik')}}">আন্তর্জাতিক</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/chadpur')}}">চাঁদপুর</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/khela')}}">খেলা</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/rajniti')}}">রাজনীতি</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('binodon.blade.php')}}">বিনোদন</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                অন্যান্য
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{('/islam')}}">ইসলাম</a>
                                <a class="dropdown-item" href="{{('/interview')}}">সাক্ষাতকার</a>
                                <a class="dropdown-item" href="{{('/crime')}}">অপরাধ</a>
                                <a class="dropdown-item" href="{{('/motamot')}}">মতামত</a>
                                <a class="dropdown-item" href="{{('/helth')}}">স্বাস্থ্য</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div id="google_translate_element"></div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
