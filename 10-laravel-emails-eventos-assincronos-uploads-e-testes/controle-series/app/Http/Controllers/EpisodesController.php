<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Season;
use App\Models\Episode;

class EpisodesController extends Controller
{
    public function index(Season $season)
    {
        return view('episodes.index', [
            'season' => $season,
            'episodes' => $season->episodes,
            'mensagemSucesso' => session('mensagem.sucesso')
        ]);
    }

    public function update(Request $request, Season $season)
    {
        $watchedEpisodes = $request->episodes;
        $season->episodes->each(function (Episode $episode) use ($watchedEpisodes) {
            $episode->watched = in_array($episode->id, $watchedEpisodes);
            // $episode->save();
        });

        // salva a model em questão e todos os seus relacionamentos
        $season->push();

        return to_route('episodes.index', $season->id)
            ->with('mensagem.sucesso', "Episódios marcados como assistido");
    }
}
