@extends('dashboard.index')

@php
    $title = "users"
@endphp



@section("content")
<body> <div class="content__title">
    <h2>Users</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Users</li>
          <li class="breadcrumb-item"><a href="{{route('users.create')}}">Add User</a></li>
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
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
             @foreach($users as $user) 
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                {{-- <td>{{$user->password}}</td> --}}
                <td>{{$user->role}}</td>
                <td><a href="{{route('users.edit', ['user' => $user->id])}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}"method="POST">  @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
</body>
</div>
@endsection