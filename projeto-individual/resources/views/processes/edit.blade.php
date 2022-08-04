@extends('template.processes')
@section('title', "Processo {$process->process_number}")
@section('body')
<h1>Processo {{$process->process_number}}</h1>

@if($errors->any())
  <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        {{ $error }}<br>
      @endforeach
  </div>
@endif

  <form action="{{ route('processes.update', $process->id) }}" method="post">
    @method('PUT')  
    @csrf
      <div class="mb-3">
        <label for="process_number" class="form-label">Número do processo</label>
        <input type="text" class="form-control" id="process_number" name="process_number" value="{{$process->process_number}}">
      </div>
      <div class="mb-3">
        <label for="lawyer" class="form-label">Advogado</label>
        <input type="text" class="form-control" id="lawyer" name="lawyer" value="{{$process->lawyer}}">
      </div>
      <div class="mb-3">
        <label for="claimant" class="form-label">Autor</label>
        <input type="text" class="form-control" id="claimant" name="claimant" value="{{$process->claimant}}">
      </div>
      <div class="mb-3">
        <label for="defendant" class="form-label">Réu</label>
        <input type="text" class="form-control" id="defendant" name="defendant" value="{{$process->defendant}}">
      </div>
      <div class="mb-3">
        <label for="court" class="form-label">Tribunal</label>
        <input type="text" class="form-control" id="court" name="court" value="{{$process->court}}">
      </div>
      <div class="mb-3">
        <label for="city" class="form-label">Comarca</label>
        <input type="text" class="form-control" id="city" name="city" value="{{$process->city}}">
      </div>
      <div class="mb-3">
        <label for="judge" class="form-label">Juízo</label>
        <input type="text" class="form-control" id="judge" name="judge" value="{{$process->judge}}">
      </div>
      <div class="mb-3">
        <label for="subject" class="form-label">Matéria</label>
        <input type="text" class="form-control" id="subject" name="subject" value="{{$process->subject}}">
      </div>
      <div class="mb-3">
        <label for="process_value" class="form-label">Valor da Causa</label>
        <input type="text" class="form-control" id="process_value" name="process_value" value="{{$process->process_value}}">
      </div>
      <div class="mb-3">
        <label for="processed_at" class="form-label">Data de Ajuizamento</label>
        <input type="text" class="form-control" id="processed_at" name="processed_at" value="{{$process->processed_at}}">
      </div>
      <button type="submit" class="btn btn-primary">Editar</button>
  </form>

@endsection