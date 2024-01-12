<?php

namespace App\Http\Controllers\Content;
use App\Models\Content;
use App\Models\UserAgoraAccount;
use App\Models\ContentCategory;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

// Retrieve the API response from the session

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $userAgoraAccounts = UserAgoraAccount::whereNotNull('fcm_token')->get();
        // $fcmTokens = $userAgoraAccounts->pluck('fcm_token')->toArray();
        // dd($fcmTokens);

        // $apiResponse = Session::get('apiResponse');
        // $access_token = $apiResponse['data']['access_token'];

        // $payload = [
        //     "title" => "ข่าวสารและประกาศ",
        //     "body" => "title",
        //     "data" => null,
        //     "token" => "eM_gAOcFz0B_jH0LQylNOs:APA91bGCOaoTEVOll5k7Cv0nRPmhFoivOV-FgP3-nlZS10kY1DAOrTxFljGRyAxfAvmiVl_95xdjgW9ldQ3399Mv4HQ4YhSWfTh9jAOOCPO8WG5JeVnJiGECXLM7MIKFsRColcgDXoaE"
        // ];

        // $authToken = $access_token;

        // $response = Http::withHeaders([
        //     'Authorization' => 'Bearer ' . $authToken,
        //     'Content-Type' => 'application/json',
        // ])->post('https://blokcorp-api-dev-8s5cy.ondigitalocean.app/api/v1/notification/push-notification-to-token', $payload);

        // if ($response->successful()) {
        //     $responseData = $response->json();
        //     dd($responseData);
        // } else {
        //     $errorData = $response->json();
        //     dd($errorData);
        // }
            $Content = Content::orderBy('updated_at', 'desc')->get();
                return view('content.contents.index',compact('Content'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    public function store(Request $request)
    {
        // Validate the request if needed
        $request->validate([
            'image' => 'required', // Adjust validation rules as needed
            // Add other validation rules for your form fields
        ]);

        // Get the file from the request
        $image = $request->file('image');
        // dd($image);



$cloudinaryConfig = [
    'cloud_name' => 'dsxvhnxol',
    'api_key' => '148218145142385',
    'api_secret' => 'jtzKUC3NSVUGqtL7gBq7GclXU_Q',
];

$response = Http::attach(
    'file',
    file_get_contents($image->getRealPath()),
    $image->getClientOriginalName()
)->post('https://api.cloudinary.com/v1_1/' . $cloudinaryConfig['cloud_name'] . '/image/upload', [
    'upload_preset' => 'fdnavzer',
]);

        $uploadedImage = $response->json();

        $content = new Content();
        $content->thumbnail_image = $uploadedImage['secure_url'];
        $content->category_id = $request->category_id;
        $content->title = $request->title;
        $content->published_date = '2023-09-01 16:59:01.266158';
        $content->description = $request->description;

        if ($content->save()) {

            $apiResponse = Session::get('apiResponse');
            $access_token = $apiResponse['data']['access_token'];

            $payloadCommon = [

                "title" => "Blokchat",
                "body" => $request->title,
                "data" => null,
                "topic" => "topic",

            ];

                $authToken = $access_token;

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $authToken,
                    'Content-Type' => 'application/json',
                ])->post('https://blokcorp-api-dev-8s5cy.ondigitalocean.app/api/v1/notification/push-notification-to-topic', $payloadCommon);

                if ($response->successful()) {
                    $responseData = $response->json();
                } else {
                    $errorData = $response->json();

                }

            return redirect()->route('content.index')->with('success', 'Content created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to save content.');
        }

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
        // dd($request);
        // Validate the request data, e.g., title, thumbnail_image, description, etc.
        // $request->validate([
        //     'active' => 'required|in:0,1',
        //     'category' => 'required|string',
        //     'newTitle' => 'required|string',
        //     'thumbnail_image' => 'required|url',
        //     'description' => 'required|string',
        // ]);

        // Retrieve the model instance by $id
        $model = Content::findOrFail($id);

        // Update the model's attributes with the validated request data
        $model->update([
            'status' => $request->input('active'),
            'category_id' => $request->input('category'),
            'title' => $request->input('newTitle'),
            'thumbnail_image' => $request->input('thumbnail_image'),
            'description' => $request->input('description'),
        ]);

        // Optionally, you can redirect back with a success message or return a JSON response
        return redirect()->back()->with('success', 'Data updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
                // Find the user by ID
                $Content = Content::find($id);

                // Check if the user was found
                if (!$Content) {
                    return redirect()->route('content.index')->with('del-error', 'User not found.');
                }
                $Content->delete();

                // Redirect to the index page with a success message
                return redirect()->route('content.index')->with('del-success', 'User and associated profile deleted successfully.');

    }
}
