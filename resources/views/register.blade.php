@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'register'])
@endsection

@section('content')
    <div class="flex flex-row items-start min-h-screen p-8 gap-8">

        <div data-aos="fade-up"
        class="text-4xl lg:text-8xl text-primary text-wrap"
        style="flex: 1 1 50%">
            Daftar dan bergabung dengan jutaan <span class="relative inline-block h-[1em] overflow-hidden
            rounded-lg bg-secondary-container font-bold px-4">
                <span id="sliding-words" class="block animate-slide-text text-on-secondary-container">
                    <span class="block">desainer</span>
                    <span class="block">pengusaha</span>
                    <span class="block">insinyur</span>
                    <span class="block">penulis</span>
                    <span class="block">desainer</span>
    
                </span>
            </span>
        </div>

        <div data-aos="fade-up" data-aos-delay="500" 
        class="card justify-center bg-surface-container-low rounded-lg text-on-surface"
        style="flex: 1 1 50%">
            <div class="bg-white p-6">
                <h1 class="text-2xl font-bold text-center">Daftar</h1>
            </div>
            <div class="p-6">
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-8">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" class="form-input @error('email') border-error @enderror" id="name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="mb-8">
                        <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                        <input type="email" class="form-input @error('email') border-error @enderror" id="email"
                            name="email" autocomplete="email">
                        @error('email')
                         <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>





                    <div class="mb-8">
                        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                        <input type="password" class="form-input @error('password') border-error @enderror" id="password"
                            name="password">
                        @error('password')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <label for="confirm" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-input @error('confirm') border-error @enderror" id="confirm"
                            name="confirm">
                        @error('confirm')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" class="form-input @error('phone') border-error @enderror" id="phone"
                            name="phone">
                        @error('phone')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="">
                        <button type="submit" class="btn">Daftar</button>
                    </div>
                    <div class="mt-4 text-center">
                        <p>Sudah memiliki akun? masuk <a href="/" class="text-primary hover:underline">disini</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <style>
        .form-input {
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            transition: border-color 0.2s;
        }

        .form-input:focus {
            border-color: #6366f1;
            outline: none;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.5);
        }

        .form-input.error {
            border-color: #f87171;
        }

        .form-input.error:focus {
            box-shadow: 0 0 0 3px rgba(248, 113, 113, 0.5);
        }
        
    </style>
@endsection