<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Login;
use App\Models\User;
use App\Models\accessRights;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(Request $request, Login $apiModel)
    {

               // Check database connection
               try {
                DB::connection()->getPdo();
            } catch (\Exception $e) {
                return redirect()->route('login')->with('error', 'Unable to connect to the database. Please try again later.');
            }

        $username = $request->input('username');
        $password = $request->input('password');

        if (empty($username) || empty($password)) {
            return redirect()->back()->with(['error' => 'Username and password are required.'], 400);
        }

        $responseData = $apiModel->login($username, $password);

        // dd($responseData);




        if (isset($responseData['error'])) {
            return redirect()->back()->with('error', $responseData['error']);
        } else {
            $data = $responseData['data'];


            // Retrieve the user from your user model based on the response data
            $user = User::find($data['id']);

            // dd($user);


            if (!$user) {
                return redirect()->route('login');
            }

            $uniqueAccessRights = accessRights::distinct('code')->pluck('code')->toArray();

            if (in_array($data['username'], $uniqueAccessRights)) {
                Auth::login($user);
                return redirect()->route('dashboard-index')->with('data', $responseData);
            } else {
                return redirect()->back()->with('access', 'No access rights');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
