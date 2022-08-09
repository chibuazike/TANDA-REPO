@extends('dashboard.index')

@php
    $title = "Add Category"
@endphp

@section("content")
<body>
    <div class="container">
        <h1>Add Category</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title 
                    @error('title')
                    <span class="error">{{$message}}</span>
                    @enderror
                </label>
                <input type="text" id="title" name="title" class="form-control" 
                value="@if(old('title')) {{ old('title') }} @endif">
            </div>
            <div class="mb-3">
                <p>Choose publish status 
                @error('published')  
                    <span class="error">{{$message}}</span>
                @enderror
                </p>
                <label for="published" class="form-check form-check-inline">
                    <input type="radio" name="published" value="1" id="published" class="form-check-input" @if(old('published') == '1') checked @else checked @endif>
                    Published
                </label>
                <label for="draft" class="form-check form-check-inline">
                    <input type="radio" name="published" value="0" id="draft" class="form-check-input" @if(old('published') == '0') checked @endif>
                    Draft
                </label>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Add Category</button>
            </div>
        </form>
        <script src="{{ asset('js/main.js') }}"></script>
    </div>
</body>
@endsection