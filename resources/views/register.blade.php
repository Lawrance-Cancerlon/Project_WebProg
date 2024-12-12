@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'register'])
@endsection

@section('content')
    <div class="container mx-auto flex justify-center items-center min-h-screen">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg">
            <div class="bg-white p-6">
                <h1 class="text-2xl font-bold text-center">Daftar</h1>
            </div>
            <div class="p-6">
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500
                        focus:border-indigo-500 @error('email') border-red-500 @enderror" id="name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                        <input type="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500
                        focus:border-indigo-500 @error('email') border-red-500 @enderror" id="email"
                            name="email" autocomplete="email">
                        @error('email')
                         <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>





                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                        <input type="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500
                        focus:border-indigo-500 @error('email') border-red-500 @enderror" id="password"
                            name="password">
                        @error('password')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="confirm" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi</label>
                        <input type="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500
                        focus:border-indigo-500 @error('email') border-red-500 @enderror" id="confirm"
                            name="confirm">
                        @error('confirm')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500
                        focus:border-indigo-500 @error('email') border-red-500 @enderror" id="phone"
                            name="phone">
                        @error('phone')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="">
                        <button type="submit" class="btn" >Daftar</button>
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