<nav class="navbar">
    <div>
        <x-gmdi-bubble-chart class="logo-icon" style="color: #068fff;" color="var(--primary)" />
        <h1 class="app-name">Protater Tasker</h1>
    </div>
    <div id="mid-col">
        <form action="">
            <div class="nav-search-bar">
                <x-feathericon-search class="nav-icon search-icon" />
                <label for="search" style="display: none">Search</label>
                <input type="text" name="search" id="search" placeholder="Search...">
            </div>
        </form>
    </div>
    <div>
        <div class="activity-control">
            <x-iconic-help-circle class="nav-icon action" />
            <x-phosphor-bell-simple class="nav-icon action" />
            <button class="action new-project-btn">
                <x-iconic-plus class="nav-btn-icon new-project-btn-icon" />
                <span>New Project</span>
            </button>
        </div>
    </div>
</nav>
