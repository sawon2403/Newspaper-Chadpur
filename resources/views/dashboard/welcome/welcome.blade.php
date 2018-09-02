@extends('dashboard.layout')

@section('title','Dashboard')


@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    @include('dashboard.partials.topbar')
    <!-- Left side column. contains the logo and sidebar -->
    @include('dashboard.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box fb">
                            <div class="inner">
                                <h3>150</h3>

                                <p>Facebook</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box twtr">
                            <div class="inner">
                                <h3>53</h3>

                                <p>Twitter</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box gplus">
                            <div class="inner">
                                <h3>44</h3>

                                <p>Google+</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-google-plus"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
            <!-- .content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, ad! ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum totam eligendi nostrum magnam dolorum eius deserunt fuga laudantium minima praesentium.</div>
                    <div style="color: red;" class="col-md-6">fdf Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dicta adipisci illum non enim excepturi placeat reprehenderit consectetur dolorem odit.</div>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">

            <strong>Copyright &copy; 2014-2016 <a href="#">পত্রিকার নাম</a>.</strong> All rights
            reserved.
        </footer>
    </div>

@stop
