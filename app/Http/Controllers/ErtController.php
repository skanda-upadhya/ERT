<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Ert;
use App\Models\Specialization;
use App\Models\Zone;
use Illuminate\Http\Request;

class ErtController extends Controller
{
    public function index()
 {
  $ert = Ert::latest()->paginate(5);
            return view('erts.index', compact('ert'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
 }   
 
 public function create()
{
    $specializations = Specialization::all();
    $zones = Zone::all();
    $employees = Employee::all();
    return view('erts.create', compact('specializations', 'zones','employees'));
}


 
 
  public function store(Request $request)
    {
        $request->validate([
            'zone' => 'required',
            'name' => 'required',
            'specialization' => 'required',
            'phone' => 'required',
            'department' => 'required',
        ]);
    
        // Check if specialization with the same name already exists
        $existingErt = Ert::where('ert', $request->ert)->first();
    
        if ($existingErt) {
            return redirect()->route('ert.create')->with('error', 'Specialization with this name already exists');
        }
    
        // If no existing specialization with the same name, create a new one
        Ert::create([
            'zone' => $request->zone,
            'name' => $request->name,
            'specialization' => $request->specialization,
            'phone' => $request->phone,
            'department' => $request->department,
           
        ]);
    
        return redirect()->route('ert.index')->with('success', 'Specialization details saved successfully');
    }
    

    public function show($id)
    {
        $ert = Ert::findOrFail($id);
     return view('erts.show', compact('ert'));
    }
 


    public function edit($id)
    {
        
            // Find the ERT by ID
            $ert = Ert::findOrFail($id);
            // $specializations = Specialization::all();
            $zones = Zone::all();
            return view('erts.create', compact('ert', 'zones'));
            // Fetch all zones
           
    }
    
        // Pass $zones to the view
        


        
//     } catch (\Exception $e) {
//         // Handle any exceptions that may occur during the process
//         // You might want to customize the error handling based on your requirements
//         return redirect()->route('specialization.index')->with('error', 'Error editing specialization');
//     }


public function update(Request $request, $id)
{
    try {
        // Find the specialization by ID
        $ert = Ert::findOrFail($id);

        // Check if the updated specialization name is the same as the existing one
        if ($request->ert !== $ert->ert) {
            // Check if specialization with the new name already exists
            $existingErt = Ert::where('ert', $request->ert)->first();

            if ($existingErt) {
                return redirect()->route('ert.edit', $id)->with('error', 'Specialization with this name already exists');
            }
        }

        // Update the specialization with the new data from the request
        $ert->update($request->all());

        if ($request->wantsJson()) {
            // If the request is an API request, return a JSON response
            return response()->json(['message' => 'Specialization updated successfully']);
        } else {
            // If the request is not an API request, redirect with a success message
            return redirect()->route('ert.index')->with('success', 'Specialization updated successfully');
        }

    } catch (\Exception $e) {
        // Handle any exceptions that may occur during the update
        if ($request->wantsJson()) {
            return response()->json(['error' => 'Error updating specialization'], 500);
        } else {
            // If the request is not an API request, redirect with an error message
            return redirect()->route('ert.index')->with('error', 'Error updating specialization');
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
            $ert = Ert::findOrFail($id);
    
            // Delete the specialization
            $ert->delete();
    
            if ($request->wantsJson()) {
                // If the request is an API request, return a JSON response
                return response()->json(['message' => 'Specialization deleted successfully']);
            } else {
                // If the request is not an API request, redirect with a success message
                return redirect()->route('ert.index')->with('success', 'Specialization deleted successfully');
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






  

