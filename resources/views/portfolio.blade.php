@php
    use App\Models\Service;
    use App\Http\Controllers\PageController;
@endphp
@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'portfolio'])
@endsection

@section('content')
    
    


    <div class="grid grid-cols-4 overflow-visible p-12">

        <div class="col-span-2 flex flex-col justify-start gap-4">

            <h1 class="text-2xl font-bold mb-4">Pesanan Jasa</h1>
            <div class="flex flex-wrap -mx-2">
                @forelse ($jobs as $job)
                    <div class="w-full md:w-1/3 px-2 mb-4">
                        <div class="bg-surface shadow-md rounded overflow-hidden">
                            <div class="py-12 px-8">
                                <h5 class="text-lg text-on-surface font-semibold mb-4">{{ Service::find($job->service_id)->title }}</h5>
                                <a href="profile?id={{ $job->user_id }}" class="py-2 px-2
                                    hover:bg-primary hover:text-on-primary rounded-full bg-primary-container
                                    text-on-primary-container mb-8 w-fit flex flex-row justify-start items-center">
                                    
                                   <img class="rounded-full h-auto w-12 object-cover" src="{{ PageController::getPicture($job->user()->first()->name) }}" />
                
                
                                        <span class="px-4">{{ $job->user()->first()->name }}</span>
                                
                                </a>
                                <p class="text-on-surface-variant">{{ $job->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="w-full text-center">Anda belum mendapatkan aplikasi</p>
                @endforelse
            </div>  

        </div>


        <div class="col-span-2 flex flex-col justify-start gap-4">

            <h1 class="text-2xl font-bold mb-4">Lamaran Anda</h1>
            <div class="flex flex-wrap -mx-2">
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
                    <p class="w-full text-center">Anda belum melamar</p>
                @endforelse
            </div>


        </div>


    </div>
@endsection