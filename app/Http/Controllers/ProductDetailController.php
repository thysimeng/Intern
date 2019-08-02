<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function index($idProduct)
    {
//        $a = $this->store();
        $productDetail = DB::table('products')->join('category', 'products.category_id','=', 'category.categoryID')->where('ProductID', $idProduct)->first();
//        $productDetail = Product::where('ProductID', $idProduct)->first();
        $productSize = json_decode($productDetail->ProductSize);
        $productColor = json_decode($productDetail->productColor);
        $productAllImg = json_decode($productDetail->ProductImagePhoto);
        return view('DailyShop.product-detail', compact('productDetail', 'productAllImg', 'productSize', 'productColor'));
//            return $productDetail;
//        return $productDetail;
    }
}
