<?php

namespace App\Http\Controllers;

use App\Models\CustomerTTH;
use Illuminate\Http\Request;

class CustomerTTHController extends Controller
{
    public function index()
    {
        return response()->json(CustomerTTH::all());
    }

    public function show($id)
    {
        return response()->json(CustomerTTH::find($id));
    }

    public function store(Request $request)
    {
        $tth = CustomerTTH::create($request->all());
        return response()->json($tth, 201);
    }

    public function update(Request $request, $id)
    {
        $tth = CustomerTTH::findOrFail($id);
        $tth->update($request->all());
        return response()->json($tth);
    }

    public function destroy($id)
    {
        CustomerTTH::destroy($id);
        return response()->json(null, 204);
    }

    public function bulkUpdateByCustomer(Request $request, $custId)
    {
        $validated = $request->validate([
            'Received' => 'required|in:0,1',
            'ReceivedDate' => 'nullable|date',
            'FailedReason' => 'nullable|string',
        ]);

        // Update semua data dengan CustID tertentu
        $updated = CustomerTTH::where('CustID', $custId)
            ->update([
                'Received' => $validated['Received'],
                'ReceivedDate' => $validated['ReceivedDate'] ?? now(),
                'FailedReason' => $validated['FailedReason'] ?? null,
            ]);

        return response()->json([
            'message' => 'Update success',
            'updated_rows' => $updated
        ]);
    }
}
