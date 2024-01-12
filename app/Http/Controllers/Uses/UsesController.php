<?php

namespace App\Http\Controllers\Uses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prefix;
use App\Models\Department;
use App\Models\Faculity;
use App\Models\StudentProfile;
use Yajra\DataTables\Facades\Datatables;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Imports\UsersImport;
use App\Models\Excemple;
use App\Models\Members;
use App\Models\accessRights;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use Illuminate\Support\Facades\Http;
// Assuming you have a user ID (e.g., $userId) that you want to pass as the parameter when generating the URL for the "destroy" action

class UsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $test = accessRights::all();
        // dd($test);

//                 //                 $count = count($datass);
//                 // dd($count);

// // Retrieve records where the 'student_code' column matches the values in $data
// $matchingRecords = StudentProfile::whereIn('student_code', $datass)->get();

// // You can also convert the matching records to an array
// $update = $matchingRecords->toArray();

// // Assuming you have retrieved records in $update
// foreach ($update as $record) {
//     $studentCode = $record['student_code'];
//     $avatarUrl = "https://laravel-cloud-image-c808f922cb68.herokuapp.com/images/profile-stc/$studentCode.jpg";

//     // Update the "avatar" column with the new URL
//     StudentProfile::where('student_code', $studentCode)->update(['avatar' => $avatarUrl]);
// }
//         $start = ['2023-08-08', '2023-09-08'];
//         $end = ['2023-12-03', '2023-12-03'];
//         $text='เศรษฐศาสตร์';



// // Define the start and end dates
//         $start_date = Carbon::parse($start);
//         $end_date = Carbon::parse($end);

// // Initialize an array to store the scheduled dates
// $scheduled_dates = [];

// // Loop through the date range and filter for Wednesdays
// while ($start_date->lte($end_date)) {
//     if ($start_date->dayOfWeek === Carbon::TUESDAY) {
//         // Add the scheduled time range (08:30 - 11:30) to the current Wednesday
//         $start_time = Carbon::parse($start_date->format('Y-m-d').' 08:30');
//         $end_time = Carbon::parse($start_date->format('Y-m-d').' 11:30');


//         // Add this scheduled date and time to the array
//         $scheduled_dates[] = [
//             'date' => $start_date->format('Y-m-d'),
//             'start_time' => $start_time->format('H:i'),
//             'end_time' => $end_time->format('H:i'),
//         ];
//     }

//     // Move to the next day
//     $start_date->addDay();
// }

// // Output the scheduled dates
// foreach ($scheduled_dates as $scheduled_date) {
//     echo  "{$text},Date: {$scheduled_date['date']}, Start Time: {$scheduled_date['start_time']}, End Time: {$scheduled_date['end_time']}<br>";
// }



        //     // Replace these with your actual values
        // // Replace these with your actual values
        // $host = "a61.chat.agora.io";
        // $orgName = "61985712";
        // $appName = "1150498";
        // $token = "007eJxTYLiyep2cyFzFmdJe+lNji2zutbIcVvnEMvmZUu1swxnNz6MVGIyMDSwtzCwSjY0t0kySjVOTLBKTjEyTjS0MjI0SUwwMw9s/pjQEMjIomtowMTKwMjAyMDGA+AwMABCDG3k="; // Replace with your actual authentication token

        // // Construct the URL
        // $url = "https://{$host}/{$orgName}/{$appName}/chatgroups";

        // // Make a GET request with the Authorization header
        // $response = Http::withHeaders([
        //     'Authorization' => 'Bearer ' . $token,
        // ])->get($url);

        // // Check the response status code and handle errors as needed
        // if ($response->status() === 200) {
        //     // The request was successful, and you can parse the response content (JSON, XML, etc.)
        //     $chatgroupsData = $response->json(); // Assuming the response is in JSON format
        //      dd(response()->json($chatgroupsData['data']));
        // } else {
        //     // Handle the error (e.g., return an error response or log the error)
        //     return response()->json(['error' => 'Failed to fetch chatgroups'], $response->status());
        // }


        // $usersWithNullEmail = StudentProfile::whereNull('student_profile.email')
        // ->get();

        // Define an array to map student codes to email addresses
