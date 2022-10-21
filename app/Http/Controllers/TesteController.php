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
        $description = $request->input('description');
        $author_id = (new AuthorController)->searchAuthorIdByAuthorName($request->input('author_name'));
        $teste = new Teste();
        $teste->test_type_id = $test_type_id;
        $teste->author_id = $author_id;
        $teste->description = $description;
        $teste->save();

        echo redirect('/');
    }


    public function searchTestByAuthorId($id)
    {
        $tests = Teste::where('author_id', $id)->get();

        if ($tests != null) {
            return $tests;
        }

        return abort(404);
    }

    public function searchTestByTestTypeId($id)
    {
        $tests = Teste::where('test_type_id', $id)->get();

        if ($tests != null){
            return $tests;
        }

        return abort(404);
    }

    public function searchTestByAuthorName($name)
    {
        $tests = Teste::where('author_id', function ($query) use ($name) {
            $query->select('id')
                ->from('authors')
                ->where('author_name', 'like', '%' . $name . '%');
        })->get();;

        return $tests;
    }




}
