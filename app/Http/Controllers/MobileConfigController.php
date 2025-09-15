<?php

namespace App\Http\Controllers;

use App\Models\MobileConfig;
use Illuminate\Http\Request;

class MobileConfigController extends Controller
{
    public function index()
    {
        return response()->json(MobileConfig::all());
    }

    public function show($id)
    {
        return response()->json(MobileConfig::find($id));
    }

    public function store(Request $request)
    {
        $config = MobileConfig::create($request->all());
        return response()->json($config, 201);
    }

    public function update(Request $request, $id)
    {
        $config = MobileConfig::findOrFail($id);
        $config->update($request->all());
        return response()->json($config);
    }

    public function destroy($id)
    {
        MobileConfig::destroy($id);
        return response()->json(null, 204);
    }
}
