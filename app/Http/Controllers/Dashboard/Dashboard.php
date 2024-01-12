<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserAgoraAccount;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUser = User::count();
        $allStudent = User::where('role', '=', 'student')->count();
        $allProfessor = User::where('role', '=', 'teacher')->count();
        $userAgoraAccount = UserAgoraAccount::whereNotNull('fcm_token')->count();
        // dd($userAgoraAccount);


        return view('dashboard.index', ['allUser' => $allUser, 'allStudent' => $allStudent, 'allProfessor' => $allProfessor,'userAgoraAccount' => $userAgoraAccount]);

        // return 'fsdfds';
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
        //
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
