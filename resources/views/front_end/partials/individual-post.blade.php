@extends('front_end.layout')

@section('title','Post area')
@section('content')
    <!--page subtitle area using bootstrap breadcrumbs-->
    <div class="page-subtitle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">অন্যান্য</a></li>
                            <li class="breadcrumb-item active" aria-current="page">মতামত</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="post-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <!--  the news title -->
                                <div class="post-title">
                                    <h3>{{$spost->title}}</h3>
                                </div>
                            </div>
                            <div class="col-md-3 p-none">
<!--     left side reporter name publishing time and sharing icon-->
                                <div class="reporter-name-sharing">
                                    <div class="reporter">
                                        <h4>প্রতিবেদক</h4>
                                        <P>নিজস্ব প্রতিবেদক, ঢাকা</P>
                                    </div>
                                    <hr>
                                    <div class="post-time">
                                        <span>১৯ জুলাই ২০১৮, ১১:৫৭ <br>
                                        আপডেট: ১৯ জুলাই ২০১৮, ১৩:৫৫</span>
                                    </div>
                                    <hr>
                                    <div class="post-share">
                                        <div class="social-icon">
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                            <a href=""><i class="fa fa-linkedin"></i></a>
                                            <a href=""><i class="fa fa-google-plus-official"></i></a>
                                            <a href=""><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- The image of the news-->
                                <div class="post-image">
                                    <img id="myImg" src="/storage/uploads/{{$spost->image}}" alt=" " class="img-fluid">

                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="img01">
                                        <div id="caption"></div>
                                    </div>
                                </div>
                                <div class="photo-caption">
                                    <p>{{$spost->short_description}}</p>
                                </div>
                                <hr>
                                <!--                                the description or the content of the post-->
                                <div class="post-content">
                                    <p>{!!$spost->long_description!!}</p>
                                </div>
<!--                                share and other icon of the post content bottom-->
                                <div class="post-share">
                                    <div class="social-icon">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                        <a href=""><i class="fa fa-google-plus-official"></i></a>
                                        <a href=""><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-related-news">
                        <h5>আরও</h5>
                        <hr>
                        <div class="news-post">
                        <div class="flex-post">
                            <div class="row no-gutters">
                                <div class="col-md-5"><img class="img-fluid" src="image/d.jpg" alt=""></div>
                                <div class="col-md-7 "><a href="">হাজীগঞ্জে রোটারী ক্লাব অব উত্তরা’র কম্পিউটার বিতরণ</a></div>
                                <a href="facebookc.com" class="link-overlay"></a>
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
    </div>

    <div class="post-comment-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><h3>মন্তব্য</h3></div>
                <div class="col-md-6">
                    <form method="" action="">
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Comment</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                              Remember me
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Comment</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  @stop
