@extends('dashboard.index')

@php
    $title = "Add Post"
@endphp

@section("content")
<body> <div class="content__title">
    <h2>Add Post</h2>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Post</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div> 
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title
                @error('title')
                <span class= "error">{{$message}}</span>
                @enderror
            </label>
            <input type="text" class="form-control" name="title" id="title" value="@if(old('title')) {{old('title')}} @endif">
        </div>
        <!-- <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
        </div> -->
        <div class="mb-3">
            <label for="featured_image" class="form-label" >Featured image
                @error('featured_image')
                <span class= "error">{{$message}}</span>
                @enderror
            </label>
            <input type="file" class="form-control" name="featured_image" id="featured_image"> 
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content
                @error('content')
                <span class= "error">{{$message}}</span>
                @enderror
            </label>
            <textarea name="content" id="content" class="form-control">@if(old('title')){{old('title')}}@endif</textarea>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option selected disabled>Choose a category</option>
                @foreach($categories as $category)
                <option @if(old('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->Title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            @error('published')
               <span class="error">{{$message}}</span>
            @enderror
            <label for="published" class="form-check form-check-inline">
                <input type="radio" name="published" id="published" value=1 class="form-check-input" @if(old('published')=='1') checked else checked @endif>
            Published</label>
            <label for="draft" class="form-check form-check-inline">
                <input type="radio" name="draft" id="draft" value=0 class="form-check-input" @if(old('published') == '0') checked @endif>
            Draft</label>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
</body>
@endsection