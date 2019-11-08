@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Some</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('categories.create')}}" class="btn btn-success">Add</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($aCategories as $aCategory)
                            <tr>
                                <td>{{$aCategory->id}}</td>
                                <td>{{$aCategory->title}}</td>
                                <td>
                                    <a href="{{route('categories.edit', $aCategory->id)}}" class="fa fa-pencil"></a>
                                    {!! Form::open(['route' => ['categories.destroy', $aCategory->id], 'method' => 'delete']) !!}
                                        <button type="submit" class="delete" onclick="confirm('Are you sure?')">
                                            <a class="fa fa-remove"></a>
                                        </button>
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
