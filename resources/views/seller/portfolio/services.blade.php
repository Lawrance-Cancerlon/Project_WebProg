@extends("seller.portfolio.layout", ["subpage" => "services"])


@section("subcontent")

<div class="flex flex-col gap-8">

    <div class="card rounded-lg flex-col justify-start gap-8 p-8">

        <h1 class="text-4xl">Jasa Anda</h1>
        
        @if($services->isEmpty())

        <div class="flex flex-col justify-center items-center rounded-lg p-8 w-full h-96">
            <span class="material-symbols-outlined" style="font-size: 4vw">orders</span>
            <span class="text-xl">Kamu belum punya jasa. Yuk tawarkan <a href="#create" class="text-primary underline">jasamu sekarang!</a> :D</span>
        </div>

        @else

        @foreach ($services as $service)

            <div class="card-service">

                <div class="thumbnail"
                style="background-image: url({{ url('storage/' . $service->image) }})">
                </div>

                <div class="card-body">

                    <h2 class="text-xl font-bold">{{ $service->title }}</h2>
                    <p class="text-lg">{{ $service->description }}</p>
                </div>

                <div class="card-footer">

                </div>

            </div>
            
        @endforeach

        @endif

        @isset($services)
        {{$services->links()}}
        @endisset

    </div>

    <div id="create" class="card rounded-lg flex-col justify-start gap-8 p-8">

        <h1 class="text-4xl">Buat jasa baru</h1>

        <form class="flex flex-col gap-8" action="{{ route("seller.portfolio.services.create")}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="flex flex-row justify-start gap-4">
                
                <div class="flex-1">
                    <label for="category" class="text-secondary">Kategori</label>
                    <select class="form-input @error('category_id') outline outline-error @enderror" id="category" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="flex-1">
                    <label for="title" class="text-secondary">Nama Jasa</label>
                    <input class="form-input @error('title') outline outline-error @enderror" id="title" name="title"/>
                   
                    @error('title')
                    <p class="mt-2 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>
                
            </div>


            <div class="flex flex-row justify-center gap-4">

                <div class="flex-1">
                    <label for="description" class="text-secondary">Deskripsi</label>
                    <textarea class="form-input @error('description') outline outline-error @enderror" id="description" name="description"></textarea>
                    @error('description')
                    <p class="mt-2 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>
                
            </div>

            <div class="flex flex-row justify-center gap-4">

                <div class="flex-1">
                    <label for="salary" class="text-secondary">Harga</label>
                        
                    <div class="flex items-center form-input py-0 px-4">
                        <span class="text-primary text-lg px-2">IDR</span>
                        <input type="number" id="salary" name="salary" min="0" class="flex-1 form-input border-none bg-surface shadow-none" placeholder="Harga jasa anda" required>

                    </div>
                    @error('salary')
                    <p class="mt-2 text-sm text-error">{{ $message }}</p>
                    @enderror

                    

                </div>
            </div>

            

            <div class="flex flex-row justify-center gap-4">

                <div class="flex-1">
                    <label for="image" class="text-secondary">Gambar Banner</label>
                    <input type="file" class="form-input @error('image') outline outline-error @enderror" id="image" name="image"/>
                    @error('image')
                    <p class="mt-2 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>
                
            </div>

            <div class="flex flex-row justify-center gap-4">

                <button type="submit" class="btn flex-1">Buat</button>

            </div>


        </form>

    </div>

</div>


@endsection