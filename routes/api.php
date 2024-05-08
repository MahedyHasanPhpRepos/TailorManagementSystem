<?php

use App\Http\Controllers\RegeneratePost;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/api', function(){

    $response = Http::get('https://jsonplaceholder.typicode.com/posts');

    if ($response->successful()) {
        $posts = $response->json(); // Get JSON as an array
        // Display the posts
    } else {
        // Handle errors
    }

    return $posts ; 
});

// Route::get('/api', [RegeneratePost::class , 'index']);


Route::get('/chat/get', function(){


    $client = new Client([
         'verify' => false,
     ]);

    $response = $client->get('https://jsonplaceholder.typicode.com/posts', [
        GuzzleHttp\RequestOptions::JSON => ['foo' => 'bar'] 
    ]);

// $response = $client->get('https://jsonplaceholder.typicode.com/posts');

// 

// $jsonData = json_decode($response->getBody()->getContents(), true);

    return response()->json([
        'data' => $response 
    ]);
});


Route::post('/chat', function(){


        $client = new Client([
             'verify' => false,
         ]);

        $response = $client->get('https://jsonplaceholder.typicode.com/posts', [
            GuzzleHttp\RequestOptions::JSON => ['foo' => 'bar'] 
        ]);
    
    // $response = $client->get('https://jsonplaceholder.typicode.com/posts');

    // 
    
    // $jsonData = json_decode($response->getBody()->getContents(), true);

    return response()->json([
        'data' => $response 
    ]);
});