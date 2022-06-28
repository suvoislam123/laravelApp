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
        <div class="w-25 mx-auto">
            <form method="POST" action="{{route('products.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Product Name</label>
                  <input type="text" class="form-control" id="name" >
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Product Description</label><br>
                  <textarea name="descrption" id="descrption" cols="44" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product price</label>
                    <input type="text" name="price" class="form-control" id="price" >
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Product Quantity</label>
                    <input type="number" name="quantity" class="form-control" id="quantity" >
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </x-slot:contents>
    <x-slot:footer>
        @include('common.footer')
    </x-slot:footer>
</x-layout.products>
