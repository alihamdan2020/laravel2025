<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $users=User::join('country','users.countryId',"=","country.id")->select('users.*','countryName')->paginate(10);
        // $users=User::latest()->paginate(10);
        // $users=User::latest()->take(5)->get();
        // $users=DB::table('users')->paginate(10);
        //$users=User::paginate(10);
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

    public function login(){
        return view ('users.login');
    }

    public function signin(Request $req){
        // do not use $req->all()
        
// `her as create function, just i change what field i needto make credentials, here email and password, if you want name instead of email just change email to name, with chnage type of input in your blade
        $cred=$req->only('email','password');
        if(auth()->attempt($cred)){
            return redirect('/');
        }
        else
        return redirect("/login");
    }

    public function create(Request $req){
        $data=$req->only('email',"password");
        $user=User::create($data);
        Auth()->login($user);

        return redirect('/')->with("message","You are now logged in after registration");

   }

   public function logout(){
    auth::logout();
    session::flush();
    return redirect('/');
}


}
