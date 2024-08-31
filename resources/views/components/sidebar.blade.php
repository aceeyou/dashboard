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
                <li class="sidebar__item active"><a href="" class="flex sidebar__item-link">
                    {{-- <x-phosphor-house-line class="sidebar__link-icon" /> --}}
                    <x-phosphor-house-line-fill class="sidebar__link-icon sidebar__link-icon-active" />
                    Dashboard</a></li>
                <li class="sidebar__item"><a href="" class="flex sidebar__item-link">
                    <x-phosphor-folder class="sidebar__link-icon" />
                    {{-- <x-phosphor-folder-fill class="sidebar__link-icon sidebar__link-icon-active" /> --}}
                    Project</a></li>
                <li class="sidebar__item"><a href="" class="flex sidebar__item-link">
                    <x-phosphor-check-circle class="sidebar__link-icon" />
                    {{-- <x-phosphor-check-circle-fill class="sidebar__link-icon sidebar__link-icon-active" /> --}}
                    Task</a></li>
                <li class="sidebar__item"><a href="" class="flex sidebar__item-link">
                    <x-phosphor-file-duotone class="sidebar__link-icon" />
                    {{-- <x-phosphor-file-fill class="sidebar__link-icon sidebar__link-icon-active" /> --}}
                    Tracking</a></li>
                <li class="sidebar__item"><a href="" class="flex sidebar__item-link">
                    <x-phosphor-calendar-blank class="sidebar__link-icon" />
                    {{-- <x-phosphor-calendar-blank-fill class="sidebar__link-icon sidebar__link-icon-active" /> --}}
                    Calendar</a></li>
                <li class="sidebar__item"><a href="" class="flex sidebar__item-link">
                    <x-phosphor-bell class="sidebar__link-icon" />
                    {{-- <x-phosphor-bell-fill class="sidebar__link-icon sidebar__link-icon-active" /> --}}
                    Notifications</a></li>
            </ul>
        </section>
        <section>
            <h2>Favourite Project</h2>
            <ul>
                <li class="sidebar__item"><a href="" class="flex sidebar__item-link"><x-feathericon-arrow-up-right class="sidebar__link-icon" />Project 1</a></li>
                <li class="sidebar__item"><a href="" class="flex sidebar__item-link"><x-feathericon-arrow-up-right class="sidebar__link-icon" />Page-inator</a></li>
            </ul>
        </section>
        <div class="user-card-section">
            <x-user-card name="Ace Logronio" type="profile" />
        </div>
    </nav>
</aside>
