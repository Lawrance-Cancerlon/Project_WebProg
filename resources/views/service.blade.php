@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'explore'])
@endsection

@section('content')
  
<div class="card p-12 bg-surface m-8 flex flex-row items-start gap-8 text-on-surface">

    <div style="flex: 1 1 60%" class="flex-1 flex flex-col justify-start gap-4">

        {{-- Title --}}
        <h1 class="text-4xl font-bold"> {{ $service->title }} </h1>


        {{-- Profile --}}
        <div class="flex flex-row items-center justify-start gap-4">
            <img class="rounded-full h-auto w-12 object-cover" src="{{ $picture }}" />

            <div class="flex flex-col justify-start gap-2">

                <div class="flex flex-row justify-start gap-2">
                    
                    <h4 class="text-xl text-bold text-secondary">{{ $service->user()->first()->name }}</h4>
                    <span class="px-2 flex justify-center items-center gap-2 text-sm rounded-full bg-primary-container text-on-primary-container">
                        <span class="material-symbols-outlined">verified</span>
                        Terverifikasi
                    </span>
                </div>  
            <div class="flex items-center gap-4">

            <span class="flex justify-start gap-2 w-fit text-primary">
                <span class="material-symbols-outlined">
                    rate_review
                    </span>

                <span>4 reviews</span>
            </span>
            <span class="flex justify-start gap-2 w-fit text-primary">
                <span class="material-symbols-outlined">
                    work
                    </span>

                <span>0 pekerjaan selesai</span>
            </span>
            </div>

            </div>
        </div>

        {{-- Gallery --}}
        <img src="{{ 'storage/' . $service->image }}" style="width: 40rem; height: 20rem"
        class="h-auto object-cover outline outline-1 outline-outline-variant rounded shadow">

        {{-- Description --}}
        <h4 class="text-xl font-bold">Tentang jasa</h4>
        <p>{{ $service->description }}</p>

    </div>

    <div style="flex: 1 1 40%" class="p-8 flex flex-col justify-start gap-4 outline outline-1 outline-outline-variant rounded">

        <div>
          <h2 class="text-xl font-bold">IDR {{ $service->salary}}</h2>
          <span class="text-sm text-secondary">Hemat hingga 15% dengan <a class="text-primary underline">Promo langganan</a> kami!</span>
        </div>

        <div class="card bg-secondary-container text-on-secondary-container gap-4">
            
            <div class="flex flex-row items-center gap-4">
                <span class="material-symbols-outlined">phone</span>
                <span>{{ $service->user()->first()->phone }}</span>
            </div>

            <div class="flex flex-row items-center gap-4">
                <span class="material-symbols-outlined">email</span>
                <span>{{ $service->user()->first()->email }}</span>
            </div>

        </div>

        <form action="/apply" method="POST"
        class="card bg-primary-container text-on-primary-container
        flex flex-col gap-2">
        @csrf
        <input type="hidden" name="id" value="{{$service->id}}"/>
            <h4 class="text-xl font-bold">Pesan Sekarang</h4>
            <textarea class="form-input" name="description" placeholder="Pesan ini hanya sebagai pesan sapa, bukan untuk detail pesanan"></textarea>
            <button class="btn btn-outline" type="submit">Checkout</button>
    </form>

    </div>
</div>


    
@endsection