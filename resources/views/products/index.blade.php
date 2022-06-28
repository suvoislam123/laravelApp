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
        <a href="{{route('products.index')}}"><button class="btn btn-primary">All Products</button></a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col">Serial</th>
                  <th scope="col">Products Name</th>
                  <th scope="col">Details</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col" class="text-center">Operation</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->details}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td class="text-center">
                      <a href=""><button class="btn btn-success">Show</button></a>
                      <a href=""><button class="btn btn-primary">Edit</button></a>
                      <a href=""><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach


              </tbody>
        </table>
    </x-slot:contents>
    <x-slot:footer>
        @include('common.footer')
    </x-slot:footer>
</x-layout.products>
