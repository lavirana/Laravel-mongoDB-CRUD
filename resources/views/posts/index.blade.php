@extends('posts.theme')

@section('content')
        <div class="card mt-5">
            <h3 class="card-header p-3">
                MongoDB CRUD APP
            </h3>
            <div class="card-body">

            @session('success')
                <div class="alert alert-success">{{ $value }}</div>
            @endsession

                <a href="{{ route('post.create') }}" class="btn btn-success mb-3" >Create Post</a>

                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th width="250px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>
                        
                            <form method="post" action="{{ route('post.destroy', $post->id) }}">
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                @csrf
                                @method('DELETE')
                                 <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
  @endsection