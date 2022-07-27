@extends('layout.body')

@section('content')
    @foreach ($vars['oldContainer'] as $container)
        <form action="{{$container->id}}/update" method="POST">
            @csrf
            <div class="form-floating mb-2">
                <input class="form-control" name="nome" value ="{{$container->nome}}" placeholder="Leave a comment here" id="floatingTextarea">
                <label for="floatingTextarea">Container</label>
            </div>

            <div class="form-floating">
                <select class="form-select mb-2" name="tipo" id="floatingSelect" aria-label="Floating label select example">
                    <option value="20DV" @if($container->tipo == "20DV") selected @endif>20 DV</option>
                    <option value="40DV" @if($container->tipo == "40DV") selected @endif>40 DV</option>
                </select>
                <label for="floatingSelect">Tipo</label>
            </div>

            <div class="form-floating">
                <select class="form-select mb-2" name="status" id="floatingSelect" aria-label="Floating label select example">
                    <option value="Cheio" @if($container->status == "cheio") selected @endif>Cheio</option>
                    <option value="Vazio" @if($container->status == "vazio") selected @endif>Vazio</option>
                </select>
                <label for="floatingSelect">Status</label>
            </div>

            <div class="form-floating">
                <select class="form-select mb-2" name="categoria" id="floatingSelect"
                aria-label="Floating label select example">
                    <option value="Exportação" @if($container->categoria == "Exportação") selected @endif>Exportação</option>
                    <option value="Importação" @if($container->categoria == "Importação") selected @endif>Importação</option>
                </select>
                <label for="floatingSelect">Categoria</label>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Editar container</button>
        </form>
    @endforeach
@stop
