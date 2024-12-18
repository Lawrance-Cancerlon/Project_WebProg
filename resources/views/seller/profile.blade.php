@extends('app')

@section('navbar')
    @include('seller.navbar', ['page' => 'profile'])
@endsection

@section('content')


    <div class="flex flex-row justify-center gap-8 mt-12 px-8">


        <div class="flex flex-col justify-center items-center gap-8 px-12" style="flex: 1 1 40%;">


            <!-- Preview card -->
            <div class="flex flex-row border w-full border-outline-variant p-4 rounded items-center justify-start gap-4">
                <img class="rounded-full h-auto w-12 object-cover" src="{{ $picture }}" />
    
                <div class="flex flex-col justify-start gap-2">
    
                    <div class="flex flex-row justify-start gap-2">
                        
                        <h4 class="text-xl text-bold text-secondary">{{ $user->name }}</h4>
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
    
                    <span>0 reviews</span>
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

        


            <!-- Profile card -->
            <div class="border w-full border-outline-variant rounded-lg px-4 py-12 flex flex-col items-center justify-center gap-4 text-on-surface">

                <div class="flex flex-col justify-center items-center gap-4">
                    <img class="rounded-full h-auto w-1/5 object-cover" src="{{ $picture }}" />
                    <h1 class="text-4xl">{{ $user->name }}</h1>
                    <h4 class="text-xl">{{ $user->email }}</h4>
                </div>



                <div class="flex flex-col justify-start items-start gap-4">

                    <div class="text-lg flex items-center justify-center gap-2">

                        <span class="material-symbols-outlined">location_on</span>
                        <span>Lokasi pada Jakarta</span>

                    </div>

                    <div class="text-lg flex items-center justify-center gap-2">

                        <span class="material-symbols-outlined">person</span>
                        <span>Gabung pada {{ $user->created_at}}</span>

                    </div>



                    <div class="text-lg text-on-surface-variant flex items-center justify-center gap-2 ">

                        <span class="material-symbols-outlined">work</span>
                        <span>Industri anda</span>

                    </div>

                    <div class="text-lg text-on-surface-variant flex items-center justify-center gap-2 ">

                        <span class="material-symbols-outlined">schedule</span>
                        <span>Preferensi jam kerja</span>

                    </div>

                </div>
            </div>

        </div>

        <!-- Second row -->

        <div class="flex flex-col justify-start" style="flex: 1 1 60%;">

            <div class="p-12 rounded-xl bg-surface flex flex-col gap-4 text-on-surface">
            
                <h4 class="text-xl">Feedback dari pelanggan</h4>

                <div class="flex flex-col justify-center items-center gap-4 w-50 text-secondary">

                    <span class="material-symbols-outlined" style="font-size: 4vw">rate_review</span>
                    <h4>Anda belum mendapatkan reviews dari siapapun.</h4>
                </div>
            
            </div>
        </div>


    </div>
@endsection
