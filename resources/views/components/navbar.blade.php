<nav style= "position: sticky; top: 0; z-index: 1000; background-color: var(--blue); padding: 18px 0; color: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);;">
    <div style="max-width: 1000px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; width: 90%;">
        <div class="logo-text"> STOCK<span class="logo-accent">TRACK</span></div>
        <div style="display: flex; gap: 25px; align-items: center;">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}" class="nav-link" >Dashboard</a>
            <a href="{{ route('profile', ['username' => request('username')]) }}" class="nav-link">Profil</a>
            <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" class="nav-link">Portfolio</a>
            <a href="/" class="btn-logout">
                LOGOUT
            </a>
        </div>
    </div>
</nav>
