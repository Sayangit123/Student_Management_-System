<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function index(){
        $instructors=Instructor::orderBy('id','desc')->get();
        return view('admin.instructors.index',compact('instructors'));
    }
    public function create(){
        return view('admin.instructors.create');
    }

    public function store(Request $request){
        $request->validate([
            'instructor'=>'required',
            'position'=>'required',
            'experience'=>'required',
            'course_taught'=>'required',
            // 'mode'=>'required',
            // 'address'=>'required',
            // 'student_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // 'company_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ]);
        

        $instructor = new Instructor();
        $instructor->name = $request->instructor;
        $instructor->position = $request->position;
        $instructor->experience = $request->experience;
        $instructor->course_taught = $request->course_taught;
        // $placement->mode = $request->mode;
        // $placement->address = $request->address;
        if ($request->hasFile('profilepic')) {
            $imageName = time() . '.' . $request->profilepic->extension();
            $request->profilepic->move(public_path('images'), $imageName);
            $instructor->profilepic = $imageName;
        }
        // if ($request->hasFile('company_pic')) {
        //     $imageName1 = time() . '.' . $request->company_pic->extension();
        //     $request->company_pic->move(public_path('images'), $imageName1);
        //     $placement->company_pic = $imageName1;
        // }
        
        $instructor->save();

        return redirect()->route('instructors')->with('success', 'Instructor added successfully!');
    }

    public function edit($id){
        $instructors=Instructor::findOrFail($id);
        return view('admin.instructors.edit',compact('instructors'));
    }

    public function update(Request $request){
        $request->validate([
            'instructor'=>'required',
            'position'=>'required',
            'experience'=>'required',
            'course_taught'=>'required',
            // 'mode'=>'required',
            // 'address'=>'required',
            // 'student_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // 'company_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ]);
        
        $id=$request->id;
        $instructor = Instructor::findOrFail($id);
        $instructor->name = $request->instructor;
        $instructor->position = $request->position;
        $instructor->experience = $request->experience;
        $instructor->course_taught = $request->course_taught;
        // $placement->mode = $request->mode;
        // $placement->address = $request->address;
        if ($request->hasFile('profilepic')) {
            $imageName = time() . '.' . $request->profilepic->extension();
            $request->profilepic->move(public_path('images'), $imageName);
            $instructor->profilepic = $imageName;
        }
        // if ($request->hasFile('company_pic')) {
        //     $imageName1 = time() . '.' . $request->company_pic->extension();
        //     $request->company_pic->move(public_path('images'), $imageName1);
        //     $placement->company_pic = $imageName1;
        // }
        // dd($placement);
        $instructor->save();

        return redirect()->route('instructors')->with('success', 'Instructor updated successfully!');
    }
    public function delete($id)
    {
        $instructor = Instructor::find($id);
        if (!$instructor) {
            return redirect()->back()->with('error', 'Instructor not found.');
        }
        $instructor->delete();
        return redirect()->route('instructors')->with('success', 'Instructor deleted successfully.');
    }
}