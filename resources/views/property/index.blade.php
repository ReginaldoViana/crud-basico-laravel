@extends('property.master')

@section('content')
<div class="container my-3">

    <h1>Listagem de Produtos</h1>
    <?php

    if(!empty($properties)){

        echo "<table class='table table-striped table-hover'>
                <thead class='bg-primary text-white'>
                    <th>Título: </th>
                    <th>Preço aluguel: </th>
                    <th>Preço compra: </th>
                    <th>Ações:</th>
                </thead>";

        foreach($properties as $property){

            $linkReadMode = url('/imoveis/'.$property->name);
            $linkEditItem = url('/imoveis/editar/'.$property->name);
            $linkRemoveItem = url('/imoveis/remover/'.$property->name);

            echo "<tr>
                    <td>{$property->title}</td>
                    <td>R$ ". number_format($property->rental_price, 2, ',', '.') ."</td>
                    <td>R$ ". number_format($property->sale_price, 2, ',', '.') . "</td>
                    <td><a href='{$linkReadMode}'>Ver mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Remover</a></td>
                </td>";
        }
        

        echo "</table>";


    }
    ?>
</div>


@endsection