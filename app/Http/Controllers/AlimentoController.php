<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    public function index(){
        $alimentos = Alimento::all(); //select * from alimentos
        return view('listagem', compact('alimentos'));
    }

    public function show($id){
        $alimentos = Alimento::find($id); //select * from alimentos where id = $id
        return view('detalhes', compact('alimentos'));
    }

    public function store(Request $request){
        dd($request->all());
    }

    public function update(Request $request, $id){
        dd($request->all());
    }

    public function destroy($id){
        Alimento::finOrfall($id)->delete(); //delete from alimentos where id = $id
    }

    public function create(){
        return view('cadastro');
    }

    public function edit(){
        return view('editar');
    }
}