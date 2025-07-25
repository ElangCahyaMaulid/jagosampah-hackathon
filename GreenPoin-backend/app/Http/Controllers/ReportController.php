<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'         => 'required|exists:users,id',
            'plastic_type_id' => 'required|exists:plastic_types,id',
            'weight'          => 'required|numeric|min:0.01',
            'location'        => 'required|string',
            'photo'           => 'nullable|image|max:2048', // Max 2MB
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $report = Report::create($validated);

        return response()->json([
            'message' => 'Laporan berhasil disimpan',
            'data' => $report
        ], 201);
        
    }
}
