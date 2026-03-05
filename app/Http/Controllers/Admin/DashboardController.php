<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Placement;
use App\Models\Instructor;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index(){
        $users=User::orderBy('id','desc')->count();
        $placements=Placement::orderBy('id','desc')->count();
        $courses=Course::orderBy('id','desc')->count();
        $instructors=Instructor::orderBy('id','desc')->count();
        return view('admin.dashboard',compact('users','placements','courses','instructors'));
    }
    public function users(){
        $users=User::orderBy('id','desc')->get();
        return view('admin.users.index',compact('users'));
    }
    public function create(){
        $courses = User::select('course_name')->get();
        // dd($courses);
        return view('admin.users.create',compact('courses'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'course_name'=>'required',
            'regt_number'=>'required'

        ]);

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->course_name=$request->course_name;
        $user->regt_number=$request->regt_number;
        // dd($user->course_name);
        $user->save();
        // session()->flash('User Add Successfully');
        return redirect()->route('admin.users')->with('success', 'User added successfully!');
    }

    public function edit($id){
        $users=User::findOrFail($id);
        // dd($users);
        $courses = User::select('course_name')->get();
        return view('admin.users.edit',compact('users','courses'));
    }

    public function update(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'course_name'=>'required',
            'regt_number'=>'required'

        ]);
        $id=$request->id;
      
        $users=User::findOrFail($id);
        // dd($users);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->course_name=$request->course_name;
        $users->regt_number=$request->regt_number;
        // dd($users);
        $users->update();
        return redirect()->route('admin.users')->with('success', 'User updated successfully!');
    }

    public function delete($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }

}