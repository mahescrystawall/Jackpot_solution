<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BetController extends Controller
{
    /**
     * Fetch the unsettled bets from the JSON file and return them as a JSON response.
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUnsettledBets()
    {
        // Path to the JSON file
        $path = storage_path('json/unsettled_bet.json');

        // Check if the file exists
        if (file_exists($path)) {
            // Read the contents of the file
            $json = file_get_contents($path);

            // Decode the JSON data to an array
            $data = json_decode($json, true);

            // Check if the JSON was decoded properly
            if (json_last_error() !== JSON_ERROR_NONE) {
                // Return an error if the JSON is invalid
                return response()->json(['message' => 'Invalid JSON data'], 400);
            }

            // Return the data as a JSON response
            return response()->json($data, 200);
        } else {
            // Return an error response if file not found
            return response()->json(['message' => 'File not found'], 404);
        }
    }
}
