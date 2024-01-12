<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\StudentProfile;
use App\Models\TeacherProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $Room = Room::paginate(10);
        $Room = Room::orderBy('updated_at', 'desc')->get();

        return view('room.index',compact('Room'));


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
             $validatedData = $request->validate([
                 'name' => 'required|string|max:255|unique:rooms',
                 'detail' => 'required|string|max:255',
             ]);

             $room = new Room();
             $room->name = $validatedData['name'];
             $room->detail = $validatedData['detail'];
             $room->created_by = auth()->user()->id;
             $room->updated_by = auth()->user()->id;

             $room->save();

             return redirect()->route('room.index')->with('success', 'Room created successfully');
         } catch (ValidationException $e) {
             $errors = $e->errors();

             if (isset($errors['name']) && $errors['name'][0] === 'The name has already been taken.') {
                 $errorMessage = 'มีหมายเลขห้องนี้ในระบบแล้ว';
                 return redirect()->back()->with('error', $errorMessage);
             }

             // Handle other validation errors if needed
             return redirect()->back()->with('error', 'Validation error occurred.');
         } catch (\Exception $e) {
             // Handle other exceptions if needed
             return redirect()->back()->with('error', 'An error occurred while saving the room.');
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
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:rooms,name,' . $id,
                'detail' => 'required|string|max:255',
            ]);

            $room = Room::findOrFail($id);
            $room->name = $validatedData['name'];
            $room->detail = $validatedData['detail'];
            $room->updated_by = auth()->user()->id;

            $room->save();

            return redirect()->route('room.index')->with('success', 'Room updated successfully');
        } catch (ValidationException $e) {
            $errors = $e->errors();

            if (isset($errors['name']) && $errors['name'][0] === 'The name has already been taken.') {
                $errorMessage = 'มีหมายเลขห้องนี้ในระบบแล้ว';
                return redirect()->back()->with('error', $errorMessage);
            }

            // Handle other validation errors if needed
            return redirect()->back()->with('error', 'Validation error occurred.');
        } catch (\Exception $e) {
            // Handle other exceptions if needed
            return redirect()->back()->with('error', 'An error occurred while updating the room.');
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
