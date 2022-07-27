@extends('layout.body')

@section('content')
    <form action="">
        <div class="form-floating mb-2">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" disabled>MEDU12549873</textarea>
            <label for="floatingTextarea">Container</label>
        </div>

        <div class="form-floating">
            <select class="form-select mb-2" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Escolha uma opção</option>
                <option value="1">Embarque</option>
                <option value="2">Descarga</option>
                <option value="1">Gate-in</option>
                <option value="2">Gate-out</option>
                <option value="2">Reposicionamento</option>
                <option value="2">Pesagem</option>
                <option value="2">Scanner</option>
            </select>
            <label for="floatingSelect">Movimentação</label>
        </div>

        <div class="form-floating mb-2">
            <input type="time" class="form-control">
            <label for="floatingTextarea">Hora de Início</label>
        </div>

        <div class="form-floating mb-2">
            <input type="time" class="form-control">
            <label for="floatingTextarea">Hora de Saída</label>
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Incluir movimentação</button>
    </form>
@stop
