@extends('layout.layout')
@push('css')
@endpush
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <div class="main-container">
        <h1>Calendar</h1>
    </div>
@endsection
