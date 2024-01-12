<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
class Excemple extends Model
{
    use HasFactory;

    public function fetchDataFromAPI()
    {
        $response = Http::get('https://api.slingacademy.com/v1/sample-data/photos');
        $data = $response->json();
        return $data;
    }

    public function sendDataToAPI(array $postData)
    {
        $response = Http::post('https://api.example.com/endpoint', $postData);
        $data = $response->json();
        return $data;
    }
}
