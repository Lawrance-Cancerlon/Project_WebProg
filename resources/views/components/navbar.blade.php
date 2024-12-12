<nav class="nav" id="navbar">
    <div class="flex flex-row gap-8 items-center">
        <img role="a" src={{ '/storage/assets/brand_logo.png'}} class="navbar-brand" href="/"></img>
      
    </div>

    <div class="flex flex-row gap-12 items-center">
        <a href="/home" class="nav-link {{ $page == 'home' ? 'active' : '' }}">Beranda</a>
        <a href="/explore" class="nav-link {{ $page == 'explore' ? 'active' : '' }}">Jelajah</a>
        <a href="/post" class="nav-link {{ $page == 'post' ? 'active' : '' }}">Buka Usaha</a>
        @if(Auth::check())
                <a href="/portfolio" class="nav-link {{ $page == 'portfolio' ? 'active' : '' }}">Portofolio</a>
                <a href="/profile" class="nav-link">Profil</a>
                <a href="/logout" class="nav-link">Keluar</a>
        @else
                <a href="/login" class="nav-link {{ $page == 'login' ? 'active' : '' }}">Masuk</a>
                <a href="/register" class="nav-link {{ $page == 'register' ? 'active' : '' }}">Daftar</a>
        @endif

    </div>
</nav>