@extends('seller.portfolio.layout', ['subpage' => 'pesanan'])

@section('subcontent')

<div class="flex flex-wrap gap-8">

@forelse ($applications as  $index => $application)

    <div class="card flex-col p-8 gap-4" style="flex: 1 1 33.3%">
        
        <div class="flex flex-col gap-4">
            <div class="flex flex-row items-center gap-4 flex-1">
                <img class="rounded-full h-auto w-8 object-cover" src="{{ $application->user()->first()->getAvatar() }}" />
                <span class="font-bold">{{ $application->user()->first()->name}}
            </div>
    
            <div>
    
                <h2 class="text-xl font-bold"> {{ $application->service()->first()->title }}</h2>
    
            </div>
    
            <div>
                {{ $application->description }}
            </div>

        </div>

        <div class="w-full h-full flex-col gap-4 flex-1">
            <h4 class="font-bold">Stat Anda</h4>

            <div class="p-4 w-full rounded shadow bg-primary-container text-on-primary-container">

                {{ $application->status }}

            </div>

        </div>
            
    </div>

    @empty

    <div class="card flex flex-col justify-center items-center rounded-lg p-8 py-12 w-full">
        <span class="material-symbols-outlined" style="font-size: 4vw">orders</span>
        <span class="text-xl">Kamu belum ada pesanan.</span>
    </div>
    
@endforelse

</div>

@endsection