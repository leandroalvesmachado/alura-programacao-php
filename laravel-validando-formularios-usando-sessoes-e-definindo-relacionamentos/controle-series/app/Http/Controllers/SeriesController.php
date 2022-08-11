<?php

namespace App\Http\Controllers;

use App\Models\Series;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        // $series = DB::select("SELECT nome FROM series;");
        // $series = Serie::all();
        $series = Series::query()->orderBy('nome')->get();
        // Ex: Acessando scope, Serie::active();

        // $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        // ou
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index', [
            'series' => $series
        ])->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        // $nomeSerie = $request->input('nome');
        // ou
        $nomeSerie = $request->nome;
        // ou todos os dados do request
        // $request->all();

        // DB::insert("INSERT INTO series (nome) VALUES (?)", [$nomeSerie]);
        // ou
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();
        // ou
        // request->all() todos, request->only() apenas, request->except(['_token'])
        $serie = Series::create($request->all());

        $request->session()->flash('mensagem.sucesso', "Série {$serie->nome} adicionada com sucesso.");

        // return redirect('/series');
        // ou
        // return redirect()->route('series.index');
        // ou laravel 9
        return to_route('series.index');
    }

    public function edit(Series $serie)
    {
        return view('series.edit')->with('serie', $serie);
    }

    public function update(SeriesFormRequest $request, Series $serie)
    {
        $serie->fill($request->all());
        $serie->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série {$serie->nome} atualizada com sucesso");;
    }

    public function destroy(Series $serie)
    {
        // Serie::destroy($id);
        // ou
        $serie->delete();

        // $request->session()->flash('mensagem.sucesso', "Série {$serie->nome} removida com sucesso");
        // return to_route('series.index');
        // ou, with não precisa do Request injetado
        return to_route('series.index')
            ->with('mensagem.sucesso', "Série {$serie->nome} removida com sucesso");
    }
}
