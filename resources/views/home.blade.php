@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'home'])
@endsection

@section('content')
    <div class="flex items-center justify-center h-full p-8">
        <div class="w-full h-full rounded-lg flex flex-col justify-center items-center gap-8 py-40" id="banner" style="background-image: url('storage/assets/home_banner.png'); background-size: cover;">
                <h1 class="text-8xl text-surface">
                    Bakat dan talenta untuk usaha kamu
                </h1>
                <form action="/explore" method="get" class="flex flex-row gap-4">
                    <input type="text" name="search" id="search" class="input inline-block" placeholder="Cari pekerjaan jasa...">
                    <button type="submit" class="btn">
                        Search
                    </button>
                </form>
        </div>
    </div>
    <div class="flex items-center justify-center mb-64">
        <div class="relative w-full flex flex-row gap-8 snap-x snap-mandatory overflow-x-auto py-4" style="-ms-overflow-style: none; scrollbar-width: none;">
            <style>
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            </style>
            @foreach ($categories as $category)
                <a class="snap-center shrink-0 py-12 px-16 rounded-lg shadow-lg bg-surface-container-low" href="/explore?category={{ $category->id }}">
                    <div class="container-fluid text-center fs-4 text-black">
                        {{ $category->name }}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="flex flex-col items-center justify-center w-full mb-64">
            <span class="mb-12 text-6xl">Wujudkan idemu bersama kartina</span>
            <div class="py-12 flex flex-row gap-8 justify-center items-center">

                            <div class="border-outline p-8 shadow rounded text-xl flex flex-col gap-8 justify-between items-center">
                                <span class="material-symbols-outlined text-8xl text-primary">
                                    verified_user
                                    </span>
                                <h4>Talenta dengan permit dan seritifikasi</h4>
                            </div>

                            <div class="border-outline p-8 shadow rounded text-xl flex flex-col gap-8 justify-between items-center">
                                <span class="material-symbols-outlined text-8xl text-primary">
                                    payments
                                    </span>
                                <h4>                                Bayar hanya jika kamu puas
                                </h4>
                            </div>

                            <div class="border-outline p-8 shadow rounded text-xl flex flex-col gap-8 justify-between items-center">
                                <span class="material-symbols-outlined text-8xl text-primary">
                                    person_play
                                    </span>
                                <h4>                                Proses yang mudah tidak membuatmu pusing

                                </h4>
                            </div>

                
            </div>


                    <a href="/register" class="btn mt-8 flex"><span class="mx-12 my-8 text-4xl">Gabung Sekarang</span></a>

            </div>
        </div>
    </div>
@endsection