@extends('dashboard.index')

@php
    $title = "Edit_Profile"
@endphp

@section("content")
<div  class="content__title">
    <h2>Edit User Profile</h2>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('userprofile.index')}}">My Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
        </ol>
    </nav>
</div>
            <form action="{{route('userprofile.update', ['userprofile' => $user->id])}}" method="POST">@method('PUT') @csrf
                <div class="mb-3">
                    <label for="name">User Name  @error('name')
                        <span class="error">{{$message}}</span>
                        @enderror</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>

                <div class="mb-3">
                    <label for="email">User Email  @error('email')
                        <span class="error">{{$message}}</span>
                        @enderror</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>

                {{-- <div class="mb-3">
            <label for="role" class="form-label">Role  @error('role')
                <span class="error">{{$message}}</span>
                @enderror</label>
            <select name="role" id="role" class="form-control">
                <option selected disabled></option>
                <option label="User" value="user"></option>
                <option @if(old( $user->role)){{$user->role}} @endif label="Admin" value="admin"></option>
            {{-- </select> --}}
        {{-- </div> --}}

                <div class="mb-3">
                    <label for="password">Password @error('password')
                        <span class="error">{{$message}}</span>
                        @enderror</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>

                {{-- <div class="mb-3">
                    <label for="password_confirmation">Confirm Password @error('password_confirmation')
                        <span class="error">{{$message}}</span>
                        @enderror</label>
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation"ii>
                </div> --}}


                <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="pass" id="pass">
                    </div>
                {{-- <input type="hidden" name="_token" value="{{Session::token()}}"> --}}
            </form>
                
        </div>
</div>
@endsection