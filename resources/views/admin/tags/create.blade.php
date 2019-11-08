@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Tag
                <small>some ... </small>
            </h1>
        </section>

        <section class="content">
            <div class="box">
                {!! Form::open(['route' => 'tags.store']) !!}
                <div class="box-header with-border">
                    <h3 class="box-title">Add tag</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" placeholder="" name="title">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('tags.index')}}" class="btn btn-default">Back</a>
                    <button class="btn btn-success pull-right">Add</button>
                </div>
                {!! Form::close() !!}
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection