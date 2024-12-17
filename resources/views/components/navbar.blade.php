<nav class="nav" id="navbar">
    <div class="flex flex-row gap-8 items-center">
        <img role="a" src={{ '/storage/assets/brand_logo.png'}} class="navbar-brand" href="/"></img>
      
    </div>

    <div class="flex flex-row gap-12 items-center">
        <a href="/home" class="nav-link {{ $page == 'home' ? 'active' : '' }}">Beranda</a>
        <a href="/explore" class="nav-link {{ $page == 'explore' ? 'active' : '' }}">Jelajah</a>
        
        @inject('page', 'App\Http\Controllers\PageController')
        @if(Auth::check())

                <a href="/portfolio" class="nav-link {{ $page == 'portfolio' ? 'active' : '' }}">Portofolio</a>

                <div class="group relative text-left">
                    <div class="flex gap-4 p-2 items-center border border-outline-variant rounded-full">
                        @isset($user)
                            <img class="rounded-full w-10"
                            src={{ $avatar }}>
                            <span class="pe-4">{{$user->name}}</span>
                        @endisset
                    </div>
                    
                    <!-- dropdown -->
                    <div class="absolute left-0 mt-2 w-48 bg-surface-container-low text-gray-700 rounded-md shadow-lg
                    opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 invisible group-hover:visible">
                        <a href="/profile" class="block px-8 py-4 text-on-surface hover:bg-gray-100">Profil</a>
                        <a href="/seller/home" class="block px-8 py-4 text-on-surface hover:bg-gray-100">Halaman Seller</a>
                        <a href="/logout" class="block px-8 py-4 text-on-surface hover:bg-gray-100">Keluar</a>
                    </div>

                </div>

        @else
                <a href="/login" class="nav-link {{ $page == 'login' ? 'active' : '' }}">Masuk</a>
                <a href="/register" class="nav-link {{ $page == 'register' ? 'active' : '' }}">Daftar</a>
        @endif

    </div>
</nav>

