@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header" >
            <p>Ajouter de produits</p>
        </div>
        <div class="card-body">
            <form action="{{route('products.update', $product)}}" method="PUT" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row border">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id" >
                            <option value="">{{$product->category->name}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control border" name="name" value="{{$product->name}}" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control border" name="slug" vlaue="{{$product->slug}}" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="smallDescription">Small Description</label>
                        <textarea class="form-control border" name="small_description">{{$product->small_description}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description :</label>
                        <textarea name="description" cols="3" class="form-control border">{{$product->description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="originalPrice">Original Price</label>
                        <input type="text" class="form-control border" name="original_price" value="{{$product->original_price}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sellingPrice">Selling Price</label>
                        <input type="text" class="form-control border" name="selling_price" value="{{$product->selling_price}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tax">Taxe</label>
                        <input type="number" class="form-control border" name="tax" value="{{$product->tax}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="qty">Quantity</label>
                        <input type="number" class="form-control border" name="qty" value="{{$product->qty}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" value="{{$product->status=='1'?'checked':''}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="trending">Trending</label>
                        <input type="checkbox" name="trending" value="{{$product->trending=='1'?'checked':''}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="metaTitle">Meta title</label>
                        <input type="text" class="form-control border" name="meta_title" value="{{$product->meta_title}}" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="metaKeywords">Meta Keywords</label>
                        <textarea name="meta_keywords" cols="3" class="form-control border">{{$product->meta_keywords}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="metaDescription">Meta description</label>
                        <textarea name="meta_description" cols="3" class="form-control border">{{$product->meta_description}}</textarea>
                    </div>
                    @if($product->image)
                        <img src="{{asset('assets/uploads/product/'.$product->image)}}" class="theImages" alt="Image product">
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control border" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection