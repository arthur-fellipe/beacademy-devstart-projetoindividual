@extends('template.processes')
@section('title', 'Lista de Processos')
@section('body')
    <h1>Lista de Processos</h1>
    <a href="{{ route('processes.create') }}" class="btn btn-success">Novo Processo</a>
    <table class="table text-center">
        <thead>
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
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($processes as $process)
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
                <td><a href="{{ route('processes.show', $process->id) }}" class="btn btn-info text-white">Visualizar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection