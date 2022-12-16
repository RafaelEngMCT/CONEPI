@extends('layouts.main')

@section('title',$epi->epi)

@section('content')
<div class="col-md-10 offset-md-1">
    <div id="info-container" class="col-md-6">
        <h1>{{$epi->epi}}</h1>
        <p>CA: {{ $epi->ca }}</p>
        <p>Proprietário: {{ $epi->proprietario }}</p>
        <p>Data de entrega: {{ $epi->updated_at }}</p>
        <a href="/events/edit/{{$epi->id}}" class="btn btn-primary" id="epi-submit">Editar</a>
    </div>
</div>
@endsection('content')