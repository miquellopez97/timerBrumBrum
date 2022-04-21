<?php

namespace App\Http\Controllers;

use App\Models\Timelap;
use Illuminate\Http\Request;

class TimelapController extends Controller
{
    public function index()
    {
        $timelap = Timelap::all();
        return response()->json($timelap, 200);
    }

    public function store(Request $request)
    {
        $timelap = Timelap::create($request->all());
        return response()->json($timelap, 201);
    }

    public function show($userName)
    {
        $user = Timelap::where('user', $userName)->get();

        return response()->json($user, 200);
    }

    public function update(Request $request, $id)
    {
        $timelap = Timelap::find($id);
        $timelap->fill($request->all())->save();
        return response()->json($timelap, 200);
    }

    public function destroy($id)
    {
        $timelap = Timelap::find($id);
        $timelap->forceDelete();
        return response()->noContent();
    }

    public function record(Request $request)
    {
        $user = Timelap::where('map', $request -> map)
        ->orderBy('time', 'ASC')
        ->take($request -> size)
        ->get();

        return response()->json($user, 200);
    }
}
