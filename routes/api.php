<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/demo', function (Request $request) {
    try {
        // Simulating some data fetching or processing
        if (rand(0, 1) == 1) {
            throw new \Exception('Something went wrong!');
        }

        return response()->json([
            'status' => 'success',
            'message' => 'This is a demo API response',
            'data' => [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'age' => 28,
            ],
        ], 200); // HTTP status code 200

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500); // HTTP status code 500
    }
});
