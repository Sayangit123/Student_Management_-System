<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class logincontroller extends Controller
{
    //
    public function index1(){
        return view('login');
    }

    public function create(){
      $row=DB::table('courses')->get();
      return view('create')->with('msg', $row);
  }
    
    public function login(Request $request){
        //  dd($request->all());
          $request->validate([
            'u1' => 'required|email',
            'pass1' => 'required'
          ],[
            'u1'=>'Email is required',
            'pass1' =>'Password is required',
          ]);
          $email = $request->u1;
          $password = $request->pass1;
          
          $isValid = Auth::attempt(['email' => $email, 'password' => $password]);
          
          if ($isValid) {
              $user = Auth::user();
              $regtNumber = $user->regt_number;
              $role = $user->role; // Assuming you have a 'role' column in users table
          
              if ($role === 'admin') {
                  // Admin-specific logic or redirect
                  return redirect()->route('admin.dashboard'); // or return view('admin.dashboard');
              } else {
                  // User-specific logic
                  $userWithInfo = DB::table('users')
                      ->join('courses', 'courses.regt_number', '=', 'users.regt_number')
                      ->where('users.regt_number', $regtNumber)
                      ->select(
                          'users.email',
                          'users.regt_number',
                          'users.name',
                          'users.course_name',
                          'courses.duration',
                          'courses.fee',
                          'courses.Profilepic'
                      )
                      ->first();
          
          return view('/welcome2')->with(['msg'=>$userWithInfo]);
          //dd($userWithInfo);
          }
        }
          else {
            return redirect('/login')->with('message',"login_error");
          }

         


    }
   public function welcome(){
       return view('welcome2');
   }
    public function logout(){
      $user = Auth::user();
      $role=$user->role ?? null;
      if($role==='admin'){
        Auth::logout();
        return redirect("/home")->with('message','logout_done');
      }else{
        Auth::logout();
        return redirect("/home")->with('message','logout_done');
      }
    
    }

    public function submit1(Request $request){
        // dd($request->all());
        $request->validate([
          't1'=>'required',
          't3'=>'required',
          't2' => 'required|email|unique:users,email',
          'p1'=>'required'
        ],[
          't1'=>'Name is required',
          't3'=>'Registration number is required',
          't2'=>'Email is required',
          'p1'=>'Password is required'
        ]);
        $random= Str::random(10);//for generating random string of 10 characters
        // dd($random);

          $data =[
               'name'  =>$request->t1,
               'regt_number'  =>$request->t3,
               'email' =>$request->t2,
              //  'course_name' =>$request->t4,
               'password'=> Hash::make($request->p1),
               'role'=> 'user',
               'remember_token'=>$random
             
          ] ;
         
          $valid = User::create($data);
          // dd($valid);
          $message = ($valid) ? "signup_success":"signup_error";
          return redirect('/signup')->with('message',$message);

          

    
    }
}
