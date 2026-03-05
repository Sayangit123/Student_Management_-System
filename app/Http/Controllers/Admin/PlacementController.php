<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Placement;

class PlacementController extends Controller
{
    public function index(){
        $placements=Placement::orderBy('id','desc')->get();
        return view('admin.placements.index',compact('placements'));
    }
    public function create(){
        return view('admin.placements.create');
    }

    public function store(Request $request){
        $request->validate([
            'student'=>'required',
            'company'=>'required',
            'date'=>'required',
            'time'=>'required',
            'mode'=>'required',
            'address'=>'required',
            // 'student_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // 'company_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ]);
        

        $placement = new Placement();
        $placement->student = $request->student;
        $placement->company = $request->company;
        $placement->date = $request->date;
        $placement->time = $request->time;
        $placement->mode = $request->mode;
        $placement->address = $request->address;
        if ($request->hasFile('student_pic')) {
            $imageName = time() . '.' . $request->student_pic->extension();
            $request->student_pic->move(public_path('images'), $imageName);
            $placement->student_pic = $imageName;
        }
        if ($request->hasFile('company_pic')) {
            $imageName1 = time() . '.' . $request->company_pic->extension();
            $request->company_pic->move(public_path('images'), $imageName1);
            $placement->company_pic = $imageName1;
        }
        
        $placement->save();

        return redirect()->route('placements')->with('success', 'Placement added successfully!');
    }

    public function edit($id){
        $placements=Placement::findOrFail($id);
        return view('admin.placements.edit',compact('placements'));
    }

    public function update(Request $request){
        $request->validate([
            'student'=>'required',
            'company'=>'required',
            'date'=>'required',
            'time'=>'required',
            'mode'=>'required',
            'address'=>'required',
            // 'student_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // 'company_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ]);
        
        $id=$request->id;
        $placement = Placement::findOrFail($id);
        $placement->student = $request->student;
        $placement->company = $request->company;
        $placement->date = $request->date;
        $placement->time = $request->time;
        $placement->mode = $request->mode;
        $placement->address = $request->address;
        if ($request->hasFile('student_pic')) {
            $imageName = time() . '.' . $request->student_pic->extension();
            $request->student_pic->move(public_path('images'), $imageName);
            $placement->student_pic = $imageName;
        }
        if ($request->hasFile('company_pic')) {
            $imageName1 = time() . '.' . $request->company_pic->extension();
            $request->company_pic->move(public_path('images'), $imageName1);
            $placement->company_pic = $imageName1;
        }
        // dd($placement);
        $placement->save();

        return redirect()->route('placements')->with('success', 'Placement updated successfully!');
    }
    public function delete($id)
    {
        $placement = Placement::find($id);
        if (!$placement) {
            return redirect()->back()->with('error', 'Placement not found.');
        }
        $placement->delete();
        return redirect()->route('placements')->with('success', 'Placement deleted successfully.');
    }
}
