<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users=User::join('country','users.countryId',"=","country.id")->select('users.*','countryName')->paginate(10);
        // $users=User::latest()->paginate(10);
        // $users=User::latest()->take(5)->get();
        // $users=DB::table('users')->paginate(10);
        return view('users.index',compact('users'));
    }
    
    public function show($id){
        $user=User::join('country','country.id',"=","users.countryId")->where('users.id',$id)->first();
        return view('users.show',compact('user'));
    }
    public function destroy($id){
        $rs=User::where('id',$id)->delete();
       return redirect ('/users');
    }
}
