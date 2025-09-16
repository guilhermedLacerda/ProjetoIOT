<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function store(Request $request){
        $registro = Registro::create([
            'sensor_id' => $request->sensor_id,
            'valor' => $request->valor,
            'unidade' => $request->unidade, 
            'data_hora' => $request->data_hora
        ]);

        return response()->json([
            'status' => true,
            'message' => 'cadastrado com sucesso',
            'data' => $registro
        ]);
    }

}
