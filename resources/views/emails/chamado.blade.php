Novo chamado para o site {{ $chamado->site->dominio.config('sites.dnszone') }}

<div>
Número USP: {{ $user->codpes }} <br>
Nome: {{ $user->name }}   <br>
Número do chamado: {{$chamado->site->id}}/{{$chamado->id}}  <br>
Chamado: <a href="{{config('app.url')}}/chamados/{{$chamado->site->id}}/{{$chamado->id}}">
  {{config('app.url')}}/chamados/{{$chamado->site->id}}/{{$chamado->id}}
</a>
</div>

<br>

<b>Tipo:</b> {{ $chamado->tipo }} <br>
<b>Chamado:</b> {!! $chamado->descricao !!} <br>


Mensagem automática do sistema de gestão de sites: {{ config('app.url') }}

