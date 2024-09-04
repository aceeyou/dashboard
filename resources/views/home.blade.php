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
                <x-quick-overview-card :metric="12" metric-title="Total Projects">
                    <x-phosphor-folders-fill class="quickoverview__card-icon total-project" />
                </x-quick-overview-card>
                <x-quick-overview-card :metric="24" metric-title="Running Projects">
                    <x-healthicons-f-running class="quickoverview__card-icon running-project" />
                </x-quick-overview-card>
                <x-quick-overview-card :metric="87" metric-title="Projects on Hold">
                    <x-phosphor-ghost-fill class="quickoverview__card-icon onhold-project" />
                </x-quick-overview-card>
                <x-quick-overview-card :metric="32" metric-title="Incoming Projects">
                    <x-phosphor-handshake-fill class="quickoverview__card-icon incoming-project" />
                </x-quick-overview-card>
            </div>
        </div>

        {{-- widgets --}}
        <div class="widgets__container">
            {{-- all widgets --}}
            <div class="allwidgets__container">
                <div class="flex allwidgets__top">
                    <h2>Projects with high urgency</h2>
                    <button>See all</button>
                </div>
                <div class="allwidget__projects-container">
                    <div class="project">
                        <div class="urgency">
                            <p>HIGH</p>
                        </div>
                        <div class="project-title">
                            <h3>LuckyPer - Pet Groomer Mobile App</h3>
                            <div class="deadline-component">
                                <p class="deadline">🕒 22 September</p>
                            </div>
                        </div>
                        <div class="progress">
                            something
                        </div>
                        <div class="flex team-members">
                            <div class="members"></div>
                            <button>➕ Invite</button>
                        </div>
                    </div>
                    <div class="project">
                        <div class="urgency">
                            <p>HIGH</p>
                        </div>
                        <div class="project-title">
                            <h3>LuckyPer - Pet Groomer Mobile App</h3>
                            <div class="deadline-component">
                                <p class="deadline">🕒 22 September</p>
                            </div>
                        </div>
                        <div class="progress">
                            <input type="range"  name="" id="">
                        </div>
                        <div class="flex team-members">
                            <div class="members"></div>
                            <button>➕ Invite</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- users widget --}}
            <div class="team-members__container">
                <div class="flex team-members__top">
                    <h2>Available team member</h2>
                </div>
            </div>
        </div>
    </main>
@endsection
