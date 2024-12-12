<?php
    use app\Models\Category;
?>

@extends('app')

@section('navbar')
    @include('components.navbar', ['page' => 'post'])
@endsection

@section('content')
    <div class="container mx-auto flex flex-row justify-between items-center">
        <div class="w-full lg:w-2/3 overflow-y-auto">
            <div class="shadow-md rounded-lg">
                <div class="p-6">
                    <div class="text-center mb-6">
                        <h1 class="text-2xl font-bold text-on-primary-container">Jasa Anda</h1>
                    </div>
                    <div class="flex flex-wrap justify-around gap-4">
                        @forelse ($services as $service)
                            <div class="w-full sm:w-1/2 lg:w-1/4 bg-surface shadow-md rounded-lg p-4">
                                <div class="flex flex-col justify-between h-full">
                                    <h5 class="text-lg font-semibold text-on-surface mb-3">{{ $service->title }}</h5>
                                    <h6 class="text-sm text-secondary mb-4">{{ Category::find($service->category_id)->name }}</h6>
                                    <p class="text-on-surface mb-4">{{ $service->description }}</p>
                                    <h6 class="text-lg font-bold text-primary">Rp {{ $service->salary }}</h6>
                                </div>
                            </div>
                        @empty
                            <div class="w-full text-center">
                                <h2 class="text-xl text-on-surface">Anda belum memiliki jasa</h2>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/3 mt-6 lg:mt-0">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-on-primary-container">Tambahkan Jasa</h1>
            </div>
            <form action="/post" method="post" class="bg-surface shadow-md rounded-lg p-6">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-on-surface">Judul</label>
                    <input type="text" class="input-control" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-error mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-on-surface">Deskripsi</label>
                    <textarea class="input-control" id="description" name="description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-error mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="salary" class="block text-sm font-medium text-on-surface">Harga</label>
                    <input type="number" class="input-control" id="salary" name="salary" value="{{ old('salary') }}">
                    @error('salary')
                        <div class="text-error mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="category_id" class="block text-sm font-medium text-on-surface">Kategori</label>
                    <select class="input-control" id="category_id" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-error mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full bg-primary text-on-primary py-2 rounded-md shadow-md hover:bg-primary-container">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
