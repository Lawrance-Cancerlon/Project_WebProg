@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'profile'])
@endsection

@section('content')


    <div class="flex flex-row justify-center gap-8 mt-12 px-8">


        <div class="flex flex-col justify-center gap-8" style="flex: 1 1 40%;">


            <!-- Preview card -->
            <div class="p-4 rounded-xl border shadow-lg flex flex-row items-center justify-start gap-4 tooltip">
                <span class="tooltiptext">Kartu ini merupakan tampilan yang dilihat orang lain</span>
                <img class="rounded-xl h-auto w-1/5 object-cover" src="{{ $picture }}" />

                <div class="flex flex-col justify-start gap-2">

                @can('admin')
                    <div class="flex flex-row justify-start items-center gap-4">

                        <h2 class="text-4xl">{{ $user->name }}</h2>


                        <span class="text-xl py-2 px-4 bg-red-300 rounded-full">Admin</span>
                    </div>
                @else
                    <h2 class="text-4xl">{{ $user->name }}


                    </h2>
                @endcan

                <h4 class="text-xl">{{ $user->email }}</h4>

                <div class="flex items-center gap-4">

                <span class="px-4 py-2 flex justify-start gap-2 w-fit rounded bg-primary text-on-primary">
                    <span class="material-symbols-outlined">
                        rate_review
                        </span>

                    <span>0 reviews</span>
                </span>
                <span class="px-4 py-2 flex justify-start gap-2 w-fit rounded bg-primary text-on-primary">
                    <span class="material-symbols-outlined">
                        work
                        </span>

                    <span>0 finished orders</span>
                </span>
                </div>

                <h4>Gabung pada: {{ $user->created_at }}</h4>

                </div>
            </div>

        


            <!-- Profile card -->
            <div class="text-2xl font-bold">Profile Anda</div>
            <div class="p-12 rounded-xl bg-surface flex flex-col items-center justify-center gap-4 text-on-surface">

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
            
                <h4 class="text-xl">Feedback dari freelancers</h4>

                <div class="flex flex-col justify-center items-center gap-4 w-50 text-secondary">

                    <span class="material-symbols-outlined" style="font-size: 4vw">rate_review</span>
                    <h4>Anda belum mendapatkan reviews dari siapapun.</h4>
                </div>
            
            </div>
        </div>


    </div>
@endsection
