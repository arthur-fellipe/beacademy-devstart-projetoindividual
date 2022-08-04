@extends('template.processes')
@section('title', $title)
@section('body')
    <h1>Processo {{ $process->process_number }}</h1>
    <table class="table">
        <thead class="text-center">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Número do Processo</th>
                <th scope="col">Advogado</th>
                <th scope="col">Autor</th>
                <th scope="col">Réu</th>
                <th scope="col">Tribunal</th>
                <th scope="col">Comarca</th>
                <th scope="col">Juízo</th>
                <th scope="col">Matéria</th>
                <th scope="col">Valor da Causa</th>
                <th scope="col">Data de Ajuizamento</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $process->id }}</th>
                <td>{{ $process->process_number }}</td>
                <td>{{ $process->lawyer }}</td>
                <td>{{ $process->claimant }}</td>
                <td>{{ $process->defendant }}</td>
                <td>{{ $process->court }}</td>
                <td>{{ $process->city }}</td>
                <td>{{ $process->judge }}</td>
                <td>{{ $process->subject }}</td>
                <td>{{ $process->process_value }}</td>
                <td>{{ date('d/m/Y', strtotime($process->processed_at)) }}</td>
                <td>
                    <a href="{{ route('processes.edit', $process->id) }}" class="btn btn-warning text-white">Editar</a>
                </td>
                <td>
                <form action="{{ route('processes.destroy', $process->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger text-white">Deletar</button>   
                    </form>    
                </td>
            </tr>
        </tbody>
    </table>
@endsection