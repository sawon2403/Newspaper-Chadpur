@extends('dashboard.layout')

@section('title','Add Categoary')


@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    @include('dashboard.partials.topbar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('dashboard.partials.sidebar')
        <section class="content-header">
            <h1>
                Category
            </h1>
            <hr style="border-color: white;">
            <ol class="breadcrumb">
                <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add Category</li>
            </ol>
        </section>

        <!--    Page  heading-->
      <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
              @include('flash::message')
          </div>
          <div class="col-lg-3"></div>
      </div>
        <section class="content">

            <div class="row">
                <!--    /Page  heading-->
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="text-editor">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">Add Category</div>
                            <div class="panel-body">
                                {{ Form::open(['url' => route('store.store')]) }}
                                    <div class="form-group">
                                        {{ Form::label('title','Category Name') }}
                                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Category Name','required'])}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::submit('Save Category',['class'=>'btn btn-primary col-md-12'])}}
                                    </div>
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-3"></div>
            <!--    text editor-->
            </div>
        </section>
@stop
