<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $persons=Person::latest()->take(10)->get();
       return view ('persons.index',compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('persons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'personName'=>'required',
            'personAge'=>'required|digits_between:1,2|between:1,99',
            'password'=>'required|confirmed'
        ]);
        $hashedPassword = Hash::make($request->password);
        $request["password"]=$hashedPassword;
        Person::create($request->all());
        return redirect ()->route('personRoute.index');
        
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $person=Person::findorfail($id);
        return view ('persons.person',compact('person'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person=Person::find($id);
        $person->delete();
        return redirect ()->route('personRoute.index');

    }
}
