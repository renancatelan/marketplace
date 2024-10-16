<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('welcome');
});

//Chamando rotas MSFLIX ORGANIZAD
foreach(File::allFiles(__DIR__.'/web') as $route_file){
    require $route_file->getPathname();
}

require __DIR__.'/auth.php';



