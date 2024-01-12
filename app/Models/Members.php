<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
class Members extends Model
{
    // ... Other model code ...

    // Method to process user data
    public function processUserData(array $userData)
    {
        $response = Http::withHeaders([
            'accept' => '*/*',
            'Content-Type' => 'application/json',
        ])->post('https://blokcorp-api-dev-8s5cy.ondigitalocean.app/api/v1/members', [
            // Data to be sent in the POST request
            "username" => $userData['username'],
            "password" => $userData['password'],
            "prefix" => $userData['prefix'],
            "firstName" => $userData['firstName'],
            "lastName" => $userData['lastName'],
            "firstNameE" => null,
            "lastNameE" => null,
            "email" => null,
            "phone" => null,
            "birthday" => $userData['birthday'],
            "avatar" => null,
            "faculty" => $userData['faculty'],
            "branch" => $userData['branch'],
            "role" => $userData['role'],
            "status" => true,
        ]);
        if ($response->successful()) {
            // Handle success, return the JSON response
            return $response->json();
        } else {
            return $response->json();
        }

            }
}
