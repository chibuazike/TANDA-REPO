@extends('dashboard.index')

@php
    $title = "Profile"
@endphp



@section("content")
<body> <div class="content__title">
    <h2>Profile</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">My Profile</li>
          <li class="breadcrumb-item"><a href="{{route('userprofile.edit', ['userprofile' => 1])}}">Edit Profile</a></li>
        </ol>
    </nav>
    </div>

    <table class="table">
        <thead>
            <tr class="bg-dark text-white">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                {{-- <th>Password</th> --}}
                <th>Role</th>
                {{-- <th>Edit</th>
                <th>Delete</th> --}}
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                {{-- <td>{{$user->password}}</td> --}}
                <td>{{$user->role}}</td>
                {{-- <td><a href="{{route('userprofile.edit', ['user' => $user->id])}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}"method="POST">  @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">Delete</button> --}}
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</div>
@endsection