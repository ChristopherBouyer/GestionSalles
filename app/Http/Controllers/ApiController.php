<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        if (rfidData === "63709980") 
            return response()->json(['name' => 'Audran'], 200);
        else if (rfidData === "5cd1f794") 
            return response()->json(['name' => 'Mathis'], 200);
        else
            return response()->json(404);
    }
}
