@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <p>Category des produits</p>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Descrition</th>
                        <th scope="col">Image</th>
                        <th scope="col" colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td scope="row">{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                <img src="{{asset('assets/uploads/product/'.$product->image)}}" class="theImages"  alt="Image">
                            </td>
                            <td>
                                <a href="{{route('products.edit', $product)}}" class="btn btn-primary" >Edit</a>
                            </td>
                            <td>
                                <a href="{{route('products.delete', $product)}}" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection