<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nombreHeladeria = "HELADERIA URBANO'S";
    $nombreAdministrador = "Breiner Urbano";
    $ciudad = "La Cruz Nariño";
    $edad = 20;
    $diaSemana = "Martes";
    $saborDisponible = true;

    $categorias = [
        [
            'id' => 1,
            'nombre' => 'Ensaladas y Postres',
            'descripcion' => 'Preparaciones frescas con frutas, crema y helado.',
        ],
        [
            'id' => 2,
            'nombre' => 'Malteadas y Conos',
            'descripcion' => 'Bebidas cremosas y conos artesanales variados.',
        ],
    ];

    $productos = [
        [
            'nombre' => 'Ensalada de Frutas Especial',
            'imagen' => 'img/ensalada.jpg',
            'alt' => 'Ensalada de Frutas Especial',
            'descripcion' => 'Mezcla de frutas frescas, crema de leche, queso rallado y dos bolas de helado al gusto.',
            'precio' => '$12.000',
            'disponible' => true,
            'categoria_id' => 1,
        ],
        [
            'nombre' => 'Banana Split Clásico',
            'imagen' => 'img/bananasplit.jpg',
            'alt' => 'Banana Split Clásico',
            'descripcion' => 'Banano fresco cortado con tres bolas de helado, crema batida, salsa de chocolate y cereza.',
            'precio' => '$10.000',
            'disponible' => true,
            'categoria_id' => 1,
        ],
        [
            'nombre' => 'Malteada Oreo',
            'imagen' => 'img/malteada.jpg',
            'alt' => 'Malteada Oreo',
            'descripcion' => 'Cremosa y espesa malteada de galleta Oreo, coronada con crema chantilly y chispas de chocolate.',
            'precio' => '$9.000',
            'disponible' => true,
            'categoria_id' => 2,
        ],
        [
            'nombre' => 'Cono Doble Crocante',
            'imagen' => 'img/cono.jpg',
            'alt' => 'Cono Doble Crocante',
            'descripcion' => 'Barquillo de galleta crujiente servido con dos bolas generosas de tus sabores preferidos.',
            'precio' => '$5.000',
            'disponible' => $saborDisponible,
            'categoria_id' => 2,
        ],
    ];

    return view('heladeria', compact(
        'nombreHeladeria',
        'nombreAdministrador',
        'ciudad',
        'edad',
        'diaSemana',
        'saborDisponible',
        'categorias',
        'productos'
    ));
});
