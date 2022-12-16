@extends('layouts.main')

@section('title','CONSULTA')

@section('content')
<div id="search-container" class="col-md-12">
        <h1>Consulta de EPI</h1>
        <form action="/events/show" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Código de barras">
        </form>
</div>

<div>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Epi</th>
      <th scope="col">CA</th>
      <th scope="col">Quantidade</th>
    </tr>
  </thead>
  <tbody>
        @foreach($esto as $estos)
                <tr>
                        <td>{{$estos->epi}}</td>
                        <td>{{$estos->ca}}</td>
                        <td>{{$estos->quantidade}}</td>
                </tr>
        @endforeach
  </tbody>
</table>
</div>

@endsection('content')