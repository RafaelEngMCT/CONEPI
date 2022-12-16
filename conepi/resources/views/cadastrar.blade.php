@extends('layouts.main')

@section('title','CADASTRO')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de EPI</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Codigo:</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Codigo de Barras">
        </div>
        <div class="form-group">
            <label for="title">EPI:</label>
            <input type="text" class="form-control" id="epi" name="epi" placeholder="Luva Emborrachada">
        </div>
        <div class="form-group">
            <label for="title">CA:</label>
            <input type="text" class="form-control" id="ca" name="ca" placeholder="CA">
        </div>
        <div class="form-group">
            <label for="title">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar EPI">
    </form>
</div>
@endsection('content')