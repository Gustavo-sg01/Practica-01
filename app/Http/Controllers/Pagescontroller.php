<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Pagescontroller extends Controller
{
    public function inicio()
    {

        $notas = App\Nota::all();
        return view('welcome',\compact('notas'));
    }

    public function nosotros($nombre= null)
    {
       
                     // Declaracion del arreglo estatico 
                     $equipo = ['Ingnacio','Pedro','Natalia','Gustavo','Karla','Carlos'];
                     
                    
                     // sintaxis para ienviar un parametro atraves de la 
                              // ruto creada para la vista (Nosotros)
                  //return view('Nosotros',['equipo'=>$equipo,'nombre'=>$nombre]);// foto

                  // esta es otra manera pero se esta utilizando el comando compac de blade
                  return view('Nosotros',compact('equipo','nombre'));// foto
                

    }

   public function blogs()
   {
    return view('blog');
   }

   public function album()
   {
    return view('album');
   }
   

}
