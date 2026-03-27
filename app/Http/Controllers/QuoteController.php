<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function show($id)
    {
        $quote = Quote::find($id);

        if (!$quote) {
            return response()->json([
                'error' => 'Quote not found'
            ], 404);
        }

        return response()->json($quote, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'car_plate' => 'required|string|max:255',
            'insurer_name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $quote = Quote::create($validated);

        return response()->json($quote, 201);
    }
}
