@extends('layout.layout')
@push('css')
    
@endpush
@section('content')
    <div>
        @include('components.navbar')
        @include('components.sidebar')
        <div class="main-container">
            <h1>Notifications</h1>
        </div>
    </div>
@endsection