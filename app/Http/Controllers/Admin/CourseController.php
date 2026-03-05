<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses=Course::orderBy('id','desc')->get();
        return view('admin.courses.index',compact('courses'));
    }
    public function create(){

        return view('admin.courses.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'course_name'=>'required',
            'description'=>'required',
            'duration'=>'required',
            'fee'=>'required',
            'training'=>'required',
            'course_structure'=>'required',
            'structure'=>'required',
            'module'=>'required',
            'module_details'=>'required',
            'module1'=>'required',
            'module1_details'=>'required',
            'module2'=>'required',
            'module2_details'=>'required',
           
        ]);
        $course=new Course();
        $course->name=$request->name;
        $course->course_name=$request->course_name;
        $course->description=$request->description;
        $course->duration=$request->duration;
        $course->fee=$request->fee;
        $course->training=$request->training;
        $course->course_structure=$request->course_structure;
        $course->structure=$request->structure;
        $course->module=$request->module;
        $course->module_details=$request->module_details;
        $course->module1=$request->module1;
        $course->module1_details=$request->module1_details;
        $course->module2=$request->module2;
        $course->module2_details=$request->module2_details;

        if ($request->hasFile('Profilepic')) {
            $imageName = time() . '.' . $request->Profilepic->extension();
            $request->Profilepic->move(public_path('images'), $imageName);
            $course->Profilepic = $imageName;
        }

        // dd($course);
        $course->save();

        return redirect()->route('courses')->with('success','Course Added Successfully');
    }

    public function edit($id){
        $courses=Course::findOrFail($id);
        return view('admin.courses.edit',compact('courses'));
    }

    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'course_name'=>'required',
            'description'=>'required',
            'duration'=>'required',
            'fee'=>'required',
            'training'=>'required',
            'course_structure'=>'required',
            'structure'=>'required',
            'module'=>'required',
            'module_details'=>'required',
            'module1'=>'required',
            'module1_details'=>'required',
            'module2'=>'required',
            'module2_details'=>'required',
           
        ]);
        $id=$request->id;
        $course=Course::findOrFail($id);
        $course->name=$request->name;
        $course->course_name=$request->course_name;
        $course->description=$request->description;
        $course->duration=$request->duration;
        $course->fee=$request->fee;
        $course->training=$request->training;
        $course->course_structure=$request->course_structure;
        $course->structure=$request->structure;
        $course->module=$request->module;
        $course->module_details=$request->module_details;
        $course->module1=$request->module1;
        $course->module1_details=$request->module1_details;
        $course->module2=$request->module2;
        $course->module2_details=$request->module2_details;

        if ($request->hasFile('Profilepic')) {
            $imageName = time() . '.' . $request->Profilepic->extension();
            $request->Profilepic->move(public_path('images'), $imageName);
            $course->Profilepic = $imageName;
        }

        // dd($course);
        $course->save();

        return redirect()->route('courses')->with('success','Course Updated Successfully');
    }

    public function delete($id)
    {
        $course = Course::find($id);
        if (!$course) {
            return redirect()->back()->with('error', 'Course not found.');
        }
        $course->delete();
        return redirect()->route('courses')->with('success', 'Course deleted successfully.');
    }
}
