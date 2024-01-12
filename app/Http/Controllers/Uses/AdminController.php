<?php

namespace App\Http\Controllers\Uses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accessRights;
use App\Models\User;
use App\Models\StudentProfile;
use App\Models\TeacherProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $userArray = User::all()->toArray();
        // $firstQuery = User::select('first_name', 'last_name', 'username');
        // $secondQuery = StudentProfile::select('first_name', 'last_name', 'student_code as code');
        // $thirdQuery = TeacherProfile::select('first_name', 'last_name', 'code');


        // $userArray = $firstQuery->union($secondQuery)->union($thirdQuery)->get()->toArray();
        // dd($userArray);


        // $Admin = DB::table('access_rights')
        // ->select('access_rights.code', 'status', 'updated_at', DB::raw("GROUP_CONCAT(name SEPARATOR ', ') as concatenated_names"))
        // ->leftJoin('student_profile', 'access_rights.code', '=', 'student_profile.student_code')
        // ->leftJoin('teacher_profile', 'access_rights.code', '=', 'teacher_profile.code')
        // ->groupBy('access_rights.code', 'status', 'updated_at')
        // ->orderBy('access_rights.code', 'asc')
        // ->get();

        // $Admin = DB::table('access_rights')
        // ->Join('student_profile', 'access_rights.user_id', '=', 'student_profile.user_id')
        // ->Join('teacher_profile', 'access_rights.user_id', '=', 'teacher_profile.user_id')
        // ->get();
        // $accessRights = DB::table('access_rights')
        // ->select('code', DB::raw("STRING_AGG(name, ', ') as concatenated_names"), DB::raw("MAX(CASE WHEN status THEN 'true' ELSE 'false' END) as status"), DB::raw("MAX(updated_at) as updated_at"))
        // ->groupBy('code')
        // ->orderBy('code', 'asc')
        // ->get();

        $accessRights = DB::table('access_rights')
        ->select('code')
        ->groupBy('code')
        ->pluck('code')
        ->toArray();


    $user = User::whereIn('username', $accessRights)
    ->where('role', 'admin')
    ->get();
    $teacherProfiles = TeacherProfile::whereIn('code', $accessRights)->get();
    $studentProfiles = StudentProfile::whereIn('student_code', $accessRights)->get();


    $combinedAllProfiles = $user->merge($teacherProfiles)->merge($studentProfiles);

    $combinedProfilesArray = $combinedAllProfiles->toArray();


        $userArray = User::all()->toArray();
        $firstQuery = User::select('first_name', 'last_name', 'username');
        $secondQuery = StudentProfile::select('first_name', 'last_name', 'student_code as code');
        $thirdQuery = TeacherProfile::select('first_name', 'last_name', 'code');


        $userArray = $firstQuery->union($secondQuery)->union($thirdQuery)->get()->toArray();








        // dd($combinedProfilesArray);


        // return view('user.admin.index', compact('accessRights','userArray'));
//

        return view('user.admin.index', compact('combinedProfilesArray' ,'userArray'));


// $accessRights now contains the result of the query

