@extends('layout.body')

@section('content')
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('container.insert')}}" class="btn btn-primary">Novo registro</a>
    </div>

    <table class="table" style="width: 100%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Container</th>
                <th scope="col">DV/HC</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vars['containers'] as $container)
            <tr>
                <th scope="row">{{ $container->id }}</th>
                <td>{{$container->nome}}</td>
                <td>{{$container->tipo}}</td>
                <td>
                    <a href="containers/edit/{{$container->id}}">
                        <i class="bi bi-wrench-adjustable"></i>
                    </a>

                    <a href="javascript:;" onclick="deletar({{$container->id}})">
                        <i class="bi bi-trash3"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
