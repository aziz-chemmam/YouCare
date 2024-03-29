<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Benevole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BenevoleController extends Controller
{
    public function benevole(Request $request)
    {
        try {
            $request->validate([
                'annonce_id' => 'required|exists:annonces,id',
            ]);

            $user_id = Auth::guard('api')->user()->id;

            $Benevoles = Benevole::create([
                'annonce_id' => $request->annonce_id,
                'user_id' => $user_id
            ]);

            return response()->json($Benevoles, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
