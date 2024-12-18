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
                        <div class="py-2 px-2
                            rounded-full bg-surface-container-high shadow
                            text-on-surface mb-8 w-fit flex flex-row justify-start items-center">
                            
                           <img class="rounded-full h-auto w-8 object-cover" src="{{ PageController::getPicture($application->service()->first()->user()->first()->name) }}" />
        
        
                                <span class="px-4">{{ $application->service()->first()->user()->first()->name }}</span>
                        
                        </div>
                        <p class="text-on-surface-variant mb-4">{{ $application->description }}</p>

                        <span class="flex flex-row justify-start items-center gap-4 p-4 rounded-lg bg-secondary-container text-on-secondary-container">
                            <span class="material-symbols-outlined animate-spin-slow">webhook</span>
                            <span class="text-mono">Sedang dikerjakan :D</span>
                        </span>
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
    <div class="text-secondary text-xl">
        Kamu cari pesanan klien mu? Yuk pindah ke <a class="link" href="{{ route('seller.index') }}">halaman seller</a> yuk :D</div>


</div>
@endsection