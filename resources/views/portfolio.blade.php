@php
    use App\Models\Service;
    use App\Http\Controllers\PageController;
@endphp
@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'portfolio'])
@endsection

@section('content')

<div class="flex flex-col p-8 gap-8">

    <div class="card p-8 rounded-lg gap-4">
        <h2 class="text-4xl">Pesanan Anda</h2>

        <div class="flex flex-wrap">
            @forelse ($applications as $application)

            <div class="w-full md:w-1/3 px-2 mb-4">
                <div class="bg-surface shadow-md rounded-lg overflow-hidden">
                    <div class="py-12 px-8">
                        <h5 class="text-lg text-on-surface font-semibold mb-4">{{ Service::find($application->service_id)->title }}</h5>
                        <a href="profile?id={{ $application->service()->first()->user_id }}" class="py-2 px-2
                            hover:bg-primary hover:text-on-primary rounded-full bg-primary-container
                            text-on-primary-container mb-8 w-fit flex flex-row justify-start items-center">
                            
                           <img class="rounded-full h-auto w-12 object-cover" src="{{ PageController::getPicture($application->service()->first()->user()->first()->name) }}" />
        
        
                                <span class="px-4">{{ $application->service()->first()->user()->first()->name }}</span>
                        
                        </a>
                        <p class="text-on-surface-variant">{{ $application->description }}</p>
                    </div>
                </div>
            </div>

                
            @empty

            <div class="flex flex-col justify-center items-center rounded-lg p-8 w-full">
                <span class="material-symbols-outlined" style="font-size: 4vw">orders</span>
                <span class="text-xl">Kamu belum ada pesanan. Yuk <a href="/explore" class="text-primary underline">pesan sekarang!</a> :D</span>
            </div>
                
            @endforelse
            
        </div>

    </div>
    <div class="text-secondary">Cari pesanan klien? Pindah ke <a href="/seller/home" class="link">halaman seller</a> yuk</div>


</div>
@endsection