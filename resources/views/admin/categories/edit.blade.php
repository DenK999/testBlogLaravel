@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit category
            <small>some ...</small>
        </h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit category</h3>
                @include('admin.errors')
            </div>
            {!! Form::open(['route' => ['categories.update', $aCategory->id], 'method' => 'put']) !!}
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="title" placeholder="" value="{{$aCategory->title}}">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-default">Back</button>
                <button class="btn btn-warning pull-right">Edit</button>
            </div>
            {!! Form::close() !!} !!}
        </div>
    </section>
</div>
@endsection