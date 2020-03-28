<?php 

namespace App\Repositorios;

use App\Entidades\Noticia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

/**
* Repositorio de consultas a la base de datos User
*/
class NoticiasRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Noticia();
  }

  //guetters/////////////////////////////////////////////////////////////////////


  public function getUltimosBlogs()
  {
    return Cache::remember('UltimosBlogs', 500, function() {
                              return $this->getEntidadesActivasYOrdenadas(3,'DESC'); 
                          }); 
  }

  //setters//////////////////////////////////////////////////////////////////////

  


  
}