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
        Alimento::create($request->all()); //insert into alimentos
        
        return redirect()->route('listagem');
    }

    public function update(Request $request, $id){
        $alimento = Alimento::findOrFail($id); //select * from alimentos where id = $id

        $alimento->update($request->all()); //update alimentos set ... where id = $id
    
        return redirect()->route('listagem');
    }

    public function destroy($id){
        Alimento::findOrFail($id)->delete(); //delete from alimentos where id = $id
    
        return redirect()->route('listagem');
    }

    public function create(){
        return view('cadastro');
    }

    public function edit($id){
        $alimento = Alimento::findOrFail($id);
        return view('editar', compact('alimento'));
    }
}