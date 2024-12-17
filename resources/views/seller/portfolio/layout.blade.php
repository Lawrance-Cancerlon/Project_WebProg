@extends('app')

@section('navbar')
@include('seller.navbar', ['page' => "portfolio"])
@endsection


@section('content')

<div class="flex flex-row p-8 gap-8">

    <div style="flex: 1 1 30%" class="card flex-col gap-8 p-8 h-fit">
        <a href="{{ route('seller.portfolio.index') }}" class="text-xl py-4 px-8 rounded-full flex justify-start items-center gap-8
            {{ ($subpage == 'index')? 'bg-primary-container text-on-primary-container' : ''}}">
            <span class="material-symbols-outlined">dashboard</span> 
            <span>Dashboard</span>
         </a>

         <a href="{{ route('seller.portfolio.pesanan') }}" class="text-xl py-4 px-8 rounded-full flex justify-start items-center gap-8
            {{ ($subpage == 'pesanan')? 'bg-primary-container text-on-primary-container' : ''}}">
            <span class="material-symbols-outlined">list_alt</span> 
            <span>Pesanan</span>
         </a>

         <a href="{{ route('seller.portfolio.services') }}" class="text-xl py-4 px-8 rounded-full flex justify-start items-center gap-8
            {{ ($subpage == 'services')? 'bg-primary-container text-on-primary-container' : ''}}">
            <span class="material-symbols-outlined">design_services</span> 
            <span>Jasa</span>
         </a>

    </div>

    <div style="flex: 1 1 70%">
    @yield('subcontent')
    </div>
    

</div>

@endsection