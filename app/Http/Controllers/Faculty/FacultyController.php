<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Faculty = Faculty::orderBy('updated_at', 'desc')->get();


        return view('faculty.index',compact('Faculty'));
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
        'code' => 'required|string|max:255|unique:faculty',
        'name' => 'required|string|max:255',
        'name_e' => 'required|string|max:255',
    ]);

    // Create a new Subject instance
    $faculty = new Faculty();
    $faculty->code = $validatedData['code'];
    $faculty->name = $validatedData['name'];
    $faculty->name_e = $validatedData['name_e'];
    $faculty->status = true;
    $faculty->created_by = auth()->user()->id;
    $faculty->updated_by = auth()->user()->id;

    // Save the subject to the database
    $faculty->save();

    // Redirect with success message
    return redirect()->route('faculty.index')->with('success', 'Faculty created successfully');
} catch (ValidationException $e) {
    $errors = $e->errors();

    if (isset($errors['code']) && $errors['code'][0] === 'The code has already been taken.') {
        // Custom error message for a specific validation rule
        $errorMessage = 'มีรหัสคณะนี้ในระบบแล้ว';
        return redirect()->back()->with('error', $errorMessage);
    }

    // Handle other validation errors
    return redirect()->back()->withErrors($errors)->withInput();
} catch (\Exception $e) {
    // Log the exception for debugging
    Log::error('An error occurred while saving the Faculty: ' . $e->getMessage());

    // Redirect with a general error message
    return redirect()->back()->with('error', 'An error occurred while saving the Faculty.');
}

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            try {
                // Validate the incoming request
                $validatedData = $request->validate([
                    'code' => 'required|string|max:255|unique:faculty,code,' . $id,
                    'name' => 'required|string|max:255',
                    'name_e' => 'required|string|max:255',
                ]);

                // Find the faculty by ID
                $faculty = Faculty::findOrFail($id);

                // Update the faculty with the new data
                $faculty->code = $validatedData['code'];
                $faculty->name = $validatedData['name'];
                $faculty->name_e = $validatedData['name_e'];
                $faculty->updated_by = auth()->user()->id;

                // Save the updated faculty to the database
                $faculty->save();

                // Redirect with success message
                return redirect()->route('faculty.index')->with('success', 'Faculty updated successfully');
            } catch (ValidationException $e) {
                $errors = $e->errors();

                if (isset($errors['code']) && $errors['code'][0] === 'The code has already been taken.') {
                    // Custom error message for a specific validation rule
                    $errorMessage = 'มีรหัสคณะนี้ในระบบแล้ว';
                    return redirect()->back()->with('error', $errorMessage);
                }

                // Handle other validation errors
                return redirect()->back()->withErrors($errors)->withInput();
            } catch (\Exception $e) {
                // Log the exception for debugging
                Log::error('An error occurred while updating the Faculty: ' . $e->getMessage());

                // Redirect with a general error message
                return redirect()->back()->with('error', 'An error occurred while updating the Faculty.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect()->back()->with('error', 'Can be deleted if data is still in use');

    }
}
