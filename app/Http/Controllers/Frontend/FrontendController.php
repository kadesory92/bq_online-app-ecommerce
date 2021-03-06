<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_products=Product::where('trending','=',1)->paginate(4);
        return view('frontend.index', compact('featured_products'));
    }
    //
}
