@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'login'])
@endsection

@section('content')
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md bg-surface rounded-lg shadow-md py-8 px-4 text-on-surface">
            <div class="px-6 py-4">
                <h1 class="text-2xl font-bold text-center text-on-surface">Masuk</h1>
            </div>
            <div class="px-6 py-4">
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium">Email</label>
                        <input type="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 @error('email') border-red-500 @enderror" id="email" name="email" autocomplete="email">
                        @error('email')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium">Password</label>
                        <input type="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 @error('password') border-red-500 @enderror" id="password" name="password">
                        @error('password')
                            <p class="mt-2 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" class="h-4 w-4 focus:ring-indigo-500 border-gray-300 rounded" id="remember" name="remember" value="remember" {{ old('remember') == 'remember' ? 'checked' : '' }}>
                        <label class="ml-2 block text-sm text-gray-900" for="remember">Ingat saya</label>
                    </div>
                    <div class="mb-4 flex items-center justify-center">
                        <button type="submit" class="btn">Masuk</button>
                    </div>
                    <div class="text-center">
                        <p class="text-sm text-gray-600">Tidak memiliki akun? daftar <a href="/register" class="text-primary hover:text-primary-container">disini</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
