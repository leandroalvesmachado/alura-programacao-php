<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\SeriesRepository;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Mail;
use App\Mail\SeriesCreated;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
        // aplicando middleware em todos os métodos do controller
        $this->middleware(Autenticador::class)->except('index');
    }

    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $coverPath = $request->hasFile('cover') ? $request->file('cover')->store('series_cover', 'public') : null;
        $request->coverPath = $coverPath;
        $serie = $this->repository->add($request);

        // $userList = User::all();

        // foreach ($userList as $index => $user) {
        //     // usuario logado = $request->user()
        //     // ou Auth::user()
        //     $email = new SeriesCreated(
        //         $serie->nome,
        //         $serie->id,
        //         $request->seasonsQty,
        //         $request->episodesPerSeason,
        //     );
        //     // $email->subject = 'Nova série criada';

        //     // Mail::to($request->user())->send($email);
        //     // Mail::to($user)->send($email);
            
        //     // usando filas para o envio de emails (sincronas)
        //     // Mail::to($user)->queue($email);

        //     // $now = new \DateTime();
        //     // $now->modify($index * 2 .' seconds');

        //     $when = now()->addSeconds($index * 5);
        //     Mail::to($user)->later($when, $email);
        // }

        // emitindo evento
        // $seriesCreatedEvent = new \App\Events\SeriesCreated(
        //     $serie->nome,
        //     $serie->id,
        //     $request->seasonsQty,
        //     $request->episodesPerSeason,
        // );

        // event($seriesCreatedEvent);

        // outra forma 
        \App\Events\SeriesCreated::dispatch(
            $serie->nome,
            $serie->id,
            $request->seasonsQty,
            $request->episodesPerSeason,
        );

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
    }

    public function destroy(Series $series)
    {
        $series->delete();
        \App\Jobs\DeleteSeriesCover::dispatch($series->cover); // Linha adicionada

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }
}
