@extends('dashboard.index')

@php
    $title = "Posts"
@endphp



@section("content")
<body> <div class="content__title">
    <h2>Posts</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Posts</li>
          <li class="breadcrumb-item"><a href="{{route('posts.create')}}">Add Post</a></li>
        </ol>
    </nav>
    </div>

    <table class="table">
        <thead>
            <tr class="bg-dark text-white">
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Views</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td><img width="40" src="{{ asset($post->featured_image) }}"></td>
                <td>{{$post->title}}</td>
                <td>{{$post->category->Title}}</td>
                <td>{{$post->views}}</td>
                <td><a href="{{route('posts.edit', ['post' => $post->id])}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}"method="POST">  @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</div>
@endsection