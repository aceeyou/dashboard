<div class="user-card-component {{$type === 'recommendations' || $type === 'search-result' ? 'border-bottom' : ''}}">
    <a href="{{route("profile")}}">
        <div class="user-card__image-container">
            <img class="user-card__image" src="https://picsum.photos/200" alt="laksdjlkajd">
        </div>
    </a>
    <a href="{{route("profile")}}">
        <div class="user-card__user-info-container">
            <h2 class="user-card__user-name">{{ $name }}</h2>
            @if ($type === 'profile')
            <p class="user-info-subtext profile">{{Auth::user()->profession}}</p>
            @else
            <p class="user-info-subtext task">1 Task Left</p>
            @endif
        </div>
    </a>
        <div class="user-card__action-btn-container">
            @if ($type === 'profile')
            <form action="{{route("logout")}}" method="post">
                @csrf
                <button class="flex user-card__action-btn">
                    <x-pepicon-leave class="user-card__action-btn-icon" />
                </button>
            </form>
            @else
            <button class="flex user-card__action-btn">
                <x-iconic-plus class="user-card__action-btn-icon" />
            </button>
            @endif
        </div>
    </div>