<?php

namespace App\Http\Controllers;

use App\Models\agencie;
use App\Models\VoyAgency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AgencyController extends Controller
{
    public function AgencyDashboard() {
        return view('agency.agency_index');
            
        }

    public function Agencecalendar() {
        return view('agency.agency_calendar');
            
    }

    public function Agenceplan() {
        return view('agency.agency_plan');
            
    }

    public function AgenceTrips($id) {
        $data= VoyAgency::where('id_agence', $id)->get();
        return view('agency.agency_trips',compact('data'));
            
    }
    
    public function StorePlan(Request $request) {
        $newvoy= new VoyAgency();
        $newvoy->pays = $request->country;
        $newvoy->programme = $request->programme;
        $newvoy->date = $request->date;
        $newvoy->duree = $request->duree;
        $newvoy->id_agence = $request->id_agence;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename= $newvoy->pays.'_'. $newvoy->id_agence.'_'.date('Ymd').'.jpg';
            $file->move(public_path('upload/agencie_image/Trips_image'),$filename);
            $newvoy['image']=$filename;
        }
        $newvoy->save();
        
        return redirect()->back(); 
        
            
    }
    
    public function Agencelogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
