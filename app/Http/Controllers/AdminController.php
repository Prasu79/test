<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   
    public function login(){
        return view('auth.login');
    }
    public function index(Request $request)
    {
           $admins = User::all();
           if($request->has('search')){
            $admins = User::where('name','like' ,"%{$request->search}%")->orWhere('email','like', "%{$request->search}%")->get();
        }
            return view('user.index',compact('admins')); 
    }
    public function create()
    {
        return view('user.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=> 'required'
        ]);
        User::create($data);
        return redirect(route('user'))->with('message','Admin Added Successfully');
    }

    public function show(User $user)
    {
        //
    }

   public function edit(User $user){
        return view('user.edit',compact('user'));

   }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);
        $admins = User::find($id);
        $admins->update($data);
        return redirect(route('user'))->with('message','Admin Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request){
        $admins = User::find($request->dataid);
        $admins->delete();
        return redirect(route('user'))->with('message','Admin Deleted Successfully');
    }
   

}
