<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Subject = Subject::orderBy('updated_at', 'desc')->get();
        return view('subject.index',compact('Subject'));
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
        'code' => 'required|string|max:255|unique:subjects',
        'name' => 'required|string|max:255',
    ]);

    // Create a new Subject instance
    $subject = new Subject();
    $subject->code = $validatedData['code'];
    $subject->name = $validatedData['name'];
    $subject->created_by = auth()->user()->id;
    $subject->updated_by = auth()->user()->id;

    // Save the subject to the database
    $subject->save();

    // Redirect with success message
    return redirect()->route('subject.index')->with('success', 'Subject created successfully');
} catch (ValidationException $e) {
    $errors = $e->errors();

    if (isset($errors['code']) && $errors['code'][0] === 'The code has already been taken.') {
        // Custom error message for a specific validation rule
        $errorMessage = 'มีรหัสวิชานี้ในระบบแล้ว';
        return redirect()->back()->with('error', $errorMessage);
    }

    // Handle other validation errors
    return redirect()->back()->withErrors($errors)->withInput();
} catch (\Exception $e) {
    // Log the exception for debugging
    Log::error('An error occurred while saving the Subject: ' . $e->getMessage());

    // Redirect with a general error message
    return redirect()->back()->with('error', 'An error occurred while saving the Subject.');
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
                'code' => 'required|string|max:255|unique:subjects,code,' . $id,
                'name' => 'required|string|max:255',
            ]);

            // Find the subject by ID
            $subject = Subject::findOrFail($id);

            // Update the subject with the new data
            $subject->code = $validatedData['code'];
            $subject->name = $validatedData['name'];
            $subject->updated_by = auth()->user()->id;

            // Save the updated subject to the database
            $subject->save();

            // Redirect with success message
            return redirect()->route('subject.index')->with('success', 'Subject updated successfully');
        } catch (ValidationException $e) {
            $errors = $e->errors();

            if (isset($errors['code']) && $errors['code'][0] === 'The code has already been taken.') {
                // Custom error message for a specific validation rule
                $errorMessage = 'มีรหัสวิชานี้ในระบบแล้ว';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Handle other validation errors
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('An error occurred while updating the Subject: ' . $e->getMessage());

            // Redirect with a general error message
            return redirect()->back()->with('error', 'An error occurred while updating the Subject.');
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
