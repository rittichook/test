<?php

namespace App\Http\Controllers\Calendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calendars;
use App\Models\CalendarUsers;
use App\Models\User;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $Activity = Calendars::whereIn('type', ['event', 'holiday'])
        ->orderBy('updated_at', 'desc')->get();

    return view('calendar.activity.index', compact('Activity'));
                }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */





     public function store(Request $request)
     {
         $activity = new Calendars();
         $activity->type = 'event';
         $activity->title = $request->title;
         $activity->description = $request->description;
         $activity->owner = auth()->user()->id;
         $activity->start_date = $request->start_date;
         $activity->end_date = $request->end_date;

         $activity->id = Str::uuid(); // You can use Str::uuid()->toString() to get the string representation of the UUID

         if ($activity->save()) {
             // Retrieve all users with not null 'id'
             $userData = User::whereNotNull('id')->get();

             // Extract user IDs from the collection
             $userArray = $userData->pluck('id')->toArray();

             // Iterate through each user in $userArray
             foreach ($userArray as $userId) {
                 // Create a new CalendarUsers entry
                 $calendarUser = new CalendarUsers();
                 $calendarUser->calendar_id = $activity->id;
                 $calendarUser->user_id = $userId;

                 // Save the CalendarUsers entry
                 if ($calendarUser->save()) {
                     // Successfully saved
                 } else {
                     // Handle the case where saving failed
                     // You might want to log an error or return an error response
                 }
             }
         } else {
             // Handle the case where saving the calendar entry failed
             // You might want to log an error or return an error response
         }
     }







    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect()->back()->with('error', 'Can be deleted if data is still in use');
    }
}
