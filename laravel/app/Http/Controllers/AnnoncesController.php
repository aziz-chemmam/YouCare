<?php

namespace App\Http\Controllers;
use App\Models\Annonces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnoncesController extends Controller
{
    public function create_annonces(Request $request){

        $request->validate([
            'titre'=>'nullable',
            'description'=>'nullable',
            'type'=>'nullable',
            'date'=>'nullable',
            'localisation'=>'nullable',
            'user_id'=>'nullable',
            'competences'=>'nullable',
        ]);
       $annonce= Annonces::create([
            'user_id'=>$request->input('user_id'),
            'titre'=>$request->input('titre'),
            'description'=>$request->input('description') ,
            'competences'=>$request->input('competences'),
            'date'=>$request->input('date'),
            'localisation'=>$request->input('localisation'),
            'type'=>$request->input('type'),
           ]);

        return response()->json([
            'message' => 'annonce successfully created',
            'annonce' => $annonce
        ], 201); ;
    }

    public function destroy(Annonces $annonce)
    {
            $annonce->delete();
            return response()->json([
                "message" => "annonce deleted successfully",
            ], 201);
    }

    public function annonces()
    {
        $annonce = Annonces::get();
        return response()->json($annonce);
    }

}

