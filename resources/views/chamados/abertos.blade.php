@extends('master')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
@parent

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Aberto por</th>
        <th>Em</th>
        <th>Status</th>
        <th>Tipo</th>
        <th>Descrição</th>
      </tr>
    </thead>

    <tbody>

@forelse ($chamados->sortBy('created_at') as $chamado)
      <tr>
        <td>{{ $chamado->user->name }}</td>
        <td>{{ Carbon\Carbon::parse($chamado->created_at)->format('d/m/Y H:i') }}</td>
        <td>{{ $chamado->status }}</td>
        <td>{{ $chamado->tipo }}</td>
        <td><a href="/chamados/{{$chamado->site_id}}/{{$chamado->id}}">{{ $chamado->descricao }}</a></td>
      </tr>
@empty
    <tr>
        <td colspan="5">Não há chamados abertos</td>
    </tr>
@endforelse
</tbody>
</table>

</div>


@stop