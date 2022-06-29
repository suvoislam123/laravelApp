<x-layout.products>
    <x-slot:title>
        DashBoard
    </x-slot:title>
    <header>
        <x-slot:header>
            @include('common.header')
        </x-slot:header>
    </header>
    <x-slot:contents>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Error mesage comes from database/lange/validation.php and we can change the messages there --}}
        <div class="w-25 mx-auto">
            <form method="POST" action="{{route('products.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Product Name</label>
                  <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="name" >
                  @error('name')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="details" class="form-label">Product Details</label><br>
                  <textarea name="details" id="details" cols="44" rows="4">{{old('details')}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product price</label>
                    <input type="text" name="price" value="{{old('price')}}" class="form-control" id="price" >
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Product Quantity</label>
                    <input type="number" name="quantity" value="{{old('quantity')}}" class="form-control" id="quantity" >
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </x-slot:contents>
    <x-slot:footer>
        @include('common.footer')
    </x-slot:footer>
</x-layout.products>
