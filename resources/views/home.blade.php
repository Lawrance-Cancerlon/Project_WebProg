@extends('app')

@section('navbar')
   @include('components.navbar', ['page' => 'home'])</
@endsection

@section('content')




    <div class="flex items-center justify-center h-full p-8">
        <div class="banner justify-center items-center gap-8 py-40"
        data-aos="fade-up" id="banner" style="background-image: url('storage/assets/home_banner.png'); background-size: cover;">
                <h1 class="text-8xl text-surface">
                    Bakat dan talenta untuk usaha kamu
                </h1>
                <form action="/explore" method="get" class="flex flex-row gap-4">
                    <input type="text" name="search" id="search" class="input rounded-full" 
                    style="width: 40vw" placeholder="Cari pekerjaan jasa...">
                    <button type="submit" class="btn btn-primary-light">
                        Search
                    </button>
                </form>
        </div>
    </div>
    <div class="flex items-center justify-center mb-64">
        <div class="relative w-full flex flex-row gap-8 snap-x snap-mkamutory overflow-x-auto py-4" style="-ms-overflow-style: none; scrollbar-width: none;">
            <style>
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            </style>
            
        @foreach ($categories as $index => $category)
            <a class="snap-center shrink-0 py-12 px-16 rounded-lg shadow-lg bg-surface" 
            data-aos="fade-left" data-aos-duration="1000" data-aos-delay="{{ $index * 100 }}" href="/explore?category={{ $category->id }}">
                <div class="container flex flex-row items-center gap-4 text-center fs-4 text-black">
                    <span class="material-symbols-outlined text-on-surface"
                    style="font-size: 4rem">{{ $category->image }}</span> 
                    <span class="text-on-surface text-wrap text-left" style="max-width: 12vw">{{ $category->name }}</span>
                </div>
            </a>
        @endforeach
        </div>
    </div>
    <div class="flex flex-col items-center justify-center w-full mb-64">
            <span class="mb-12 text-6xl" data-aos="fade-up" data-aos-anchor-placement="center-bottom">Wujudkan idemu bersama <img src="storage/assets/brand_logo.png" class="inline-block"/> </span>
            <div class="py-12 flex flex-col gap-32 justify-center items-start" style="max-width: 72vw">

                <div
                class="text-xl flex flex-row gap-12 justify-start items-start">
                    <span class="material-symbols-outlined text-8xl text-primary">
                        verified_user
                        </span>
                        <div class="flex flex-col gap-8 items-start">
                            <h4 class="typewriter font-light text-6xl">Talenta dengan permit dan sertifikasi</h4>
                            <p class="text-justify text-4xl font-light" data-aos="fade-up" data-aos-id="typewriter" data-aos-anchor-placement="top-center">
                                Kami percaya pada kepuasan pelanggan. Oleh karena itu, kamu hanya perlu membayar jika kamu benar-benar puas dengan jasa yang diberikan oleh talenta pilihan kamu. Sistem kami dirancang untuk memastikan bahwa kamu mendapatkan nilai terbaik untuk uang kamu, dengan pembayaran yang aman dan transparan.
                            </p>
                        </div>
                        
                </div>
                

                <div
                class="text-xl flex flex-row gap-12 justify-start items-start">
                    <span class="material-symbols-outlined text-8xl text-primary">
                        payments
                        </span>
                        <div class="flex flex-col gap-8 items-start">
                            <h4 class="typewriter font-light text-6xl">Bayar hanya jika kamu puas</h4>
                            <p class="text-justify text-4xl font-light" data-aos="fade-up" data-aos-id="typewriter" data-aos-anchor-placement="top-center">
                                Kami percaya pada kepuasan pelanggan. Oleh karena itu, kamu hanya perlu membayar jika kamu benar-benar puas dengan jasa yang diberikan oleh talenta pilihan kamu. Sistem kami dirancang untuk memastikan bahwa kamu mendapatkan nilai terbaik untuk uang kamu, dengan pembayaran yang aman dan transparan.
                            </p>
                        </div>
                        
                </div>


                <div 
                class="text-xl flex flex-row gap-12 justify-start items-start">
                    <span class="material-symbols-outlined text-8xl text-primary">
                        person_play
                        </span>
                        <div class="flex flex-col gap-8 items-start">
                            <h4 class="typewriter font-light text-6xl">Simple, tidak pusing</h4>
                            <p class="text-justify text-4xl font-light" data-aos="fade-up" data-aos-id="typewriter" data-aos-anchor-placement="top-center">
                                Platform kami dirancang dengan antarmuka yang sederhana dan mudah digunakan. Kamu tidak perlu khawatir tentang proses yang rumit atau membingungkan. Dengan beberapa langkah mudah, kamu bisa menemukan talenta yang tepat untuk kebutuhan kamu dan mulai bekerja sama tanpa hambatan.
                                </p>
                        </div>
                        
                </div>
                

                
            </div>


                    <a href="/register" class="btn mt-8 flex"><span class="mx-12 my-8 text-4xl">Gabung Sekarang</span></a>

            </div>
        </div>
    </div>
    <script>
    document.addEventListener('scroll', function() {
        const typewriterElements = document.querySelectorAll('.typewriter');
        typewriterElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top <= window.innerHeight / 2) {
                element.classList.add('typewriter-active');
            }
        });
    });
        
    </script>
        

@endsection