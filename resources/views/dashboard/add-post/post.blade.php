@extends('dashboard.layout')

@section('title','Post content')


@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    @include('dashboard.partials.topbar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('dashboard.partials.sidebar')
        <section class="content-header">
            <h1>
                আন্তর্জাতিক
            </h1>
            <hr style="border-color: white;">
            <ol class="breadcrumb">
                <li><a href="../index.html"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">আন্তর্জাতিক</li>
            </ol>
        </section>
        <!--    Page  heading-->
        <section class="content">
            <div class="row">

                <!--    /Page  heading-->
                <div class="col-md-12">
                    <div class="text-editor">
                        <div class="panel panel-default">
                            <div class="panel-heading">New article</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label>Category Select</label>
                                    <select class="form-control">
                                        @foreach($data as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                         @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Category Select</label>
                                   <textarea class="form-control">

                                   </textarea>
                                </div>
                                <label>Content</label>
                                <div id="summernote"></div>
                                <div class="form-group text-right" style="margin-top:20px">
                                    <button type="submit" class="btn btn-default">Save Draft</button>
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--    text editor-->

            </div>
        </section>

        <!--    /text editor-->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">All post from  আন্তর্জাতিক page</h3>

                            <div class="box-tools pull-right">
                                <div class="has-feedback">
                                    <input type="text" class="form-control input-sm" placeholder="Search Mail">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-controls">
                                <!-- Check all button -->
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                <div class="pull-right">
                                    Page1/20
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>By</th>
                                        <th class="mailbox-date">Time</th>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><a href="">কোথায় থামবে এই কান্নার মিছিল</a></td>
                                        <td>জাতীও</td>
                                        <td><a href="#">শাফিউর রাহমান </a></td>
                                        <td>12 July 2018, 12:17am</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><a href="">কোথায় থামবে এই কান্নার মিছিল</a></td>
                                        <td>জাতীও</td>
                                        <td><a href="#">শাফিউর রাহমান </a></td>
                                        <td>12 July 2018, 12:17am</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><a href="">কোথায় থামবে এই কান্নার মিছিল</a></td>
                                        <td>জাতীও</td>
                                        <td><a href="#">শাফিউর রাহমান </a></td>
                                        <td>12 July 2018, 12:17am</td>
                                    </tr>


                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer no-padding">
                            <div class="mailbox-controls">
                                <!-- Check all button -->
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                <div class="pull-right">
                                    Page 1/20
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                        </div>
                    </div>
                    <!-- /. box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
