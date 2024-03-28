<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
use Illuminate\Http\Request;

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

       $annonces= Annonces::create([
            'user_id'=>$request->input('user_id'),
            'titre'=>$request->input('titre'),
            'description'=>$request->input('description') ,
            'competences'=>$request->input('competences'),
            'date'=>$request->input('date'),
            'localisation'=>$request->input('localisation'),
            'type'=>$request->input('type'),
           ]);

        return response()->json([
            'message' => 'annonces successfully created',
            'annonces' => $annonces
        ], 201); ;
    }
}
