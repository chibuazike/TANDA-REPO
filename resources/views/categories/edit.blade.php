@extends('dashboard.index')

@php
    $title = "Edit Category"
@endphp

@section("content")
<body>
    <div class="content__title">
        <h2>Edit Post</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
            </ol>
        </nav>
    </div>
    <div class="container">
       <form action="{{route('categories.update', ['category' => $category->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Category title</label>
            <input type="text" name="title" id="title" class="form-control"
            value="{{ $category->title }}">
        </div>
        <div class="mb-3">
            <p>Publish category</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="published" id="flexRadioDefault1" value="1"
                    @if($category->published == 1) checked @endif
                >
                <label class="form-check-label" for="flexRadioDefault1">
                  Publish
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="published" id="flexRadioDefault2" value="0" @if($category->published == 0) checked @endif>
                <label class="form-check-label" for="flexRadioDefault2">
                  Draft 
                </label>
              </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Submit</button>
            
        </div>
       </form>
    </div>
</body>
@endsection