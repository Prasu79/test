<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index( Request $request){
        $countries = Country::all();
        if($request->has('search')){
            $countries = Country::where('name','like' ,"%{$request->search}%")->orWhere('country_code','like', "%{$request->search}%")->get();
        }
        return view('countries.index',compact('countries'));
       }
    
    
       public function create(){
        return view('countries.create');
       }
    
    
       public function store(Request $request){
            $data = $request->validate([
                 'name' => 'required',
                'country_code' => 'required|numeric'
            ]);
            Country::create($data);
            return redirect('country')->with('message','Country Added Successfully');
       }
    
       public function show(Country $country)
        {
            //
        }
    
       public function edit(Country $country){
            return view('countries.edit',compact('country'));
    
       }
    
      
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id)
        {
            $data = $request->validate([
                'name'=>'required',
                'country_code'=>'required|numeric'
            ]);
            $countries = Country::find($id);
            $countries->update($data);
            return redirect(route('country'))->with('message','Country Updated Successfully');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function delete(Request $request){
            $countries = Country::find($request->dataid);
            $countries->delete();
            return redirect(route('country'))->with('message','Country Deleted Successfully');
        }
}
