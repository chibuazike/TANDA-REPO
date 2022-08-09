@extends('dashboard.index')

@php
    $title = "Categories"
@endphp

@section("content")
<body>
    <div class="content__title">
        <h2>Categories</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
              <li class="breadcrumb-item"><a href="{{route('categories.create')}}">Add Category</a></li>
            </ol>
        </nav>
    </div>
    <div class="container">
       @if (count($categories) < 1)
            <h3>Awww! you've not added a category yet</h3>
       @else
           <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Published</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->Title}}</td>
                            <td>
                                @if ($category->published == 1)
                                    <span>Published</span>
                                @else
                                    <span>Draft</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{route('categories.edit', ['category' => $category->id])}}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
           </table>
       @endif
    </div>
</body>
@endsection