@extends('products.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mb-2">Show product</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name: </strong>
                {{ $product->product_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price: </strong>
                {{ $product->price }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Avatar: </strong>
                {{ $product->avatar }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Created At: </strong>
                {{ $product->created_at }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Updated At: </strong>
                {{ $product->updated_at }}
            </div>
        </div>

    </div>

@endsection
