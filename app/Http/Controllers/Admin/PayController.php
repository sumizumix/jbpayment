<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\paymodel;
use App\Models\Team;
use App\Models\Locationitem;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class PayController extends Controller
{
    //
    public function index()
    {
        $service = paymodel::all();

        return view('admin.auth.payment.index',compact('service'));
    }

    public function create()
    {
        return view('admin.auth.payment.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $service = new paymodel();
        $data = $request->only($service->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name'=>'required'
        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
        

        $service->fill($data)->save();
        return redirect()->route('admin.auth.payment.index')->with('success', 'paymodel added successfully!');
    }

    public function edit($id)
    {
        $service = paymodel::findOrFail($id);
        return view('admin.auth.payment.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $service = paymodel::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);
    
        // Update the product data
        $data = $request->only($service->getFillable());
        
        // If a new image file is uploaded, update the image
        
    
        // Save the updated product data
        $service->update($data);
    
        // Redirect back with success message
        return redirect()->route('admin.auth.payment.index')->with('success', 'paymodel Details  updated successfully!');
    }
    
    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        
        $service = paymodel::findOrFail($id);
        $service->delete();
        return Redirect()->back()->with('success', 'paymodel  deleted successfully!');
    }
}
