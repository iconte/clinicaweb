@extends('layouts.app')

@section('stylecss')

<style media="screen">
    .img-avatar-xs {
        width: 30px;
        height: 30px;
        border: 1px solid #c0c0c0;
        border-radius: 5px;
    }
    .a-line {
        line-height: 30px;
    }
</style>

@endsection

@section('content')

<div class="container">



    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Medicamentos   <a href="#" class="float-right"><small><i class="fas fa-plus"></i> Adicionar</small> </a></h6>

        <table class="table table-hover" style="margin-bottom: inherit">
            <thead>
            <tr>
                <th>Principio ativo</th>
                <th>Nome comercial</th>
                <th>Fabricante</th>
                <th>&nbsp; </th>
                <th>&nbsp; </th>

            </tr>
            </thead>
            <tbody>
            @foreach ($medicamentos as $medicamento)
                <tr>
                    <td>{{ $medicamento->principio_ativo }}</td>
                    <td>{{ $medicamento->nome_comercial }}</td>
                    <td>{{ $medicamento->fabricante->nome_fabricante }}</td>
                    <td> <a class='a-line' href="{{ url('medicamento/edit/'.$medicamento->id) }}"><i class="fas fa-edit fa-lg"></i></a></td>
                     <td><a class='a-line' href="{{ url('medicamento/'.$medicamento->id) }}"><i class="fas fa-trash fa-lg"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
        <span>Total de registros:  {{ $medicamentos->total() }}</span>
        {{ $medicamentos->links() }}
    </div>

    </div>
</div>

@endsection
