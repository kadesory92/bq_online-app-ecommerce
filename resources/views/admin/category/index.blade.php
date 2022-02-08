@extends('layouts.admin')

@section('content')

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
                    @foreach($categories as $category)
                        <tr>
                            <td scope="row">{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                <img src="{{asset('assets/uploads/category/'.$category->image)}}" class="theImages"  alt="Image">
                            </td>
                            <td>
                                <a href="{{route('category.edit', $category)}}" class="btn btn-primary" >Edit</a>
                            </td>
                            <td>
                                <a href="{{route('category.delete', $category)}}" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection