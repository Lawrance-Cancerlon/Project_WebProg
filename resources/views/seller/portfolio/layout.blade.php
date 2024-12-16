@extends('app')

@section('navbar')
@include('seller.navbar', ['page' => "portfolio"])
@endsection


@section('content')

<div class="flex flex-row p-8">

    <div style="flex: 1 1 30%" class="card flex-col">
        <a class="text-xl
        {{ ($subpage == 'index')? 'bg-primary-container text-on-primary-container' : ''}}">
    </div>

    <div style="flex: 1 1 70%">
    @yield('content')
    </div>
    

</div>

@endsection