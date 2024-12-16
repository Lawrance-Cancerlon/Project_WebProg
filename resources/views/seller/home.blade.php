@extends('app')

@section('navbar')
    @include('seller.navbar', ['page' => 'home'])
@endsection

@section('content')

<div class="flex flex-col items-start p-8 gap-24">

    <div class="banner justify-start items-start gap-8 px-12 py-36"
        data-aos="fade-up" id="banner" style="background-image: url('/storage/assets/seller_home_banner.png'); background-size: cover;">

        <h1 class="text-4xl text-surface font-bold">
            Halo, {{ $user->name }}
        </h1>
    </div>

    <div class="flex flex-row justify-center gap-8 w-full">

        <div class="bg-transparent py-4 px-16 rounded-lg
        border border-outline-variant flex flex-col justify-center items-center">
            <span class="text-8xl font-light text-primary">
                {{ sizeof($applications) }}
            </span>
            <span class="text-xl text-primary">
                Kerjaan Anda
            </span>
        </div>

        <div class="bg-transparent py-4 px-16 rounded-lg
        border border-outline-variant flex flex-col justify-center items-center">
            <span class="text-8xl font-light text-primary">
                {{ sizeof($applications) }}
            </span>
            <span class="text-xl text-primary">
                Pesanan Baru
            </span>
        </div>

    </div>
    

</div>

@endsection
