@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <p class="card-text"><span class="font-weight-bold"> Titolo:</span> <br>{{ $project->title }}</p>
                    <p class="card-text"><span class="font-weight-bold"> Tipologia:</span>
                        <br>{{ $project->type ? $project->type->name : 'Nessuna tipologia assegnata' }}
                    </p>
                    <p class="card-text"><span class="font-weight-bold">Descrizione:</span> <br>{{ $project->description }}
                    </p>
                    <p class="card-text"><span class="font-weight-bold">Link</span> <br>{{ $project->link }}</p>
                </div>
            </div>
            <div>
                <a class="btn btn-primary mt-3" href="{{ Route('admin.projects.index') }}">Indietro</a>
            </div>
        </div>

    </div>
@endsection
