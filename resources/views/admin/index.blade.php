@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container mt-3 mb-3">
            <a class="btn btn-primary" href="{{ Route('admin.dashboard') }}">Indietro</a>
            <a class="btn btn-primary" href="{{ Route('admin.projects.create') }}">Crea nuovo</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">tecnologia usata</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->technology ? $project->technology->name : 'Nessuna Tecnologia assegnata ' }}</td>
                        <td>{{ $project->type ? $project->type->name : 'Nessuna tipologia assegnata' }}</td>
                        <td>{{ $project->description }}</td>
                        <td><a href="{{ $project->link }}">{{ $project->link }}</a></td>
                        <td>
                            <div class="my-2"><a class="btn btn-primary"
                                    href="{{ route('admin.projects.show', ['project' => $project->id]) }}">Info</a></div>
                            <div class="my-2"><a class="btn btn-secondary"
                                    href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">Modifica</a>
                            </div>
                            <form class="my-2"
                                action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Elimina</button>
                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
