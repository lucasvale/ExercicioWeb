@extends('layouts.principal')
        
@section('conteudo')
<div class="table-borderless">
        <h1>Listagem de Usuarios</h1>
        <table class="table table-striped">
              @foreach ($usuarios as $p) 
            <tr>
                <td>{{$p->nome}}</td>
                <td>{{$p->cep }}</td>
                <td>{{$p->rua}}</td>
                <td>{{$p->cidade}}</td>
                <td>{{$p->bairro}}</td>
             @endforeach 
        </table>
</div>