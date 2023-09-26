<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Device;


class Apicontroller extends Controller
{
    public function get()
    {
        // try {
        //     DB::connection()->getPdo();
        //     return response()->json(['message' => 'Database connection successful'], 200);
        // } catch (\Exception $e) {
        //     return response()->json(['message' => 'Database connection failed: ' . $e->getMessage()], 500);
        // }
        // echo('Hello');
        // try {
        //     $data = Device::all()->toArray();
        //     //print_r($data);
        //     return response()->json(['success' => true, 'data' => $data], 200);
        // } catch (\Exception $e) {
        //     return response()->json(['success' => false, 'message' => 'Error retrieving data.'], 500);
        // }   
        try {
            // $data = Device::all()->toArray();
            $data = Device::select('id', 'username', 'facility', 'facility_id')
            ->where('active', 1)
            ->get();     
            // return json_encode($data);
            $json_data = json_encode(['success' => true, 'data' => $data]); 
            return response($json_data, 200, ['Content-Type' => 'application/json; charset=utf-8']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error retrieving data.'], 500);
        }
          
    }
}
