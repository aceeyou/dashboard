{{-- 
        SIDEBAR
--}}

@push('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
@endpush
<aside class="sidebar-main">
    <nav>
        <section>
            <h2>Menu</h2>
            <ul>
                <li @class(['sidebar__item', 'active' => Route::is('dashboard')])><a href="{{ route('dashboard') }}" class="flex sidebar__item-link">
                        @if (Route::is('dashboard'))
                            <x-phosphor-house-line-fill class="sidebar__link-icon sidebar__link-icon-active" />
                        @else
                            <x-phosphor-house-line class="sidebar__link-icon" />
                        @endif
                        Dashboard
                    </a></li>
                <li @class(['sidebar__item', 'active' => Route::is('projects.show')])><a href="{{ route('projects.show') }}" class="flex sidebar__item-link">
                        @if (Route::is('projects.show'))
                            <x-phosphor-folder-fill class="sidebar__link-icon sidebar__link-icon-active" />
                        @else
                            <x-phosphor-folder class="sidebar__link-icon" />
                        @endif
                        Project
                    </a></li>
                <li @class(['sidebar__item', 'active' => Route::is('tasks.show')])><a href="{{ route('tasks.show') }}" class="flex sidebar__item-link">
                        @if (Route::is('tasks.show'))
                            <x-phosphor-check-circle-fill class="sidebar__link-icon sidebar__link-icon-active" />
                        @else
                            <x-phosphor-check-circle class="sidebar__link-icon" />
                        @endif
                        Task
                    </a></li>
                <li @class(['sidebar__item', 'active' => Route::is('tracking.show')])><a href="{{ route('tracking.show') }}" class="flex sidebar__item-link">
                        @if (Route::is('tracking.show'))
                            <x-phosphor-file-fill class="sidebar__link-icon sidebar__link-icon-active" />
                        @else
                            <x-untitledui-file-search-03 class="sidebar__link-icon" />
                        @endif
                        Tracking
                    </a></li>
                <li @class(['sidebar__item', 'active' => Route::is('calendar.show')])><a href="{{ route('calendar.show') }}" class="flex sidebar__item-link">
                        @if (Route::is('calendar.show'))
                            <x-phosphor-calendar-blank-fill class="sidebar__link-icon sidebar__link-icon-active" />
                        @else
                            <x-phosphor-calendar-blank class="sidebar__link-icon" />
                        @endif
                        Calendar
                    </a></li>
                <li @class(['sidebar__item', 'active' => Route::is('notifications.show')])><a href="{{ route('notifications.show') }}"
                        class="flex sidebar__item-link">
                        @if (Route::is('notifications.show'))
                            <x-phosphor-bell-fill class="sidebar__link-icon sidebar__link-icon-active" />
                        @else
                            <x-phosphor-bell class="sidebar__link-icon" />
                        @endif
                        Notifications
                    </a></li>
            </ul>
        </section>
        <section>
            <h2>Favourite Project</h2>
            <ul>
                <li class="sidebar__item"><a href=""
                        class="flex sidebar__item-link"><x-feathericon-arrow-up-right
                            class="sidebar__link-icon" />Project 1</a></li>
                <li class="sidebar__item"><a href=""
                        class="flex sidebar__item-link"><x-feathericon-arrow-up-right
                            class="sidebar__link-icon" />Page-inator</a></li>
            </ul>
        </section>
        <div class="user-card-section">
            <x-user-card name="{{Auth::user()->name}}" type="profile" />
        </div>
    </nav>
</aside>
