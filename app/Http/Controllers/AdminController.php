<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\agencie;
use App\Models\Employee;
use App\Models\entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;



class AdminController extends Controller
{
    public function AdminDashboard() {
    return view('admin.index');
        
    }

    //Agency section///////////////////////////////////////////
    public function AdminAgency() {   
        $AgencieData = agencie::all();
        return view('admin.agency.admin_show_agencie', compact('AgencieData'));

        }

    public function AdminAddAgency() {

        return view('admin.agency.admin_add_agencie');
            
        }

    public function AgencyStore(Request $request) {
         // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'phone'  => 'required|string|max:15',
                'email' => 'required|email|unique:agencies,email', // Unique email validation
                'username' => 'required|string|unique:agencies,username', // Unique username validation
                'password'  => 'required|confirmed',
                'password_confirmation'=>'required',
            ]);
               // Create a new USER instance and fill it with the validated data
               $user = User::where('username', $validatedData['username'])->first();
               if (!$user) {
                   $user = new User();
                   $user->username = $validatedData['username'];
                   $user->password = hash::make($validatedData['password']);
                   $user->role = 'agence';
                   $user->save();
               }
            // Create a new Agence instance and fill it with the validated data
            $agencie = new agencie();
            
            $agencie->name = $validatedData['name'];
            $agencie->username = $validatedData['username'];
            $agencie->email = $validatedData['email'];
            $agencie->phone = $request->phone;
            $agencie->address = $request->address;
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename= $agencie->name.date('Ymd').'.jpg';
                $file->move(public_path('upload/agencie_image'),$filename);
                $agencie['photo']=$filename;
            }
            // Save the agence to the database
            $agencie->save();
          
            
            //notification
            $notification = array(
                'message' => 'Agency Added Successfully',
                'alert-type'=> 'success'
    
            );
            return redirect()->back()->with($notification);     
        }

    public function AdminUpdateAgency($id_agence) {
        
        $data = agencie::find($id_agence);
        return view('admin.agency.admin_update_agencie',compact('data'));
        
        }
    public function AgencyUpdate(Request $request) {

        $data = agencie::find($request->id_agence);
        $data->name = $request->name;
        
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->status = $request->input('status');
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename= $data->name.date('Ymd').'.jpg';
            $file->move(public_path('upload/admin_image'),$filename);
            $data['photo']=$filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Agency Profile Update Successfully',
            'alert-type'=> 'success'

        );
        return redirect('/admin/Agency')->with($notification);
    }

    public function AdminDeleteAgency($username) {
        User::where('username', $username)->first()->delete();
       
        
        $notification = array(
            'message' => 'Agency Deleted Successfully',
            'alert-type'=> 'success'

        );
        return redirect()->back()->with($notification);
        
        }
    //Entreprise section///////////////////////////////////////////
    public function AdminEntreprise() {   
        $EntrepriseData = entreprise::all();
        return view('admin.entreprise.admin_show_entreprise', compact('EntrepriseData'));

        }

    public function AdminAddEntreprise() {

        return view('admin.entreprise.admin_add_entreprise');
            
        }

    public function EntrepriseStore(Request $request) {
         // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'phone'  => 'required|string|max:15',
                'domaine_id' => 'required|exists:domaines,id', // Ensure domaine_id exists in the domaines table
                'email' => 'required|email|unique:entreprises,email', // Unique email validation
                'username' => 'required|string|unique:entreprises,username', // Unique username validation
                'password'  => 'required|confirmed',
                'password_confirmation'=>'required',
            ]);
              // Create a new USER instance and fill it with the validated data
              $user = User::where('username', $validatedData['username'])->first();
              if (!$user) {
                  $user = new User();
                  $user->username = $validatedData['username'];
                  $user->password = hash::make($validatedData['password']);
                  $user->role = 'entreprise';
                  $user->save();
              }
            // Create a new Entreprise instance and fill it with the validated data
            $entreprise = new Entreprise();
            
            $entreprise->name = $validatedData['name'];
            $entreprise->username = $validatedData['username'];
            $entreprise->email = $validatedData['email'];
            $entreprise->phone = $request->phone;
            $entreprise->address = $request->address;
            $entreprise->id_dom = $validatedData['domaine_id'];
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename= $entreprise->name.date('Ymd').'.jpg';
                $file->move(public_path('upload/Entreprise_image'),$filename);
                $entreprise['photo']=$filename;
            }
            // Save the entreprise to the database
            $entreprise->save();
           
            
            //notification
            $notification = array(
                'message' => 'Entreprise Added Successfully',
                'alert-type'=> 'success'
    
            );
            return redirect()->back()->with($notification);     
        }
        public function AdminUpdateEntreprise($id_ent) {
        
            $data = entreprise::find($id_ent);
            return view('admin.entreprise.admin_update_entreprise',compact('data'));
            
            }
        public function EntrepriseUpdate(Request $request) {
    
            
            $data = entreprise::find($request->id_ent);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->status = $request->input('status');
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename= $data->name.date('Ymd').'.jpg';
                $file->move(public_path('upload/Entreprise_image'),$filename);
                $data['photo']=$filename;
            }
            $data->save();
            $notification = array(
                'message' => 'Entreprise Profile Update Successfully',
                'alert-type'=> 'success'
    
            );
            return redirect('/admin/Entreprise')->with($notification);
        }

        public function AdminDeleteEntreprise($username) {
            User::where('username', $username)->first()->delete();
           
            
            $notification = array(
                'message' => 'Agency Deleted Successfully',
                'alert-type'=> 'success'
    
            );
            return redirect()->back()->with($notification);
            
            }
    //Employee section///////////////////////////////////////////
    public function AdminEmployee() {   
        $EmployeeData = Employee::all();
        return view('admin.employee.admin_show_employee', compact('EmployeeData'));

        }

    public function AdminAddEmployee() {

        return view('admin.employee.admin_add_employee');
            
        }

    public function EmployeeStore(Request $request) {
         // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'phone'  => 'required|string|max:15',
                'entreprise_id' => 'required|exists:entreprises,id_ent',
                'email' => 'required|email|unique:employees,email', // Unique email validation
                'username' => 'required|string|unique:employees,username', // Unique username validation
                'password'  => 'required|confirmed',
                'password_confirmation'=>'required',
            ]);
              // Create a new USER instance and fill it with the validated data
              $user = User::where('username', $validatedData['username'])->first();
              if (!$user) {
                  $user = new User();
                  $user->username = $validatedData['username'];
                  $user->password = hash::make($validatedData['password']);
                  $user->role = 'employee';
                  $user->save();
              }
            // Create a new Agence instance and fill it with the validated data
            $employee = new employee();
            
            $employee->name = $validatedData['name'];
            $employee->username = $validatedData['username'];
            $employee->email = $validatedData['email'];
            $employee->phone = $request->phone;
            $employee->address = $request->address;
            $employee->id_ent = $validatedData['entreprise_id'];
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename= $employee->name.date('Ymd').'.jpg';
                $file->move(public_path('upload/employee_image'),$filename);
                $employee['photo']=$filename;
            }
            // Save the agence to the database
            $employee->save();
           
            
            //notification
            $notification = array(
                'message' => 'Employee Added Successfully',
                'alert-type'=> 'success'
    
            );
            return redirect()->back()->with($notification);     
        }
        public function AdminUpdateEmployee($id_emp) {
        
            $data = Employee::find($id_emp);
            return view('admin.employee.admin_update_employee',compact('data'));
            
            }
        public function EmployeeUpdate(Request $request) {
    
            
            $data = Employee::find($request->id_emp);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->status = $request->input('status');
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename= $data->name.date('Ymd').'.jpg';
                $file->move(public_path('upload/employee_image'),$filename);
                $data['photo']=$filename;
            }
            $data->save();
            $notification = array(
                'message' => 'Employee Profile Update Successfully',
                'alert-type'=> 'success'
    
            );
            return redirect('/admin/Employee')->with($notification);
        }

        public function AdminDeleteEmployee($username) {
            User::where('username', $username)->first()->delete();
           
            
            $notification = array(
                'message' => 'Agency Deleted Successfully',
                'alert-type'=> 'success'
    
            );
            return redirect()->back()->with($notification);
            
            }
    //Admin section
    public function Adminlogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


   

    public function Adminprofile()
    {
        $username= auth::user()->username;
        $profileData = Admin::findByUsername($username);
        return view('admin.admin_profile', compact('profileData'));
    }

    public function Adminprofileupdate(Request $request)
    {
        $username= auth::user()->username;
        $data = Admin::findByUsername($username);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename= $data->name.date('Ymd').'.jpg';
            $file->move(public_path('upload/admin_image'),$filename);
            $data['photo']=$filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Admin Profile Update Successfully',
            'alert-type'=> 'success'

        );
        return redirect()->back()->with($notification);
    }

    public function AdminPassword()
    {
        $id= auth::user()->id;
        $profileData = User::find($id); 
        return view('admin.admin_change_password',compact('profileData'));
    }

    public function AdminChangePassword(Request $request)
    {
        
        $id= auth::user()->id;
        $data = User::find($id);
        
        $request->validate(
        [
            'current_password' => 'required',
            'password'  => 'required|confirmed'
        ]
        );
        if (!Hash::check($request->current_password, auth::user()->password)) {
              $notification = array(
                'message' => 'Current Password Does Not Match!!',
                'alert-type'=> 'error');
                return redirect()->back()->with($notification);
        }
       //find ID then update his password with the password coming from request
            user::whereId(auth()->user()->id)->update([
                'password'=>hash::make($request->password)
            ]);

            // this works too but i wanted to try the previous one
            // $data->password = hash::make($request->password);
            // $data->save();
        $notification = array(
            'message' => 'Password Update Successfully',
            'alert-type'=> 'success'
        );
        return redirect()->back()->with($notification);

    }

}