// $studentEmailMapping = [
//     '37101001' => 'pornphisudm@siamtechno.ac.th',
//     '38123003' => 'songkranp@siamtechno.ac.th',
//     '40116001' => 'jirawatg@siamtechno.ac.th',
// ];

// foreach ($studentEmailMapping as $studentCode => $email) {
//     // Find and update the email address for each student with the specified student code
//     $studentToUpdate = StudentProfile::where('student_code', $studentCode)
//         ->whereNull('email')
//         ->first();

//     if ($studentToUpdate) {
//         // Update the email address
//         $studentToUpdate->update(['email' => $email]);
//     }
// }




        // $emailstudent = User::Join('student_profile', 'users.id', '=', 'student_profile.user_id')
        // ->whereNull('student_profile.email')
        // ->where('faculty_id', '!=', '8d5820bf-047e-4e73-903b-e27c49ea8aea')
        // ->count();
        // dd($emailstudent);
        // Retrieve users meeting the specified criteria

            // $usersWithNullEmail = User::join('student_profile', 'users.id', '=', 'student_profile.user_id')
            // ->whereNull('student_profile.email')
            // ->where('faculty_id', '!=', '8d5820bf-047e-4e73-903b-e27c49ea8aea')
            // ->get();

            // // Loop through each user and update their email in the student_profile table
            // foreach ($usersWithNullEmail as $student_profile) {
            // $studentCode = $student_profile->student_code;
            // $newEmail = $studentCode . "@siamtechno.ac.th";

            // // Update the email in the student_profile table
            // $student_profile->update(['email' => $newEmail]);
            // }

            // Retrieve users meeting the specified criteria
// $usersWithNullEmail = StudentProfile::whereNull('student_profile.email')
// ->where('faculty_id', '!=', '8d5820bf-047e-4e73-903b-e27c49ea8aea')
// ->get();
// //
// // Check if any users met the criteria and update their emails
// if ($usersWithNullEmail->count() > 0) {
// foreach ($usersWithNullEmail as $student_profile) {
//     $studentCode = $student_profile->student_code;
//     $newEmail = $studentCode . "@siamtechno.ac.th";

//     // Update the email in the student_profile table
//     $student_profile->update(['email' => $newEmail]);
// }

// // Show a success message
// $message = 'Email addresses in the student_profile table updated successfully.';
// } else {
// // No users met the criteria, so show a different message if needed
// $message = 'No users in the student_profile table met the criteria for email updates.';
// }

