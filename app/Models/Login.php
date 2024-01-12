<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{

    public function login($username, $password)
    {
        // dd(env('API_POST'));
        $response = Http::post('https://blokcorp-api-dev-8s5cy.ondigitalocean.app/api/v1/auth/login', [
            'username' => $username,
            'password' => $password,
        ]);




        if ($response->successful()) {
            // API request successful
            $apiResponse = $response->json();
            // Retrieving data from the session
            session(['apiResponse' => $apiResponse]);

            // dd($apiResponse);

            $access_token = $apiResponse['data']['access_token'];


            $responseData = Http::withToken($access_token)->get('https://blokcorp-api-dev-8s5cy.ondigitalocean.app/api/v1/users/profile');

            if ($responseData->successful()) {
                $responseData = $responseData->json();
                // dd($responseData);

                return $responseData;



            } else {
            }

            // Process the response data
        } else {
            // API request failed
            $errorMessage = $response->body();
            // Handle the error
            return ['error' => $errorMessage];
        }
    }
}
