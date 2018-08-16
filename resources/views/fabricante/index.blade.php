@extends('layouts.app')

@section('stylecss')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/datatables.min.css"/>

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
        <h6 class="border-bottom border-gray pb-2 mb-0">Fabricantes    <a href="#" class="float-right"><small><i class="fas fa-plus"></i> Adicionar</small> </a></h6>

        {{--<table class="table table-hover" style="margin-bottom: inherit">--}}
            {{--<tbody>--}}
            {{--@foreach ($fabricantes as $fabricante)--}}
                {{--<tr>--}}
                    {{--<td><i class="fas fa-industry fa-lg"></i> {{ $fabricante->nome_fabricante }}</td>--}}
                    {{--<td> <a class='a-line' href="{{ url('fabricante/edit/'.$fabricante->id) }}"><i class="fas fa-edit fa-lg"></i></a></td>--}}
                    {{--<td> <a class='a-line' href="{{ url('fabricante/'.$fabricante->id) }}"><i class="fas fa-trash fa-lg"></i></a></td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
        <table id="fabricantes-table" class="table table-hover" style="margin-bottom: inherit">
            <thead>
                <tr>
                    <th>Nome Fabricante</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
        {{--<span>Total de registros:  {{ $fabricantes->total() }}</span>--}}
    {{--<div class="text-xs-center">  {{ $fabricantes->links() }}</div>--}}
    </div>

</div>

@endsection

<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>



    <script type="text/javascript" >
            $('#fabricante-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('api.fabricantedata')}}",
                columns: [
                    {data:'nome_fabricante', name:'Fabricante'},
                    {data:'action', name:'action', orderable:false,searchable:false}
                ]
            });

    </script>
