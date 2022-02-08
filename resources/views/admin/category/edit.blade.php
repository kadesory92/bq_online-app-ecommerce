@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header" >
            <p>Editer Categories produits</p>
        </div>
        <div class="card-body">
            <form action="{{route('category.update', $category->id)}}" method="PUT" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row border">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control border" name="name" value="{{$category->name}}" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control border" name="slug" value="{{$category->slug}}" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description :</label>
                        <textarea name="description" cols="3" class="form-control border">{{$category->description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" {{$category->status=='1'?'checked':''}} >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular" {{$category->popular=='1'?'checked':''}} >
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="popular">Meta title</label>
                        <input type="text" class="form-control border" name="meta_title" value="{{$category->meta_title}}" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="metaKeywords">Meta Keywords</label>
                        <textarea name="meta_keywords" cols="3" class="form-control border">{{$category->meta_keywords}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="metaDescription">Meta description</label>
                        <textarea name="meta_description" cols="3" class="form-control border">{{$category->meta_descrip}}</textarea>
                    </div>
                    @if($category->image)
                        <img src="{{asset('assets/uploads/category/'.$category->image)}}" class="theImages" alt="Image category">
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control border"  />
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection