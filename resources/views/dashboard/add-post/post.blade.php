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
            @include('flash::message')
                <!--    /Page  heading-->
                <div class="col-md-12">
                    <div class="text-editor">
                        <div class="panel panel-default">
                            <div class="panel-heading">New article</div>
                            <div class="panel-body">
                                {{ Form::open(array('url' => route('post.store'),'method' => 'post','files' => true)) }}
                                <div class="form-group">
                                    {{Form::label('title','Enter Titile')}}
                                    {{ Form::text('title',null, ['class' => 'form-control', 'placeholder'=>'Enter Titile', 'required' => 'required']) }}
                                </div>
                                <div class="form-group">
                                    {{Form::label('title','Select Category')}}
                                    <select class="form-control" name="category_id" required="">
                                        @foreach($data as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            {{Form::label('Public || UnPublic')}}
                                        </div>
                                        <div class="col-md-2">
                                            {{Form::radio('status', '0', true)}}
                                            {{Form::label('Save','Save')}}
                                        </div>
                                        <div class="col-md-2">
                                            {{Form::radio('status', '1', true)}}
                                            {{Form::label('Post','Post')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{Form::label('image','Upload Image')}}
                                    {{ Form::file('image', ['class' => 'form-control custom-file-input ', 'required' => 'required']) }}
                                </div>
                                <div class="form-group">
                                    {{Form::label('short_description','Short Description')}}
                                    {{Form::textarea('short_description',null, ['class' => 'form-control', 'rows'=>3, 'placeholder'=>'Short Description', 'required' => 'required']) }}
                                </div>
                                <label>Content</label>
                                {{Form::textarea('long_description',null,['id'=>'summernote'])}}
                                <div class="form-group text-right" style="margin-top:20px">
                                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                                </div>
                                {!! Form::close() !!}
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
