<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Edit Post</title>
</head>
<body>
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Posts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
            </ol>
        </nav>
    </div>
    <div class="container">
       <form action="{{route('posts.update', ['post' => $post->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Post title</label>
            <input type="text" name="title" id="title" class="form-control"
            value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="featured_image" class="form-label">Featured Image (jpg, png, gif, bmp)
                 @error('featured_image')
                 <span class="error">{{$message}}</span>
                 @enderror
                 <option @if(old('featured_image') == $post->featured_image ) selected @endif value="{{ $post->featured_image  }}">{{ old('featured_image') }}</option>
              </label>
          
           <input type="file" name="featured_image" id="featured_image" class="form-control">
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Content
              @error('content')
              <span class="error">{{$message}}</span>
              @enderror
            </label>
                <textarea Name="content" id="content" class="form-control">@if(old('content')){{old('content')}} @endif</textarea>
          
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
            <p>Publish post</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="published" id="flexRadioDefault1" value="1"
                    @if($post->published == 1) checked @endif
                >
                <label class="form-check-label" for="flexRadioDefault1">
                  Publish
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="published" id="flexRadioDefault2" value="0" @if($post->published == 0) checked @endif>
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
</html>