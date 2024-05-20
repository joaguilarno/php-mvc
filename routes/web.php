<?php
use Lib\Route;

Route::get('/', function(){
    echo "Hola desde la página principal";
});

Route::get('/contacto', function(){
    echo "Hola desde la página contacto";
});

Route::get('/acerca', function(){
    echo "Hola desde la página acerca";
});

echo Route::dispatch();
?>