// // Redirect back to the previous page or wherever you want with the message
// dd($message);


        $exampleModel = new Excemple();

        // Call the fetchDataFromAPI method
        $dataFromAPI = $exampleModel->fetchDataFromAPI();
        // dd($dataFromAPI);





        // $rr = User::all();
        // dd($)

    //     $data = User::leftJoin('student_profile', 'users.id', '=', 'student_profile.user_id')
    //     ->leftJoin('faculty', 'student_profile.faculty_id', '=', 'faculty.id')
    //     ->leftJoin('faculty_branch', 'student_profile.branch_id', '=', 'faculty_branch.id')
    //     ->leftJoin('user_prefix', 'student_profile.user_prefix_id', '=', 'user_prefix.id')
    // ->select('users.*','student_profile.*','faculty.name as faculty_name', 'faculty_branch.name as faculty_branch_name','user_prefix.name as user_prefix_name','user_prefix.name_e as user_prefix_name_e')
    // ->get();
    // dd($data);
        // $resource = $request->resource;
        $rows = User::leftJoin('student_profile', 'users.id', '=', 'student_profile.user_id')
        ->leftJoin('faculty', 'student_profile.faculty_id', '=', 'faculty.id')
        ->leftJoin('faculty_branch', 'student_profile.branch_id', '=', 'faculty_branch.id')
        ->leftJoin('user_prefix', 'student_profile.user_prefix_id', '=', 'user_prefix.id')
    ->select('users.*','student_profile.*','faculty.name as faculty_name', 'faculty_branch.name as faculty_branch_name','user_prefix.name as user_prefix_name')
    ->paginate(10);
     return view('user.list-user',compact('rows','dataFromAPI'));
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
        {
            // dd($request);
            // Validate the incoming request data as needed

            // Extract the data you want to send to the model
            $userData = [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'prefix' => $request->input('prefix'),
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'firstNameE' => $request->input('firstNameE'),
                'lastNameE' => $request->input('lastNameE'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'birthday' => $request->input('birthday'),
                'avatar' => $request->input('avatar'),
                'faculty' => $request->input('faculty'),
                'branch' => $request->input('branch'),
                'role' => $request->input('role'),
                'status' => $request->input('status'),


                // Add more data here as needed
            ];
            // dd($userData);

            // Create an instance of the Members model
            $membersModel = new Members();

            // Call a method on the model and pass the data
            $result = $membersModel->processUserData($userData);

            // Handle the result returned by the model
            if ($result) {
                // Model processing was successful
                return response()->json($result);
            } else {
                // Model processing failed
    return response()->json($result);
            }
        }

            // dd($request);
        // Creating a new User
        // $user = new ApiUsers();
        // $user->username = $request->username;
        // $user->password = $request->password;
        // $user->prefix = $request->prefix;
        // $user->first_name = $request->first_name;
        // $user->last_name = $request->last_name;
        // $user->firstNameE = $request->firstNameE;
        // $user->lastNameE = $request->lastNameE;
        // $user->email = $request->email;
        // $user->phone = $request->phone;
        // $user->birthday = $request->birthday;
        // $user->avatar = $request->avatar;
        // $user->faculty = $request->faculty;
        // $user->branch = $request->branch;
        // $user->role = $request->role;
        // $user->status = $request->status;
        // $user->save();



        // // Creating a new StudentProfile associated with the created User
        // $studentProfile = new StudentProfile();
        // $studentProfile->user_id =  $user->id;
        // $studentProfile->student_code = $request->student_code;
        // $studentProfile->user_prefix_id = '1034d752-8f95-43f4-9d0c-6bce19fc11be';
        // $studentProfile->first_name = $request->first_name;
        // $studentProfile->last_name = $request->last_name;
        // $studentProfile->first_name_e = $request->first_name_e;
        // $studentProfile->last_name_e = $request->last_name_e;
        // $studentProfile->email = $request->email;
        // $studentProfile->phone = $request->tel;
        // $studentProfile->faculty_id = '60861577-9dda-4893-bb78-8176f79a7051';
        // $studentProfile->branch_id = '9d9b7ee2-0e93-45de-a841-fd8473aa1938';
        // $studentProfile->birthday = '2544-09-15 02:50:45';
        // $studentProfile->avatar = '';
        // $studentProfile->created_by = $request->id;
        // $studentProfile->save();

        // return redirect()->back()->with('success', 'User created successfully!');
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
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User not found.');
        }

        // Update user data
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->tel = $request->tel;

        $user->save();

        // Find the associated student profile using the user_id column
        $studentProfile = StudentProfile::where('user_id', $id)->first();

        // Check if the student profile exists
        if ($studentProfile) {
            // Update student profile data
            $studentProfile->student_code = $request->student_code;
            $studentProfile->first_name = $request->first_name;
            $studentProfile->last_name = $request->last_name;
            $studentProfile->first_name_e = $request->first_name_e;
            $studentProfile->last_name_e = $request->last_name_e;
            $studentProfile->email = $request->email;
            $studentProfile->phone = $request->tel;
            // Add more fields you want to update in the StudentProfile model

            $studentProfile->save();
        }

        return redirect()->back()->with('success', 'User and associated profile updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the user by ID
        $user = User::find($id);

        // Check if the user was found
        if (!$user) {
            // If the user with the given ID doesn't exist, you may handle the error accordingly (e.g., show an error page or redirect with an error message).
            return redirect()->route('user.index')->with('error', 'User not found.');
        }

        // Find the associated student profile using the user_id column
        $studentProfile = StudentProfile::where('user_id', $id)->first();

        // Check if the student profile exists
        if ($studentProfile) {
            // Delete the student profile
            $studentProfile->delete();
        }

        // Delete the user
        $user->delete();

        // Redirect to the index page with a success message
        return redirect()->route('user.index')->with('success', 'User and associated profile deleted successfully.');
    }


}



