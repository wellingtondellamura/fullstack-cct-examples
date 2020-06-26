<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Util\Json;

class AulaController extends Controller
{
    public function index()
    {
        $data = [
            "titulo"=>"Aula Laravel",
            "conteudo" => "Introdução ao Laravel e a construção de APIs",
            "duracao" => 10
        ];

        return response()->json($data);
    }

    public function novaAula(Request $request)
    {
        $data = $request->all();

        return response()->json($data['nome']);
    }
}
