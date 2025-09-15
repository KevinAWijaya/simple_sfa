<?php

namespace App\Http\Controllers;

use App\Models\CustomerTTHDetail;
use Illuminate\Http\Request;

class CustomerTTHDetailController extends Controller
{
    public function index()
    {
        return response()->json(CustomerTTHDetail::all());
    }

    public function show($id)
    {
        return response()->json(CustomerTTHDetail::find($id));
    }

    public function store(Request $request)
    {
        $detail = CustomerTTHDetail::create($request->all());
        return response()->json($detail, 201);
    }

    public function update(Request $request, $id)
    {
        $detail = CustomerTTHDetail::findOrFail($id);
        $detail->update($request->all());
        return response()->json($detail);
    }

    public function destroy($id)
    {
        CustomerTTHDetail::destroy($id);
        return response()->json(null, 204);
    }
}
