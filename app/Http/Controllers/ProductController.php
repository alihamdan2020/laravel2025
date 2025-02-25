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

    
    function insert(){
        $supp=DB::table('suppliers')->get();
        $cats=DB::table('categories')->get();

        // return view ('insert',['supp'=>$suppliers,'cats'=>$categories]);
        return view ('insert',compact('supp','cats'));
    }

    public function storeFacade(Request $req){
        // dd($req->toArray());
        $req->validate([
           'prodname'=>'required',
            'prodprice'=>'required'
        ]);

        DB::table('products')->insert([
            'ProductName'=>$req->input('prodname'),
            'CategoryID'=>$req->input('catid'),
            'SupplierID'=>$req->input('supid'),
            'UnitPrice'=>$req->input('prodprice'),
            'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem assumenda distinctio "
        ]);
        return redirect('/insert')->with('msg','data has entertd succefully');
    }
    
    public function storeModale(Request $req){
        $data=$req->validate([
            'ProductName'=>'required',
            'UnitPrice'=>'required',
        ]);
        $data["description"]="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem assumenda distinctio ";
        
        Product::create($data);
        
        return redirect('/insert')->with('msg1','data has entertd succefully');
    }

}
