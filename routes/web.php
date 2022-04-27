<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

// First Route
// Route -> get

Route::get('/Home', function () { 
    echo "Hola le dijo la araña a la mosca"; 
});

// Ruta de prueba

Route::get('/Home', function () {
    echo "<h1>Hola ficha 2236903</h1>";
});

Route::get('/Arreglo', function() {

    // Arreglo de estudiantes
    $estudiantes = [
        "AN" => 1,
        "KV" => "Kevin",
        "JN" => 1.5,
        "DV" => true,
        "AR" => [
            25,
            "Veinticinco"
        ],
    ];
    
    // Verificar la variable
    
    echo "<hr />";
    echo "<pre>";
    echo "<h1>Antes de eliminar</h1>";
    echo "<br>";
    var_dump($estudiantes);
    echo "<pre>";

    //Eliminar un elemnto de un array

    unset($estudiantes["JN"]);

    echo "<hr />";
    echo "<h1>Después de eliminar</h1>";
    echo "<pre>";
    var_dump($estudiantes);
    echo "<pre>";

    // Agregar un elemento al array

    $estudiantes["CA"] = "Carlos";

    echo "<hr />";
    echo "<h1>Después de agregar un elemento</h1>";
    echo "<pre>";
    var_dump($estudiantes);
    echo "<pre>";

    // Recorrer un arreglo

    // foreach ($estudiantes as $key => $e) {
    //     echo $key;
    //     echo "<hr />";
    //     echo $e;
    //     echo "<hr />";
    // }
});

Route::get('Paises', function () {

    $paises = [
        "Colombia" => [
            "capital" => "Bogotá",
            "moneda" => "Peso",
            "poblacion" => 51.6,
            "ciudades" => [
                "Medellín",
                "Barranquilla",
                "Cali",
            ]
        ],
        "Ecuador" => [
            "capital" => "Quito",
            "moneda" => "Dólar ",
            "poblacion" => 20,
            "ciudades" => [
                "Guayaquil",
                "Cuenca",
                
            ]
        ],
        "Peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 32.97,
            "ciudades" => [
                "Cusco",
                "Arequipa",
                "Trujillo",
                "Tacna"
            ]
        ],
        
        
        "Argentina" => [
            "capital" => "Buenos Aires",
            "moneda" => "Peso Argentino",
            "poblacion" => 45.38,
            "ciudades" => [
                "Rosario",
                "Santa Fe",
                
            ]
        ],

        "Francia" =>[
            "capital" => "Paris",
            "moneda" => "Euro",
            "poblacion" => 67.39,
            "ciudades" => [
                "Lyon",
                "Marsella",
                "Niza"

            ]
        ]
    ];

    // Mostrar vista de paises

    return view('paises')
           ->with('paises', $paises);
});


