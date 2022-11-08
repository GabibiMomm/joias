<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('categorias.index', array('categorias' => $categorias));
    }
    
    //////////////////////////////////

    public function show($id)
    {
        $categorias = Categoria::find($id);
        return view('categorias.show',array('categoria' => $categorias));
    }

    //////////////////////////////////

    public function edit($id)
    {
        $categorias = Categoria::find($id);
        return view('categorias.edit',array('categoria' => $categorias));
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
        $categorias = Categoria::find($id);
        $categorias->descricao = $request->input('descricao');
        if($categorias->save()) {
            return redirect()->to(url('categorias'));
        }
    }

    //////////////////////////////////

    public function create()
    {
        return view('categorias.create');
    }
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->descricao = $request->input('descricao');
        if($categoria->save()) {
            return redirect('categorias');
        }
    }

    //////////////////////////////////

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect(url('categorias/'));
    }

}

