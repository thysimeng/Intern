<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProducrViewController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('DailyShop.productShow',compact('products'));
    }

    public function category($category){
//        $products = Products::where('productCategory', $category)->get();
        $products = DB::table('products')->join('category', 'products.category_id','=', 'category.categoryID')->where('categoryName', $category)->get();
        if (count($products)==0){
            return $this->index();
        }
        else{
            return view('DailyShop.productShow',compact('products'));
        }
    }
}
