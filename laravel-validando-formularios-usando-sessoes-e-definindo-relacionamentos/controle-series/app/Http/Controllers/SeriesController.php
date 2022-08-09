<?php

namespace App\Http\Controllers;

use App\Models\Serie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        // $series = DB::select("SELECT nome FROM series;");
        // $series = Serie::all();
        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index', [
            'series' => $series
        ]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
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
        Serie::create($request->all());

        return redirect('/series');
    }
}
