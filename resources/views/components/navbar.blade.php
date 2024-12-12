<div class="rounded-lg py-4 px-8 bg-slate-200 shadow-lg flex flex-row justify-between" id="navbar">
    <div class="flex flex-row gap-4 items-center">
        <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
        <a href="/home" class="nav-link {{ $page == 'home' ? 'active' : '' }}">Beranda</a>
        <a href="/explore" class="nav-link {{ $page == 'explore' ? 'active' : '' }}">Jelajah</a>
        <a href="/post" class="nav-link {{ $page == 'post' ? 'active' : '' }}">Buka Usaha</a>
    </div>

    <div class="flex flex-row gap-4 items-center">
        @if(Auth::check())
                <a href="/portfolio" class="nav-link {{ $page == 'portfolio' ? 'active' : '' }}">Portofolio</a>
                <a href="/profile" class="dropdown-item">Profil</a>
                <a href="/logout" class="dropdown-item">Keluar</a>
        @else
                <a href="/login" class="nav-link {{ $page == 'login' ? 'active' : '' }}">Masuk</a>
                <a href="/register" class="nav-link {{ $page == 'register' ? 'active' : '' }}">Daftar</a>
        @endif

    </div>
</div>
