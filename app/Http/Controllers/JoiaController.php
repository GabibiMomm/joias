<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joia;
use App\Models\Categoria;


class JoiaController extends Controller
{
    public function index(){
        $joias = Joia::all();
        return view('joias.index', array('joias' => $joias));
    }

    //////////////////////////////////

    public function show($id)
    {
        $joia = Joia::find($id);
        return view('joias.show',array('joia' => $joia));
    }

    public function edit($id)
    {
        $categorias = Categoria::all();
        $joia = Joia::find($id);
        return view('joias.edit',array('joia' => $joia, 'categorias' => $categorias));
    }

    //////////////////////////////////


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */    
    public function update(Request $request, $id)
    {
        $joia = Joia::find($id);
        $joia->nome = $request->input('nome');
        $joia->descricao = $request->input('descricao');
        $joia->imagem = $request->file('imagem')->getClientOriginalName();
        $joia->categoria = $request->input('categoria');
        $joia->preco = $request->input('preco');
        if($joia->save()) {
            if($request->hasFile('imagem')){
                $nomearquivo = $request->file('imagem')->getClientOriginalName();
                $request->file('imagem')->move(public_path('.\imagens'),$nomearquivo);
            }
            return redirect()->to(url('joias'));
        }
    }

    //////////////////////////////////
    
    public function create()
    {
        $categorias = Categoria::all();
        return view('joias.create', ['categorias' => $categorias]);
    }
    public function store(Request $request)
    {
        $joia = new Joia();
        $joia->nome = $request->input('nome');
        $joia->categoria = $request->input('categoria');
        $joia->descricao = $request->input('descricao');
        $joia->imagem = $request->file('imagem')->getClientOriginalName();
        $joia->preco = $request->input('preco');

        if($joia->save()) {
            if($request->hasFile('imagem')){
                $nomearquivo = $request->file('imagem')->getClientOriginalName();
                $request->file('imagem')->move(public_path('.\imagens'),$nomearquivo);
            }
            return redirect('joias');
        }
    }

    //////////////////////////////////

    public function destroy($id)
    {
        $joia = Joia::find($id);
        $joia->delete();
        return redirect(url('joias/'));
    }
}



