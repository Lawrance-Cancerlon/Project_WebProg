@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'login'])
@endsection

@section('content')
<div class="flex flex-row items-start min-h-screen p-8 gap-8">
  
    <div data-aos="fade-up"
    class="flex-1 text-4xl lg:text-8xl text-primary text-wrap">
        <span class="relative inline-block h-[1em] overflow-hidden
        rounded-lg bg-secondary-container font-bold px-4">
            <span id="sliding-words" class="block animate-slide-text text-on-secondary-container">
                <span class="block">pagi</span>
                <span class="block">siang</span>
                <span class="block">sore</span>
                <span class="block">malam</span>
                <span class="block">pagi</span>

            </span>
        </span>, Selamat datang kembali.
    </div>
   



    <div  data-aos="fade-up" data-aos-delay="200" 
    class="flex-1 card py-8 px-4 bg-surface-container-low text-on-surface">
        <div class="px-6 py-4">
            <h1 class="text-2xl font-bold text-on-surface">Masuk</h1>
        </div>
        <div class="px-6 py-4">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" class="form-input @error('email') border-error @enderror" id="email" name="email" autocomplete="email">
                    @error('email')
                        <p class="mt-2 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input type="password" class="form-input @error('email') border-error @enderror" id="password" name="password">
                    @error('password')
                        <p class="mt-2 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" class="h-4 w-4 focus:ring-indigo-500 border-gray-300 rounded" id="remember" name="remember" value="remember" {{ old('remember') == 'remember' ? 'checked' : '' }}>
                    <label class="ml-2 block text-sm text-gray-900" for="remember">Ingat saya</label>
                </div>
                <div class="mb-4 flex items-center justify-start">
                    <button type="submit" class="btn">Masuk</button>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Tidak memiliki akun? daftar <a href="/register" class="text-primary hover:text-primary-container">disini</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
