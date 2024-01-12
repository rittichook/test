<?php

namespace App\Http\Controllers\GroupChat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;


class GroupChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // dd(Auth::user());
        $apiResponse = request()->session()->get('apiResponse');
        $agora_app_token = $apiResponse['data']['agora_app_token'];


        // dd($agora_app_token);
        $authToken = $agora_app_token;

        // $authToken = '007eJxTYLjnXL1EgOtHRXe2xLa0DLbXhV3Rqk+MJzXono6bncIss0mBwcjYwNLCzCLR2NgizSTZODXJIjHJyDTZ2MLA2CgxxcCw+rp3qg4jA8OjnX+ZGBlYGRgZmBhAfAYGABLkG6w=';

        $url = "https://a61.chat.agora.io/61985712/1150498/chatgroups?limit=1000";
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . $authToken])->get($url);

        if ($response->successful()) {
            // You can access the response content using $response->body()
            $chatGroups = $response->json();
            // dd($chatGroups);

            // Perform any additional processing or return the data
            return view('group-chat.index', ['chatGroups' => $chatGroups]);
        } else {
            return view('group-chat.index', ['chatGroups' => '']);

        }


        // return view('group-chat.index');
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
