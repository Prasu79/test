<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $states = State::all();
        if($request->has('search')){
            $states = State::where('name','like' ,"%{$request->search}%")->orWhere('country_id','like', "%{$request->search}%")->get();
        }
        return view('state.index',compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('state.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'country_id' =>'required',
            'name' => 'required'
        ]);
        State::create($data);
        return redirect(route('state'))->with('message','State Added Successfully');
       
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
    public function edit(State $state)
    {
        $countries =Country::all();
        return view('state.edit',compact('state','countries'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'country_id' =>'required',
            'name' => 'required'
        ]);
        $states = State::find($id);
        $states->update($data);
        return redirect(route('state'))->with('message','State Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $states = State::find($request->dataid);
        $states->delete();
        return redirect(route('state'))->with('message','State Deleted Successfully');
    }
}
