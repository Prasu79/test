<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cities = Cities::all();
        if($request->has('search')){
            $cities = Cities::where('name','like' ,"%{$request->search}%")->orWhere('state_id','like', "%{$request->search}%")->get();
        }
        return view('city.index' , compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::all();
        return view('city.create',compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'state_id' =>'required',
            'name' => 'required'
        ]);
        Cities::create($data);
        return redirect(route('city'))->with('message','City Added Successfully');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cities $city)
    {
        $states = State::all();
       return view('city.edit',compact('states','city')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'state_id' =>'required',
            'name' => 'required'
        ]);
        $cities =Cities::find($id);
        $cities -> update($data);
        return redirect(route('city'))->with('message','City Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $cities = Cities::find($request->dataid);
        $cities->delete();
        return redirect(route('city'))->with('message','City Deleted Successfully');
    }
}
