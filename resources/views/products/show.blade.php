<x-layout.products>
    <x-slot:title>
        show product
    </x-slot:title>
    <header>
        <x-slot:header>
            @include('common.header')
        </x-slot:header>
    </header>
    <x-slot:contents>
        <a href="{{route('products.index')}}"><button class="btn btn-info mt-2 mb-3" >All Product</button></a>
       <table class="table table-success table-striped">
        <tr>
            <th>Product Name</th>
            <td>{{$product->name}}</td>
        </tr>
        <tr>
            <th>Product Details</th>
            <td>{{$product->details}}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{$product->price}}</td>
        </tr>
        <tr>
            <th>Quantity</th>
            <td>{{$product->quantity}}</td>
        </tr>
       </table>
    </x-slot:contents>
    <x-slot:footer>
        @include('common.footer')
    </x-slot:footer>
</x-layout.products>
