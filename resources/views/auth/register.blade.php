<div id="register__header" class="flex">
    @include('components.logo')
    <a class="login__register-link" href="{{ route('login') }}">Log in</a>
</div>
<div class="login__form">
    <h1>Create an Account</h1>
    <p class="sub-heading">Manage your team and projects in one go</p>
    <div class="login__form-wrapper">
        <form class="flex" action="{{ route('register.store') }}" method="post">
            @csrf
            <label for="name" class="sr-only">Full Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your full name">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <label for="password_confirmation" class="sr-only">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                placeholder="Comfirm your password">
            <input type="submit" value="Create an Account on Kanban">
        </form>
    </div>
    @include('components.or-separator')
    <a class="card login__with login__with-google" href="{{ route('dashboard') }}">
        <div class="flex login__with-inner-wrapper" style="margin-inline: auto">
            <x-ri-google-fill class="body-icon" />
            <span>Sign in with Google</span>
        </div>
    </a>
    <a class="card login__with login__with-google" href="{{ route('dashboard') }}">
        <div class="flex login__with-inner-wrapper" style="margin-inline: auto">
            <x-ri-apple-fill class="body-icon" />
            <span>Sign in with Apple</span>
        </div>
    </a>
</div>
