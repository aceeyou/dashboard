@extends('layout.layout')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <div class="main-container">
        @if($errors->any())
            @foreach ($errors as $item)
                <p>{{$item}}</p>        
            @endforeach
        @endif
        <h1>{{Auth::user()->name}}</h1>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit">Log out</button>
        </form>
        @if ($editing ?? false)
        <form action="{{route('profile')}}" method="get">
            @csrf
            <button type="submit">Show</button>
        </form>
        <form enctype="multipart/form-data" action="{{route("profile.update", Auth::user()->id)}}" method="post">
            @csrf
            @method('put')
            <input type="text" name="profession" id="profession" value="{{$user->profession}}">
            <button type="submit">Save</button>
        </form>
        @else
            <form action="{{route('profile.edit')}}" method="get">
                @csrf
                <button type="submit">Edit</button>
            </form>
            <p>{{$user->profession}}</p>
        @endif
    </div>
@endsection