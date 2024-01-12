<?php

namespace App\Http\Controllers\Prefix;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserPrefix;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
// use Yajra\DataTables\Facades\DataTables;

class PrefixController extends Controller
{
    public function index()
    {
        $Prefix = UserPrefix::orderBy('updated_at', 'desc')->get();
        return view('prefix.index',compact('Prefix'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:user_prefix',
                'name_e' => 'required|string|max:255', // Add this line if name_e is required.
            ]);

            // Create a new Prefix instance
            $prefix = new UserPrefix();
            $prefix->name = $validatedData['name'];
            $prefix->name_e = $validatedData['name_e'];
            $prefix->status = true;
            $prefix->created_by = auth()->user()->id;
            $prefix->updated_by = auth()->user()->id;

            // Save the prefix to the database
            $prefix->save();

            // Redirect with success message
            return redirect()->route('prefix.index')->with('success', 'Prefix created successfully');
        } catch (ValidationException $e) {
            $errors = $e->errors();

            if (isset($errors['name']) && $errors['name'][0] === 'The name has already been taken.') {
                // Custom error message for a specific validation rule
                $errorMessage = 'มีคำนำหน้านี้ในระบบแล้ว';
                return redirect()->back()->with('error', $errorMessage)->withInput();
            }

            // Handle other validation errors
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('An error occurred while saving the Prefix: ' . $e->getMessage());

            // Redirect with a general error message
            return redirect()->back()->with('error', 'An error occurred while saving the Prefix.')->withInput();
        }
    }

    public function update(Request $request, $id)
{
    try {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:user_prefix,name,' . $id,
            'name_e' => 'required|string|max:255',
        ]);

        // Find the Prefix instance by ID
        $prefix = UserPrefix::findOrFail($id);

        // Update the attributes
        $prefix->name = $validatedData['name'];
        $prefix->name_e = $validatedData['name_e'];
        $prefix->updated_by = auth()->user()->id;

        // Save the updated prefix to the database
        $prefix->save();

        // Redirect with success message
        return redirect()->route('prefix.index')->with('success', 'Prefix updated successfully');
    } catch (ValidationException $e) {
        $errors = $e->errors();

        // Handle validation errors
        return redirect()->back()->withErrors($errors)->withInput();
    } catch (\Exception $e) {
        // Log the exception for debugging
        Log::error('An error occurred while updating the Prefix: ' . $e->getMessage());

        // Redirect with a general error message
        return redirect()->back()->with('error', 'An error occurred while updating the Prefix.')->withInput();
    }
}

public function destroy(string $id)
{
    return redirect()->back()->with('error', 'Can be deleted if data is still in use');

}

}
