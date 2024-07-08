<?php

namespace App\Http\Controllers;

use App\Models\agencie;
use App\Models\Employee;
use App\Models\VoyAgency;
use App\Models\VoyUser;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use PhpParser\Node\Stmt\Global_;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    public function Matchmaking($id){
        
        $currentDate = Carbon::now()->toDateString();

        $data =VoyAgency::whereIn('ref_voy_agence', function ($query) use($id) {
            $query->select('ref_voy_agence')
            ->from('voy_users as v')
            ->join('voy_agencies as a', function ($join) {
                $join->on('v.pays', '=', 'a.pays')
                    ->on('v.date', '=', 'a.date')
                    ->on('v.duree', '=', 'a.duree');
                    
    })
    // Add any additional conditions if needed 
    ->where('v.id_emp', '=', $id)
    ->distinct();
    })->get();
        
       
            return view('employee.employee_matchmaking', compact('data'));
    }

    public function TripDetail($id_voy){
        $data= VoyAgency::where('ref_voy_agence', $id_voy)->first();
        return view('employee.employee_trips_detail', compact('data'));
    }

    public function BookTrip($id_voy, $id){
        $info = Employee::where('id_emp',$id);
        $data= VoyAgency::where('ref_voy_agence', $id_voy)->first();

        $id = $data->ref_voy_agence;
        $agence = $data->findname->name;
        $country = $data->country->name ;
        $date = $data->date;
        $periode = $data->duree;
        $prog = $date->programme;
        $user_name = $info->name;
        $user_mail = $info->email;
        $user_phone = $info->phone;
        $text = $id ."\n". $agence."\n". $country."\n".$date."\n". $user_name."\n".$user_mail."\n".$user_phone."\n". $periode."\n"; // Customize this as needed
        $qrCode = QrCode::size(200)->generate($text);
        return view('employee.employee_trips_booked', compact('qrCode'));
    }
    
    public function Employeelogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
