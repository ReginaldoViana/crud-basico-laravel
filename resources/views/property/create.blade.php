@extends('property.master')

@section('content')

<div class="container my-3">

    <h1>Formulário de Cadastro :: Imóveis</h1>

    <form action="<?= url('/imoveis/store')?>" method="post">

    <?= csrf_field(); ?>

    <div class="form-group">
        <label for="title">Título do imóvel</label>
        <input class="form-control" type="text" name="title" id="title">
    </div>

    <div class="form-group">
        <label for="description">Descrição</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label for="rental_price">Valor de locação</label>
        <input class="form-control" type="text" name="rental_price" id="rental_price">
    </div>

    <div class="form-group">
        <label for="sale_price">Volor de compra</label>
        <input class="form-control" type="text" name="sale_price" id="sale_price">
    </div>

    <button class="btn btn-primary" type="submit">Cadastrar imóvel</button>
    </form>

</div>

@endsection