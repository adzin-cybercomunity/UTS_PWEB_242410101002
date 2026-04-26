<nav>
    <a href="/" class="logo">Kopi<span>Senja</span></a>
    
    <ul class="nav-center">
        @if(Session::has('username'))
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/pengelolaan">Pengelolaan</a></li>
            <li><a href="/profil">Profil</a></li>
        @else
            <li><a href="/">Beranda</a></li>
            <li><a href="/#menu">Menu</a></li>
            <li><a href="/#tentang">Tentang</a></li>
        @endif
    </ul>

    <div class="nav-right">
        @if(Session::has('username'))
            <form action="/logout" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        @else
            <a href="/login" class="btn-primary" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center; border-radius: 50%;" title="Login">
                <x-icon name="log-in" style="width: 20px; height: 20px;" />
            </a>
        @endif
    </div>
</nav>
