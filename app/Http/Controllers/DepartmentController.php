<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $departments = Department::all();
        if($request->has('search')){
            $departments= Department::where('name','like' ,"%{$request->search}%")->get();
        }
        return view('department.index' , compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        Department::create($data); 
        return redirect('department')->with('message','Department Added Successfully');

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
    public function edit(Department $department)
    {
        return view('department.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data = $request->validate([
            'name'=>'required'
        ]);
        $departments = Department::find($id);
        $departments->update($data);
        return redirect(route('department'))->with('message','Department Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $departments = Department::find($request->dataid);
        $departments->delete();
        return redirect(route('department'))->with('message','Department Deleted Successfully');
    }
}
