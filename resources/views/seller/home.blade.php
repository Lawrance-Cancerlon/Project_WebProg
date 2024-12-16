@extends('app')

@section('navbar')
    @include('seller.navbar', ['page' => 'home'])
@endsection

@section('content')

<div class="flex flex-col items-start p-8 gap-24">

    <div class="banner justify-start items-start gap-8 p-12"
        data-aos="fade-up" id="banner" style="background-image: url('storage/assets/seller_home_banner.png'); background-size: cover;">

        <h1 class="text-4xl text-surface font-bold">
            Selamat Datang, {{ $user->name }}
        </h1>
    </div>

</div>

@endsection
