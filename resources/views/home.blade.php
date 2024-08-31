@extends('layout.layout')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
@endpush
@section('content')
    @include('components.navbar')
    @include("components.sidebar")
    <main class="main-view">

        <div class="quick-overview">
            <h1 class="greetings">Hello Ace! 👋</h1>
            <p class="sub-greeting">We're hoping you're having a great night.</p>
            <div class="quickoverview__cards-container">
                <x-quick-overview-card :metric="12" metric-title="Total Projects" />
                <x-quick-overview-card :metric="24" metric-title="Running Projects" />
                <x-quick-overview-card :metric="87" metric-title="Projects on Hold" />
                <x-quick-overview-card :metric="32" metric-title="Incoming Projects" />
            </div>
        </div>
    </main>
@endsection
