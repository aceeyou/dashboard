@extends('layout.layout')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
@endpush
@section('content')
    <div id="login__container" class="flex">
        <div class="login__container-left flex">
            @if (Route::is('login'))
                @include('auth.login')
            @else
                @include('auth.register')
            @endif
        </div>
        <div id="login__container-right">
            <img src="https://picsum.photos/1920" alt="cover">
            {{-- <img src="https://images.squarespace-cdn.com/content/v1/5f0452c566c5ed19523893b4/1596643936950-7XCE2KIRQQEJUGKVFYMU/desk.jpg" alt="cover"> --}}
        </div>

        {{-- <script>
            windows.addEventListener("DOMContentLoaded", function() {
                let eyeBtnOpen = false
                const eyeBtn = document.querySelector(".eye-btn");
                const pwInput = document.querySelector("#password");

                eyeBtn.addEventListener("click", function(e) {
                    console.log(eyeBtnOpen)
                    alert("hi")
                    eyeBtn = true
                    pwInput.type = eyeBtnOpen ? "text" : "password"
                    eyeBtn.innerHTML = eyeBtnOpen && "<x-pepicon-eye-closed-off class='eye-icon' />"
                })
            })
        </script> --}}
    </div>
@endsection
