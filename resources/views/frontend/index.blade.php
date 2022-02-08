@extends('layouts.front')

@section('title')
 Buy Quickly Online
@endsection

@section('content')
 @include('layouts.inc.slider')
 
<div class="py-5">
     <div class="container">
        <div class="row">
                @foreach($featured_products as $prod)
                    <div class="col-md-3">
                        <div class="card theProducts mb-3">
                            <img src="{{asset('assets/uploads/product/'.$prod->image)}}" class="theImages" alt="Product image">
                            <div class="card-body">
                                <h5>{{$prod->name}}</h5>
                                <small>{{$prod->selling_price}}</small>
                                <button class="btn btn-primary voir-prod">Show</button>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
     </div>
 </div>
 <div class="d-flex justify-content-center">
    {!! $featured_products->links() !!}
</div>

 <div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>

@endsection

@section('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
@endsection