// $accessRights now contains the result of the query


    // $accessRights now contains the result of the query


    // $accessRights now contains the result of the query


        // $result now contains the result of the query





    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $accessRights = accessRights::where('code', $request->code)->get()->toArray();
        // dd($accessRights);

        $contentManagement = false;
        $timetableManagement = false;
        $prefixManagement = false;
        $facultyMajorManagement = false;
        $subjectManagement = false;
        $roomManagement = false;
        $groupchatManagement = false;
        $userManagement = false;
        $studentManagement = false;
        $professorManagement = false;
        $staffManagement = false;
        $adminManagement = false;
        $alumniManagement = false;
        $calendarActivityManagement = false;



        foreach ($accessRights as $accessRight) {
            if ($accessRight['name'] === 'content-management') {
                $contentManagement = true;
            }
            if ($accessRight['name'] === 'timetable-management') {
                $timetableManagement = true;
            }
            if ($accessRight['name'] === 'prefix-management') {
                $prefixManagement = true;
            }
            if ($accessRight['name'] === 'faculty-major-management') {
                $facultyMajorManagement = true;
            }
            if ($accessRight['name'] === 'subject-management') {
                $subjectManagement = true;
            }
            if ($accessRight['name'] === 'room-management') {
                $roomManagement = true;
            }
            if ($accessRight['name'] === 'groupchat-management') {
                $groupchatManagement = true;
            }
            if ($accessRight['name'] === 'user-management') {
                $userManagement = true;
            }
            if ($accessRight['name'] === 'student-management') {
                $studentManagement = true;
            }
            if ($accessRight['name'] === 'professor-management') {
                $professorManagement = true;
            }
            if ($accessRight['name'] === 'staff-management') {
                $staffManagement = true;
            }
            if ($accessRight['name'] === 'admin-management') {
                $adminManagement = true;
            }
            if ($accessRight['name'] === 'alumni-management') {
                $alumniManagement = true;
            }
            if ($accessRight['name'] === 'calendar-activity-management') {
                $calendarActivityManagement = true;
            }
        }

        $name = accessRights::where('code', $request->code)->get()->first();

        return view('user.admin.edit',compact('name',
        'contentManagement',
        'timetableManagement',
        'prefixManagement',
        'facultyMajorManagement',
        'subjectManagement',
        'roomManagement',
        'groupchatManagement',
        'userManagement',
        'studentManagement',
        'professorManagement',
        'staffManagement',
        'adminManagement',
        'alumniManagement',
        'calendarActivityManagement',
    ));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        // dd($request);
        $code = $request->input('code');
        $permissions = $request->input('name', []);

        if (in_array('student-management', $permissions) || in_array('professor-management', $permissions) || in_array('staff-management', $permissions) || in_array('alumni-management', $permissions) || in_array('admin-management', $permissions)) {
            // Add 'user-management' to the array
            $permissions[] = 'user-management';
        }
        $user = User::where('username', $code)->first();
        $id = $user->id;

        // Create an array to hold the data for each record
        $accessRightsData = [];


        // dd($permissions);

        // Populate the array with data for each record
        foreach ($permissions as $permission) {
            $accessRightsData[] = [
                'user_id' => $id,
                'code' => $code,
                'name' => $permission,
                'status' => true,
                'created_at' => now(),
                'created_by' => Auth::user()->id,
                'updated_at' => now()
            ];
        }

        // Insert the data into the database using the createMany method
        accessRights::insert($accessRightsData);

        return redirect()->back()->with('success', 'Permissions created successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd($id);
        $accessRights = accessRights::where('code', $id)->get();

        $contentManagement = false;
        $timetableManagement = false;
        $prefixManagement = false;
        $facultyMajorManagement = false;
        $subjectManagement = false;
        $roomManagement = false;
        $groupchatManagement = false;
        $userManagement = false;
        $studentManagement = false;
        $professorManagement = false;
        $staffManagement = false;
        $adminManagement = false;
        $alumniManagement = false;
        $calendarActivityManagement = false;



        foreach ($accessRights as $accessRight) {
            if ($accessRight->name === 'content-management') {
                $contentManagement = true;
            }
            if ($accessRight->name === 'timetable-management') {
                $timetableManagement = true;
            }
            if ($accessRight->name === 'prefix-management') {
                $prefixManagement = true;
            }
            if ($accessRight->name === 'faculty-major-management') {
                $facultyMajorManagement = true;
            }
            if ($accessRight->name === 'subject-management') {
                $subjectManagement = true;
            }
            if ($accessRight->name === 'room-management') {
                $roomManagement = true;
            }
            if ($accessRight->name === 'groupchat-management') {
                $groupchatManagement = true;
            }
            if ($accessRight->name === 'user-management') {
                $userManagement = true;
            }
            if ($accessRight->name === 'student-management') {
                $studentManagement = true;
            }
            if ($accessRight->name === 'professor-management') {
                $professorManagement = true;
            }
            if ($accessRight->name === 'staff-management') {
                $staffManagement = true;
            }
            if ($accessRight->name === 'admin-management') {
                $adminManagement = true;
            }
            if ($accessRight->name === 'alumni-management') {
                $alumniManagement = true;
            }
            if ($accessRight->name === 'calendar-activity-management') {
                $calendarActivityManagement = true;
            }
        }

        return view('user.admin.edit', compact(
            'accessRights',
            'contentManagement',
            'timetableManagement',
            'prefixManagement',
            'facultyMajorManagement',
            'subjectManagement',
            'roomManagement',
            'groupchatManagement',
            'userManagement',
            'studentManagement',
            'professorManagement',
            'staffManagement',
            'adminManagement',
            'alumniManagement',
            'calendarActivityManagement',
        ));

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
        //
    }
}
