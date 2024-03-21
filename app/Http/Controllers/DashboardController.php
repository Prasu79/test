<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\State;
use App\Models\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $totalemployee = Employee::count();
        $totalcountry = Country::count();
        $totaldepartment = Department::count();
        $totalstate = State::count();
        $totalcity = Cities::count();
        // $totalvisits = View::sum('no_of_visits');
        // $date = \Carbon\Carbon::today()->subDays(30);
        // $visitdate = Visit::where('visit_date', '>=', $date)->pluck('visit_date');
        // $visits = Visit::where('visit_date', '>=', $date)->pluck('no_of_visits');
        // dd(json_encode($visitdate));
        return view('dashboard',compact('totalemployee','totalcity','totalstate','totaldepartment','totalcountry'));
    }
}
