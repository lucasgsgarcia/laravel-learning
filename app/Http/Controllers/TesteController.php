<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $request){
        $pos = $request->get('id');
        $teste = [
          'Teste de validação de e-mail',
            'Teste de autenticação'
        ];
        return response($teste[$pos], 200);
    }

    public function viewReturn(Request $request){
        $pos = $request->get('id');
        $teste = [
            'Teste de validação de e-mail',
            'Teste de autenticação'
        ];
        return view('listar-testes');
    }
}
