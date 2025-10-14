<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function findStatus(Request $request){

        $sensor = Sensor::where('codigo', '=', $request->codigo)->first();

        if(!$sensor){
            return response()->json(['error' => 'sensor nao encontrado'], 404);
        }

        return response()->json(['status' => $sensor->status]);
        
        
    }

    public function update(Request $request){

        $sensor = Sensor::where('codigo', '=', $request->codigo)->first();
        $sensor->update(['status' => $request->status]);

        return response()->json([
            'message' => 'Status do sensor atualizado com sucesso',
            'data' => $sensor
        ]);

    
    }
}
