@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit tag
                <small>some .. </small>
            </h1>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit tag</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    {{Form::open(['route'=>['tags.update',$aTag->id], 'method'=>'put'])}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder=""
                                   value="{{$aTag->title}}">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                  <a href="{{route('tags.index')}}" class="btn btn-default">Back</a>
                    <button class="btn btn-warning pull-right">Edit</button>
                </div>
                {{Form::close()}}
            </div>
        </section>
    </div>

@endsection