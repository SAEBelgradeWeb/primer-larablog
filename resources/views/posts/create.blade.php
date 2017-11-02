@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new post</div>

                    <div class="panel-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('posts.store')}}" method="POST">
                            {{csrf_field()}}

                            <div class="form-group">

                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                            <div class="form-group">

                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach($categories as $key => $category)
                                    <option value="{{$key}}">{{$category}}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">

                                <label for="body">Body</label>
                                <textarea name="body" id="body" class="form-control">{{old('body')}}</textarea>
                            </div>

                            <button class="btn btn-primary">Submit</button>

                        </form>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection()