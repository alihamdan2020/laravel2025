<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function indexFacade(){
        $allProducts=DB::table('products')
                    ->join('categories','products.CategoryID','=','categories.CategoryID')
                    ->join('suppliers','suppliers.SupplierID','=','products.SupplierID')->get();
        $msg="using facades DB to fetch data from multi tables [products,categories,suppliers]";
        session()->flash('msg',$msg);
        return view ('fakade',compact('allProducts'));
    }

    public function indexModel(){
        // $allProducts=Product::join('categories','products.CategoryID','=','categories.CategoryID')->join('suppliers','suppliers.SupplierID','=','products.SupplierID')->get();
        //the main difference between gt without select and only get, the get fetch all joined data tables while select pivk only the fields you need
        $allProducts=Product::join('categories','products.CategoryID','=','categories.CategoryID')->join('suppliers','suppliers.SupplierID','=','products.SupplierID')->select('products.*','CompanyName','CategoryName')->get();

        $msg="using modal to fetch data from multi tables [products,categories,suppliers]";
        session()->flash('msg',$msg);
        return view ('fakade',compact('allProducts'));
    }


}
