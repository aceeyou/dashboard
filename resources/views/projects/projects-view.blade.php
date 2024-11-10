@extends('layout.layout')
@push('css')
    
@endpush
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <div class="main-container">
        @include('projects.projects-form')
    </div>
@endsection