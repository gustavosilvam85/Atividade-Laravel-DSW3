<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index()
    {
        $cidades = Cidade::all();
        return view('index', compact('cidades'));
    }

    public function show($id)
    {
        $cidade = Cidade::findOrFail($id);
        return view('show', compact('cidade'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'populacao' => 'required|integer|min:1',
            'area' => 'required|numeric|min:0',
        ]);

        Cidade::create([
            'nome' => $request->nome,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'populacao' => $request->populacao,
            'area' => $request->area,
        ]);

        return redirect()->route('index')->with('success', 'Cidade adicionada com sucesso!');
    }
}
