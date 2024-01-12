<?php

namespace App\Http\Controllers\Uses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = User::leftJoin('student_profile', 'users.id', '=', 'student_profile.user_id')
        ->where('users.role', '=', 'student')
        ->leftJoin('faculty', 'student_profile.faculty_id', '=', 'faculty.id')
        ->leftJoin('faculty_branch', 'student_profile.branch_id', '=', 'faculty_branch.id')
        ->leftJoin('user_prefix', 'student_profile.user_prefix_id', '=', 'user_prefix.id')
        ->select('users.*', 'student_profile.*', 'faculty.name as faculty_name', 'faculty_branch.name as faculty_branch_name', 'user_prefix.name as user_prefix_name')
        ->orderBy('users.id', 'asc') // Add this line to order by the 'id' column in ascending order
        ->paginate(10);


    return view('user.student.index', compact('rows'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.student.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('user.student.edit-user');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

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
