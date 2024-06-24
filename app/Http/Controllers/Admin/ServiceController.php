<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Team;
use App\Models\Locationitem;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Course::all();

        return view('admin.auth.courses.index',compact('service'));
    }

    public function create()
    {
        return view('admin.auth.courses.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $service = new Course();
        $data = $request->only($service->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name'=>'required',
            'description'=>'required'

        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
        

        $service->fill($data)->save();
        return redirect()->route('admin.auth.courses.index')->with('success', 'Course added successfully!');
    }

    public function edit($id)
    {
        $service = Course::findOrFail($id);
        return view('admin.auth.courses.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $service = Course::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'description'=>'required'

        ]);
    
        // Update the product data
        $data = $request->only($service->getFillable());
        
        // If a new image file is uploaded, update the image
        
    
        // Save the updated product data
        $service->update($data);
    
        // Redirect back with success message
        return redirect()->route('admin.auth.courses.index')->with('success', 'Course Details  updated successfully!');
    }
    
    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        
        $service = Course::findOrFail($id);
        $service->delete();
        return Redirect()->back()->with('success', 'Course  deleted successfully!');
    }
}
