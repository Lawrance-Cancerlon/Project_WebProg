@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'explore'])
@endsection

@section('content')
    <div class="flex flex-col items-center">

    </div>

    <div class="flex items-center justify-center h-full p-8">
        <div data-aos="fade-up"
        class="w-full h-full rounded-lg flex flex-col justify-center items-center gap-8 py-20" id="banner" style="background-image: url('storage/assets/home_banner.png'); background-size: cover;">
                <h1 class="text-8xl text-center text-surface">
                    Telusuri jasa yang kamu inginkan
                </h1>
                <form action="/explore" method="get" class="flex flex-row ">
                    <input type="text" name="search" id="search" class="input rounded-none rounded-tl-lg rounded-bl-lg" placeholder="Cari pekerjaan jasa..." value="{{$search ? $search : ''}}">
                    <button type="submit" class="btn btn-primary rounded-none rounded-br-lg rounded-tr-lg bg-blue-500 text-white px-4 py-2">
                        Cari
                    </button>
                </form>
        </div>
    </div>



    <div class="bg-surface-container grid grid-cols-1 md:grid-cols-3 gap-4 p-8">
        @forelse ($services as $index => $service)
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ $index * 100 }}"  
            class="bg-surface shadow-md rounded-lg overflow-hidden">
                <div class="flex flex-col p-8 gap-4 items-start">
                    <h5 class="text-4xl text-on-surface font-bold">{{ $service->title }}</h5>
                    <h6 class="text-on-surface-variant text-md">{{ $service->category()->first()->name }}</h6>
                    <p class="text-on-surface text-lg">{{ $service->description }}</p>
                    <p class="text-on-secondary font-semibold px-4 py-2 bg-secondary w-fit rounded">IDR {{ $service->salary }}</p>
                    <a href="/services?id={{ $service->id }}" class="btn w-full text-center">Lihat</a>
                </div>
            </div>
        @empty
            <div class="col-span-3 mt-3 text-center">
                <h2 class="text-2xl font-bold">
                    Tidak ada jasa
                </h2>
            </div>
        @endforelse
    </div>
    <div class="flex justify-center mt-4">
        {{  $services->links() }}
    </div>
@endsection
