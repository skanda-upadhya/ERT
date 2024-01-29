<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
  
        public function index()
        {
            $zones = Zone::latest()->paginate(5);
            return view('zones.index', compact('zones'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        
    
    public function create()
    {
        $department=Department::all();
        return view('zones.create')->with('Department',$department);
    }
    public function store(Request $request)
    {
        $request->validate([
            'zone' => 'required',
            'details' => 'required',
            'name' => 'required',
        ]);
    
        // Check if specialization with the same name already exists
        $existingZone = Zone::where('zone', $request->zone)->first();
    
        if ($existingZone) {
            return redirect()->route('zones.create')->with('error', 'Specialization with this name already exists');
        }
    
        // If no existing specialization with the same name, create a new one
        Zone::create([
            'zone' => $request->zone,
            'details' => $request->details,
            'name' => $request->name,
        ]);
    
        return redirect()->route('zones.index')->with('success', 'Specialization details saved successfully');
    }
    

    public function show($id)
    {
        $zone = Zone::findOrFail($id);
        $department = Department::all();
     return view('zones.show', compact('zone','department'));
    }
 


    public function edit($id)
    {
        $zone = Zone::findOrFail($id);
        $department = Department::all(); // Assuming Department is your model for departments
        return view('zones.edit', compact('zone', 'department'));
    }
    
        
//     } catch (\Exception $e) {
//         // Handle any exceptions that may occur during the process
//         // You might want to customize the error handling based on your requirements
//         return redirect()->route('specialization.index')->with('error', 'Error editing specialization');
//     }


public function update(Request $request, $id)
{
    try {
        // Find the specialization by ID
        $zone = Zone::findOrFail($id);

        // Check if the updated specialization name is the same as the existing one
        if ($request->zone !== $zone->zone) {
            // Check if specialization with the new name already exists
            $existingZone = Zone::where('zone', $request->zone)->first();

            if ($existingZone) {
                return redirect()->route('zones.edit', $id)->with('error', 'Specialization with this name already exists');
            }
        }

        // Update the specialization with the new data from the request
        $zone->update($request->all());

        if ($request->wantsJson()) {
            // If the request is an API request, return a JSON response
            return response()->json(['message' => 'Specialization updated successfully']);
        } else {
            // If the request is not an API request, redirect with a success message
            return redirect()->route('zones.index')->with('success', 'Specialization updated successfully');
        }

    } catch (\Exception $e) {
        // Handle any exceptions that may occur during the update
        if ($request->wantsJson()) {
            return response()->json(['error' => 'Error updating specialization'], 500);
        } else {
            // If the request is not an API request, redirect with an error message
            return redirect()->route('zones.index')->with('error', 'Error updating specialization');
        }
    }
}


//     } catch (\Exception $e) {
//         // Handle any exceptions that may occur during the update
//         if ($request->wantsJson()) {
//             return response()->json(['error' => 'Error updating specialization'], 500);
//         } else {
//             // If the request is not an API request, redirect with an error message
//             return redirect()->route('specialization.index')->with('error', 'Error updating specialization');
//         }
//     }
// }        skanda Upadhya G is boy .thenee fnvk ddwdn w
    
    
    
    // public function destroy(Specialization $specialization)
    // {
    //     $specialization->delete();
    //     return redirect()->route('specialization.index')
    //      ->with('success','departments deleted successfully');
    // }
    public function destroy(Request $request, $id)
    {
        try {
            // Find the specialization by ID
            $zone = Zone::findOrFail($id);
    
            // Delete the specialization
            $zone->delete();
          
    
            if ($request->wantsJson()) {
                // If the request is an API request, return a JSON response
                return response()->json(['message' => 'Specialization deleted successfully']);
            } else {
                // If the request is not an API request, redirect with a success message
                return redirect()->route('zones.index')->with('success', 'Specialization deleted successfully');
            }
    
        } catch (\Exception $e) {
            // Handle any exceptions that may occur during the deletion
            if ($request->wantsJson()) {
                return response()->json(['error' => 'Error deleting specialization'], 500);
            } else {
                // If the request is not an API request, redirect with an error message
                return redirect()->route('zones.index')->with('error', 'Error deleting specialization');
            }
        }
    }

}






  

