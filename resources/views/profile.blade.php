@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'profile'])
@endsection

@section('content')


    <div class="flex justify-center items-center mt-36">

        <div class="p-4 rounded-xl border shadow-lg
    flex flex-row items-center justify-start gap-4">

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

                <span class="px-4 py-2 w-fit rounded bg-primary text-on-primary">Phone | {{ $user->phone }}</span>

                <h4>Joined since: {{ $user->created_at }}</h4>

            </div>
        </div>

    </div>
@endsection
