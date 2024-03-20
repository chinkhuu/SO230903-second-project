@extends('app')

@section('content')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Post
                            <a href="" class="btn btn-success float-end">Back</a>
                        </h4>

                    </div>

                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}">
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea type="text" name="description" class="form-control">
                                        {{old('description')}}
                                </textarea>
                            </div>

                            <div class="mb-3">
                                <label>Is Public or Private</label>
                                <input type="checkbox" name="status" {{old('status') == true ? checked:''}}>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
