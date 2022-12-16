@extends('layouts.main')

@section('title', 'Editando: ' . $epi->epi)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $epi->epi }}</h1>
  <form action="/events/update/{{ $epi->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Codigo de Barras:</label>
      <input type="text" class="form-control" id="id" name="id" placeholder="Codigo de Barras" value="{{ $epi->id }}">
    </div>
    <div class="form-group">
      <label for="title">EPI:</label>
      <input type="text" class="form-control" id="epi" name="epi" placeholder="EPI" value="{{ $epi->epi }}">
    </div>
    <div class="form-group">
      <label for="title">CA:</label>
      <input type="text" class="form-control" id="ca" name="ca" placeholder="CA" value="{{ $epi->ca }}">
    </div>
    <div class="form-group">
      <label for="title">Proprietário:</label>
      <input type="text" class="form-control" id="proprietario" name="proprietario" placeholder="Proprietario" value="{{ $epi->proprietario }}">
    </div>
    <input type="submit" class="btn btn-primary" value="Editar EPI">
  </form>
</div>

@endsection