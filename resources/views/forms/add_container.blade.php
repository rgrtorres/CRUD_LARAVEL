@extends('layout.body')

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-success">{{ $error }}</div>
        @endforeach
    @endif
    <form action="{{ route('container.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-2">
            <input class="form-control" name="nome" placeholder="Leave a comment here" id="floatingTextarea">
            <label for="floatingTextarea">Container</label>
        </div>

        <div class="form-floating">
            <select class="form-select mb-2" name="tipo" id="floatingSelect" aria-label="Floating label select example">
                <option value="" selected>Escolha uma opção</option>
                <option value="20DV">20 DV</option>
                <option value="40DV">40 DV</option>
            </select>
            <label for="floatingSelect">Tipo</label>
        </div>

        <div class="form-floating">
            <select class="form-select mb-2" name="status" id="floatingSelect" aria-label="Floating label select example">
                <option value="" selected>Escolha uma opção</option>
                <option value="Cheio">Cheio</option>
                <option value="Vazio">Vazio</option>
            </select>
            <label for="floatingSelect">Status</label>
        </div>

        <div class="form-floating">
            <select class="form-select mb-2" name="categoria" id="floatingSelect"
                aria-label="Floating label select example">
                <option value="" selected>Escolha uma opção</option>
                <option value="Exportação">Exportação</option>
                <option value="Importação">Importação</option>
            </select>
            <label for="floatingSelect">Categoria</label>
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Inserir container</button>
    </form>
@stop
