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
        @if(session('message'))
            <h3 class="text-center text-success">{{session('message')}}</h3>
        @endif
        <a href="{{route('products.create')}}"><button class="btn btn-primary mt-2 mb-2">Creat New Product</button></a>
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
                      <a href="{{route('products.show',['id'=>$product->id])}}"><button class="btn btn-success">Show</button></a>
                      <a href="{{route('product.edit',['product'=>$product->id])}}"><button class="btn btn-primary">Edit</button></a>
                      <form action="{{route('product.destroy',['product'=>$product->id])}}" method="POST" style="display:inline;">
                        @csrf
                        @method('delete')

                        <button class="btn btn-danger" onclick="return confirm('Are you sure want to delete?');">Delete</button>
                      </form>

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
