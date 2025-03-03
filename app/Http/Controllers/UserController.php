<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users=User::latest()->paginate(10);
        // $users=User::latest()->take(5)->get();
        // $users=DB::table('users')->paginate(10);
        //$users=User::paginate(10);
        return view('users.index',compact('users'));
    }
    
    public function show($id){
        $user=User::findorfail($id);
        return view('users.show',compact('user'));
    }
    public function destroy($id){
        $rs=User::where('id',$id)->delete();
       return redirect ('/users');
    }
}
