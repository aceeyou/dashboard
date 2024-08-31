<div class="user-card-component">
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <div class="user-card__image-container">
        <img class="user-card__image" src="https://picsum.photos/200" alt="laksdjlkajd">
    </div>
    <div class="user-card__user-info-container">
        <h2 class="user-card__user-name">{{ $name }}</h2>
        @if ($type === 'profile')
            <p class="user-info-subtext profile">UX / UI Designer</p>
        @else
            <p class="user-info-subtext task">1 Task Left</p>
        @endif
    </div>
    <div class="user-card__action-btn-container">
        @if ($type === 'profile')
            <button class="flex user-card__action-btn">
                <x-pepicon-leave class="user-card__action-btn-icon" />
            </button>
        @else
            <button class="flex user-card__action-btn">
                <x-iconic-plus class="user-card__action-btn-icon" />
            </button>
        @endif
    </div>
</div>
