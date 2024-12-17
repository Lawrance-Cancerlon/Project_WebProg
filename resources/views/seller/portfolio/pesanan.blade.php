@extends('seller.portfolio.layout', ['subpage' => 'pesanan'])

@section('subcontent')

<div class="flex flex-wrap gap-8">

@foreach ($applications as  $index => $application)

    <div class="card flex-row p-8 gap-4">
        
        <div class="flex flex-col gap-4">
            <div class="flex flex-row items-center gap-4">
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

        <div class="w-full h-full flex-col gap-4">
            <h4 class="font-bold">Stat Anda</h4>

            <div class="p-4 w-full rounded shadow bg-primary-container text-on-primary-container">

                {{ $application->status }}

            </div>

        </div>
            
    </div>
    
@endforeach

</div>

@endsection