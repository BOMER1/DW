@extends('products.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mb-2">Product</h2>
        </div>
        <div class="col-lg-12 text-center">
            <a class="btn btn-success" href="{{ route('products.create') }}">Add product</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($products) > 0)
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Product Code</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Avatar</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th width="300px">More</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->avatar }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database</div>
    @endif

    {!! $products->links() !!}
@endsection
