<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductUpdateController extends Controller
{
    public function index($updateID)
    {
        $productDetail = Product::where('ProductID', $updateID)->first();
        $productSize = json_decode($productDetail->ProductSize);
        $productColor = json_decode($productDetail->productColor);
        $productAllImg = json_decode($productDetail->ProductImagePhoto);
        return view('DailyShop.product-update', compact('productDetail', 'productAllImg', 'productSize', 'productColor'));
//        return view('DailyShop.product-update');
    }
}
