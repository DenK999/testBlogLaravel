@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Add category
                <small>some ... </small>
            </h1>
        </section>

        <section class="content">
            <div class="box">
                {!! Form::open(['route' => 'categories.store']) !!}
                <div class="box-header with-border">
                    <h3 class="box-title">Add ccategory</h3>
                @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button class="btn btn-default">Back</button>
                    <button class="btn btn-success pull-right">Add</button>
                </div>
                {!! Form::close() !!}
            </div>
        </section>
    </div>
@endsection