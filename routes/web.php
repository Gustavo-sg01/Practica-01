<?php


/* CLASE DE LARAVEL 
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

/*
// Ruta Principal

    

// Segunda ruta 
Route::get('/saludo', function () {
    return 'Hola Mundo';
});

//Tercera Ruta
Route::get('/bienvenido', function () {
    return '';
});

// Quinta ruta ya se esta manejando un parametro 
Route::get('/fotos/{numero}', function ($numero) {
    return 'Tu numero de lista es : '.$numero;
})->where('numero','[0-9]+');

// Ruta 2 Principal
Route::get('/plantilla2', function () {
    return view('fotos');
});

// Ruta 3 Principal

//Se retorno una vista y mandamos un valor 
Route::view('galeria','fotos',['numero'=> 125]);
///////////////////////////////////////////////////////////////////////////////////////////
// Ruta de trabajo

/* Practica de rutas
Route::get('blogs', 
            function () 
            {
              return view('blog');
            }
          )->name('noticia');

Route::get('fotos', 
                    function () 
                          {
                            return view('album');// foto
                           }
          )->name('foto');
*/
/*

          // Atraves de esta ruta se esta enviando una lista de nombre
          // el cuas es un arreglo con nombre  a la vista (Nosotros)
Route::get('nosotros/{nombre?}',
          function ($nombre = null) 
                {
                     // Declaracion del arreglo estatico 
                     $equipo = ['Ingnacio','Pedro','Natalia','Gustavo','Karla'];
                     
                              // sintaxis para ienviar un parametro atraves de la 
                              // ruto creada para la vista (Nosotros)
                  //return view('Nosotros',['equipo'=>$equipo,'nombre'=>$nombre]);// foto

                  // esta es otra manera pero se esta utilizando el comando compac de blade
                  return view('Nosotros',compact('equipo','nombre'));// foto
                 }
)->name('nosotros');

*/

          // Atraves de esta ruta se esta enviando una lista de nombre
          // el cuas es un arreglo con nombre  a la vista (Nosotros)


          // Utilizacion del controlador de PagesContraller
          //   Para hacer la utilidad de rutas mediante controladores 
          Route::get('/','PagesController@inicio'); 

          Route::get('nosotros/{nombre?}','PagesController@nosotros' )->name('nosotros');

          Route::get('blogs','PagesController@blogs' )->name('blogs');

          Route::get('fotos','PagesController@album')->name('foto');