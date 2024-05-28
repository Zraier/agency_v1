<?php

namespace App\Http\Controllers;

use App\Models\agencie;
use App\Models\VoyAgency;
use App\Models\VoyUser;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

use function Laravel\Prompts\alert;

class EmployeeController extends Controller
{
    public function EmployeeDashboard() {
        return view('employee.employee_index');
            
        }

    public function Employeecalendar() {
        return view('employee.employee_calendar');
            
    }

    public function Employeeplan() {
        return view('employee.employee_plan');
            
    }

    public function EmployeeTrips($id) {
        $data= VoyUser::where('id_emp', $id)->get();
        return view('employee.employee_trips',compact('data'));
            
    }

    public function StorePlanEmployee(Request $request) {
        $newvoy= new VoyUser();
        $newvoy->pays = $request->country;
        $newvoy->programme = $request->programme;
        $newvoy->date = $request->date;
        $newvoy->duree = $request->duree;
        $newvoy->id_emp = $request->id_emp;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename= $newvoy->pays.'_'. $newvoy->id_emp.'_'.date('Ymd').'.jpg';
            $file->move(public_path('upload/employee_image/Trips_image'),$filename);
            $newvoy['image']=$filename;
        }
        $newvoy->save();
        Alert::success('Trip planed successfully');
        return redirect()->back();     
    }

    public function Matchmaking(){
        
        $currentDate = Carbon::now()->toDateString();

        $data =VoyAgency::whereIn('ref_voy_agence', function ($query) {
            $query->select('ref_voy_agence')
            ->from('voy_users as v')
            ->join('voy_agencies as a', function ($join) {
                $join->on('v.pays', '=', 'a.pays')
                    ->on('v.date', '=', 'a.date')
                    ->on('v.duree', '=', 'a.duree');
    })
    // Add any additional conditions if needed
    ->distinct();// To ensure unique values
    })->get();
        
       
            return view('employee.employee_matchmaking', compact('data'));
    }
    
    public function Employeelogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
