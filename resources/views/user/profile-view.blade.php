@extends('layout.layout')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" type="text/css">
@endpush
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <div class="main-container">
        @if ($errors->any())
            @foreach ($errors as $item)
                <p>{{ $item }}</p>
            @endforeach
        @endif
        <div class="profile__container">

            <div class="profile__header">
                <h1>Personal info</h1>
                <p>Update your profile, contact details, and preferences to personalize your experience</p>
            </div>

            <div class="profile__picture">
                <div class="profile__picture-image flex">
                    <img class="profile__image"
                        src="{{Auth::user()->getImageUrl()}}"
                        alt="user's profile picture">
                        <form enctype="multipart/form-data" action="{{route('update_profile_image', Auth::user()->id)}}" method="post">
                            @csrf
                            @method("put")
                            <input type="file" name="image" id="image" accept="image/*">
                            <button type="submit">Submit</button>
                        </form>
                        <button class="flex profile__profile-btn upload custom__profile-image-input">
                            <x-feathericon-upload class="upload__icon" /> <span>Uploads image</span>
                        </button>
                    </input>
                    <button class="profile__profile-btn remove">Remove</button>
                </div>
                <div class="profile__picture-req">
                    <p>Profile picture</p>
                    <img src="" alt="preview of uploaded image" id="uploaded_image">
                    <p>PNG, JPEG under 15MB</p>
                </div>
            </div>

            <div class="profile__user-info-container">
                <div class="profile__input-grp">
                    <label for="name">Name</label>
                    @if ($name_editing ?? false)
                        <form class="flex" action="{{ route('update_name', Auth::user()->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input class="profile__user-info-name" type="text" name="name" id="name"
                                value="{{ Auth::user()->name }}">
                            <button class="flex profile__edit-btn save"><x-ri-save-3-fill
                                    class="profile__btn-icon" /><span>Save</span></button>
                            <a class="profile__edit-btn cancel" href="{{ route('profile') }}">Cancel</a>
                        </form>
                    @else
                        <div class="flex">
                            <p class="profile__user-info-name">{{ Auth::user()->name }}</p>
                            <form action="{{ route('edit_name') }}" method="get">
                                @csrf
                                <button class="flex profile__edit-btn" type="submit"><x-phosphor-pencil-simple-line-duotone
                                        class="profile__btn-icon" /> <span>Edit</span></button>
                            </form>
                        </div>
                    @endif
                </div>

                <div class="profile__input-grp">
                    <label for="username">Username</label>
                    @if ($username_editing ?? false)
                        <form class="flex" action="{{ route('update_username', Auth::user()->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input class="profile__user-info-name" type="text" name="username" id="username"
                                value="{{ Auth::user()->username }}">
                            <button class="flex profile__edit-btn save"><x-ri-save-3-fill
                                    class="profile__btn-icon" /><span>Save</span></button>
                            <a class="profile__edit-btn cancel" href="{{ route('profile') }}">Cancel</a>
                        </form>
                    @else
                        <div class="flex">
                            <p class="profile__user-info-name">{{ Auth::user()->username }}</p>
                            <form action="{{ route('edit_username') }}" method="get">
                                @csrf
                                <button class="flex profile__edit-btn" type="submit"><x-phosphor-pencil-simple-line-duotone
                                        class="profile__btn-icon" /> <span>Edit</span></button>
                            </form>
                        </div>
                    @endif
                </div>

                <div class="profile__input-grp">
                    <label for="name">Email</label>
                    @if ($email_editing ?? false)
                        <form class="flex" action="{{ route('update_email', Auth::user()->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input class="profile__user-info-name" type="email" name="email" id="email"
                                value="{{ Auth::user()->email }}">
                            <button class="flex profile__edit-btn save"><x-ri-save-3-fill
                                    class="profile__btn-icon" /><span>Save</span></button>
                            <a class="profile__edit-btn cancel" href="{{ route('profile') }}">Cancel</a>

                        </form>
                    @else
                        <div class="flex">
                            <p class="profile__user-info-name">{{ Auth::user()->email }}</p>
                            <form action="{{ route('edit_email') }}" method="get">
                                @csrf
                                <button class="flex profile__edit-btn" type="submit">
                                    <x-phosphor-pencil-simple-line-duotone class="profile__btn-icon" />
                                    <span>Edit</span>
                                </button>
                            </form>
                        </div>
                    @endif
                </div>

                <div class="profile__input-grp">

                    <label for="name">Profession</label>
                    @if ($profession_editing ?? false)
                        <form class="flex" action="{{ route('update_profession', Auth::user()->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input class="profile__user-info-name" type="text" name="profession" id="profession"
                                value="{{ Auth::user()->profession }}" >
                            <button class="flex profile__edit-btn save"><x-ri-save-3-fill
                                    class="profile__btn-icon" /><span>Save</span></button>
                            <a class="profile__edit-btn cancel" href="{{ route('profile') }}">Cancel</a>
                        </form>
                    @else
                        <div class="flex">
                            <p class="profile__user-info-name">
                                @if (Auth::user()->profession)
                                    {{ Auth::user()->profession }}
                                @else
                                    <span class="input__empty">Click Edit to add your Profession</span>
                                @endif
                            </p>
                            <form action="{{ route('edit_profession') }}" method="get">
                                @csrf
                                <button class="flex profile__edit-btn"
                                    type="submit"><x-phosphor-pencil-simple-line-duotone class="profile__btn-icon" />
                                    <span>Edit</span></button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="flex profile__logout-btn"><x-pepicon-leave class="profile__btn-icon" /><span>Log
                        out</span></button>
            </form>
        </div>
    </div>
@endsection
