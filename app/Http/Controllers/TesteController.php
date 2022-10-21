<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Teste;
use App\Models\TestType;
use http\Env\Response;
use Illuminate\Http\Request;

class TesteController extends Controller
{

    public function index(){
        $testes = Teste::query()->orderBy('created_at', 'desc')->get();
        return view('listar-testes')->with('testes', $testes);
    }

    public function store(Request $request){
        $test_type_id = $request->input('test_type_id');
        $author_id = $request->input('author_id');
        $teste = new Teste();
        $teste->test_type_id = $test_type_id;
        $teste->author_id = $author_id;
        $teste->save();

        echo redirect('/');
    }


    public function byAuthor($id)
    {
        $tests = Teste::where('author_id', $id)->get();

        foreach ($tests as $test) {
            echo "<h1>{$test}</h1>";
        }
    }

    public function byTestType($id)
    {
        $tests = Teste::where('test_type_id', $id)->get();

        foreach ($tests as $test) {
            echo "<h1>{$test}</h1>";
        }
    }
}
