@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>
                    <div class="panel-body">

                        <posts posts="{{$posts}}"></posts>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>

                    <div class="panel-body">

                        <a href="{{route('posts.create')}}" class="btn btn-primary">Create new</a>
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->category->title}}</td>
                                <td>{{$post->user->name}}</td>
                                <td>
                                Edit |
                                    <form action="{{route('posts.destroy', $post->id)}}" method="POST">

                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection