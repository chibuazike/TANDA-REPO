<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
    {{-- <title>{{ $title }} - TANDA</title> --}}
   
</head>
<body>
    <div class="grid grid-sidebar">
        <div class="sidebar">
            <div class="sidebar__nav">
                <div class="sidebar__logo">
                    <img class="logo" src="assets/img/logo.png" alt="Tanda logo">
                    <h1 class="logo-text"></h1>
                </div>

                <div class="sidebar__menu">
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="/dashboard" class="menu-link">Dashboard</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('posts.index')}}" class="menu-link">Posts</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('categories.index')}}" class="menu-link">Categories</a>
                        </li>
                       <li class="menu-item">
                            <a href="/dashboard/users" class="menu-link">Users</a>
                        </li> 
                          <li class="menu-item">
                            <a href="/dashboard/userprofile" class="menu-link">Profile</a>
                        </li> 

                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content__header"></div>
            @yield('content')
        </div>
 
     <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js">
    
         <script>
              ClassicEditor
               .create( document.querySelector( '#editor' ) )
               .catch( error => {
               console.error( error );
               } );
         </script>
        </script> 
    </div>   
    <script src="{{ asset('js/main.js') }}"></script> 
</body>
</html>