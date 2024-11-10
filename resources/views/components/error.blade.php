@if (session()->has('error'))
    <div class="error-container">
        <p>{{ session('error') }}</p>
    </div>
@endif
