@extends('template.processes')
@section('title', 'Novo Processo')
@section('body')
<h1>Novo Processo</h1>

@if($errors->any())
  <div class="alert alert-danger" role="alert">
      @foreach($errors->all() as $error)
        {{ $error }}<br>
      @endforeach
  </div>
@endif

  <form action="{{ route('processes.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="process_number" class="form-label">Número do processo</label>
        <input type="text" class="form-control" id="process_number" name="process_number" aria-describedby="Número do processo">
      </div>
      <div class="mb-3">
        <label for="lawyer" class="form-label">Advogado</label>
        <input type="text" class="form-control" id="lawyer" name="lawyer" aria-describedby="Advogado">
      </div>
      <div class="mb-3">
        <label for="claimant" class="form-label">Autor</label>
        <input type="text" class="form-control" id="claimant" name="claimant" aria-describedby="Autor">
      </div>
      <div class="mb-3">
        <label for="defendant" class="form-label">Réu</label>
        <input type="text" class="form-control" id="defendant" name="defendant" aria-describedby="Réu">
      </div>
      <div class="mb-3">
        <label for="court" class="form-label">Tribunal</label>
        <input type="text" class="form-control" id="court" name="court" aria-describedby="Tribunal">
      </div>
      <div class="mb-3">
        <label for="city" class="form-label">Comarca</label>
        <input type="text" class="form-control" id="city" name="city" aria-describedby="Comarca">
      </div>
      <div class="mb-3">
        <label for="judge" class="form-label">Juízo</label>
        <input type="text" class="form-control" id="judge" name="judge" aria-describedby="Juízo">
      </div>
      <div class="mb-3">
        <label for="subject" class="form-label">Matéria</label>
        <input type="text" class="form-control" id="subject" name="subject" aria-describedby="Matéria">
      </div>
      <div class="mb-3">
        <label for="process_value" class="form-label">Valor da Causa</label>
        <input type="text" class="form-control" id="process_value" name="process_value" aria-describedby="Valor da Causa">
      </div>
      <div class="mb-3">
        <label for="processed_at" class="form-label">Data de Ajuizamento</label>
        <input type="text" class="form-control" id="processed_at" name="processed_at" aria-describedby="Data de Ajuizamento">
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

@endsection