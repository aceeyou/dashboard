<div id="login__header" class="flex">
    @include('components.logo')
    <a class="login__register-link" href="{{ route('register') }}">Create an account</a>
</div>
<div class="login__form">
    <h1>Log in to Kanban</h1>
    <p class="sub-heading">Manage your team and projects in one go</p>
    <div class="login__form-wrapper">
        <form class="flex" action="{{ route('login.authenticate') }}" method="post">
            @csrf
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username">
            <label for="password" class="sr-only">Password</label>
            <div class="flex card password-input__container">
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <button type="button" class="flex eye-btn" id="showPassword">
                    <x-pepicon-eye-closed-off class="eye-icon" tabindex="1" />
                </button>
            </div>
            <input type="submit" value="Log in to Kanban">
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

<script>
    windows.addEventListener("DOMContentLoaded", function() {
        let eyeBtnOpen = true
        const eyeBtn = document.querySelector("#showPassword");
        const pwInput = document.querySelector("#password");

        eyeBtn.addEventListener("click", function(e) {
            console.log(eyeBtnOpen)
            alert("hi")
            pwInput.setAttribute("type", eyeBtnOpen ? "text" : "password")
            eyeBtn.innerHTML = "hi"
            eyeBtnOpen = false
            // "<x-pepicon-eye class='eye-icon' />"
        })
    })
</script>
{{-- <script>
    window.addEventListener("DOMContentLoaded", function () {
        let eyeBtnOpen = false
        const eyeBtn = document.querySelector(".eye-btn");
        const pwInput = document.querySelector("#password");
        eyeBtn.addEentListener("click", function(e){
            alert("hi")
            eyeBtnOpen = !eyeBtnOpen
            pwInput.setAttribute("type", eyeBtnOpen ? "text" : "password")
            eyeBtn.innerHTML = eyeBtnOpen && "hihiih"
            // "<x-pepicon-eye class='eye-icon eye-btn' />" : "<x-pepicon-eye-closed-off class='eye-icon eye-btn' />"
        })
    });
    </script> --}}
