<?php

namespace App\Http\Controllers;

use App\Models\Gamedata;
use Illuminate\Http\Request;

class GamedataController extends Controller
{
    public function index()
    {
        $data = Gamedata::all();

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $data = Gamedata::create($request->all());
        return response()->json($data, 201);
    }

    public function show($user)
    {
        $data = Gamedata::where('user', $user)->get();

        return response()->json($data, 200);
    }

    public function update()
    {
        //
    }

    public function destroy($id)
    {
        $data = Gamedata::find($id);
        $data->forceDelete();
        return response()->noContent();
    }
}
