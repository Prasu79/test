<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\State;
use Faker\Core\File;
use Illuminate\Http\File as HttpFile;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File as TestingFile;
use Illuminate\Support\Facades\File as FacadesFile;

class EmployeeController extends Controller
{
    public function emp(){
        return view('employee');
    }
    public function empr(){
        return view('register');
    }



    public function index(Request $request){
        $employees = Employee::all();
        if($request->has('search')){
            $employees = Employee::where('first_name','like' ,"%{$request->search}%")->orWhere('country_id','like', "%{$request->search}%")->orWhere('department_id','like', "%{$request->search}%")->get();
        }
        return view('employee.index',compact('employees'));
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $states = State::all();
        $departments = Department::all();
        $cities = Cities::all();
        return view('employee.create',compact('countries','states','departments','cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'address'=>'required',
            'salary'=>'required',
            'phone'=>'required',
            'country_id'=>'required',
            'department_id' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'zip_code' => 'required',
            'date_hired' => 'required',
            'photopath' => 'required',
            'birth_date' => 'required'
            
        ]);
        if($request->file('photopath')){
            $photo = $request->file('photopath');
            $filename = $photo->getClientOriginalExtension();
            $photopath = time().'_'.$filename;
            $photo->move(public_path('/images/employee/'),$photopath);
            $data['photopath']= $photopath;

        }
        Employee::create($data);
        return redirect(route('employee'))->with('message','Employee Added Successfully');
    }
     /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }
       /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $countries = Country::all();
        $states = State::all();
        $departments = Department::all();
        $cities = Cities::all();
        return view('employee.edit',compact('countries','states','departments','cities','employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
            $data = $request->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'address'=>'required',
            'phone'=>'required',
            'salary'=>'required',
            'country_id'=>'required',
            'department_id' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'zip_code' => 'required',
            'date_hired' => 'required',
            'photopath' => 'required',
            'birth_date' => 'required'
            ]);
            $employees = Employee::find($id);
            $data['photopath']=$request->oldpath;
            if($request->file('photopath')){
                $photo = $request->file('photopath');
                $filename = $photo->getClientOriginalName();
                $photopath = time().'_'.$filename;
                $photo->move(public_path('/images/employee/'),$photopath);
                FacadesFile::delete(public_path('/images/employee/',$employees->photopath));
                $data['photopath']= $photopath; 
            }
            $employees->update($data);
            return redirect(route('employee'))->with('message','Employee updated Successfully');
            
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $employees = Employee::find($request->dataid);
        FacadesFile::delete(public_path('/images/employee/',$employees->photopath));
        $employees->delete();
        return redirect(route('employee'))->with('message','Employee Deleted Successfully');
    }

   

}
