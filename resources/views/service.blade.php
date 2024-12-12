@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'explore'])
@endsection

@section('content')
    <div class="grid grid-cols-4 gap-4">
        
        <div class='col-span-1'></div>

        <div class='col-span-2'>
         
            <div class="my-36 service-detail p-6 bg-surface-container-low rounded-lg shadow-md flex flex-col items-start gap-4">
                <h1 class="text-4xl font-bold">{{ $service->title }}</h1>
                <a href="profile?id={{ $service->user_id }}" class="py-2 px-2
                    hover:bg-primary hover:text-on-primary rounded-full bg-primary-container
                    text-on-primary-container mb-4 flex flex-row justify-start items-center">
                    
                   <img class="rounded-full h-auto w-12 object-cover" src="{{ $picture }}" />


                        <span class="px-4">{{ $service->user()->first()->name }}</span>
                
                </a>
                <p class="text-on-surface mb-4">{{ $service->description }}</p>
                <p class="text-on-surface font-semibold"><strong>Harga:</strong> <span class="py-2 px-4 rounded-full bg-secondary text-on-secondary">Rp{{ $service->salary }}</span></p>
            </div>
            <h2 class="text-xl font-semibold mt-8 mb-4">Daftar</h2>
            <form action="/apply" method="post" class="flex flex-col gap-8">
                @csrf
                <input type="hidden" name="id" value="{{ $service->id }}">
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea class="form-control mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="description" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary bg-indigo-600 text-white py-2 px-4 rounded-md shadow hover:bg-indigo-700">Daftar</button>
            </form>
            </div>

        <div class='col-span-1'></div>



    </div>


    
@endsection