<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index()
    {
        $log = Logs::all();
        return response()->json($log, 200);
    }

    public function store(Request $request)
    {
        $log = Logs::create($request->all());
        return response()->json($log, 201);
    }

    public function show($user)
    {
        $log = Logs::where('user', $user)->get();

        return response()->json($log, 200);
    }
}
