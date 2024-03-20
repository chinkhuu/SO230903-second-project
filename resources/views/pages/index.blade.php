@extends('app')

@section('content')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Posts
                            <a href="" class="btn btn-success float-end">Add Post</a>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $item)
                                <tr>
                                    <th>{{$item->id}}</th>
                                    <th>{{$item->title}}</th>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">View</a>
                                        <a href="" class="btn btn-warning">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>




                </div>
            </div>
        </div>
    </div>

@endsection
