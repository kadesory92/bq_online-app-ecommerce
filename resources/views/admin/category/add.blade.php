@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header" >
            <p>Ajouter de Categories produits</p>
        </div>
        <div class="card-body">
            <form action="{{route('category.insert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row border">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control border" name="name" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control border" name="slug" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description :</label>
                        <textarea name="description" cols="3" class="form-control border"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="popular">Meta title</label>
                        <input type="text" class="form-control border" name="meta_title" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="metaKeywords">Meta Keywords</label>
                        <textarea name="meta_keywords" cols="3" class="form-control border"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="metaDescription">Meta description</label>
                        <textarea name="meta_description" cols="3" class="form-control border"></textarea>
                    </div>
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