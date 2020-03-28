<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\ProyectoRepo;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\MarcaRepo;
use App\Repositorios\Marca_de_eventoRepo;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;


class Paginas_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $ProyectoRepo;
    protected $NoticiasRepo;
    protected $EmpresaRepo;
    protected $MarcaRepo;
    protected $EventoRepo;
    protected $Marca_de_eventoRepo;

    public function __construct(ImgHomeRepo         $ImgHomeRepo,
                                ProyectoRepo        $ProyectoRepo, 
                                NoticiasRepo        $NoticiasRepo,
                                EmpresaRepo         $EmpresaRepo, 
                                MarcaRepo           $MarcaRepo,
                                Marca_de_eventoRepo $Marca_de_eventoRepo   )
    {
        $this->ProyectoRepo        = $ProyectoRepo;
        $this->ImgHomeRepo         = $ImgHomeRepo;
        $this->NoticiasRepo        = $NoticiasRepo;
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->MarcaRepo           = $MarcaRepo;       
        $this->Marca_de_eventoRepo = $Marca_de_eventoRepo;
    }

    //Contacto
    public function get_pagina_contacto()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.contacto.contacto', compact('Empresa'));
    }

    //pagina donde estan las marcas
    public function get_pagina_marcas(Request $Request)
    {

        $Marcas          =   $this->MarcaRepo->getMarcasParaWebOrdenadasAlfabeticamente($Request,20);
        $Marcas_buscador =   $this->MarcaRepo->getMarcasParaWebOrdenadasAlfabeticamenteSinPaginacion();

        $Marca = '';

        if($Request->get('select_marcas_id') != '' && ($Request->get('select_marcas_id') != null))
        {
         $Marca = $this->MarcaRepo->find($Request->get('select_marcas_id'));

         //redireccion a la pagina de eventos de esa Marca
         return redirect($Marca->route);
        }
        //consultar todas rango altorandom 
        $MarcasRango3 = $this->MarcaRepo->getMarcasDesordenadasRandomSegunRank(3, null);
        $MarcasRango2 = $this->MarcaRepo->getMarcasDesordenadasRandomSegunRank(2, null);;
        $MarcasRango1 = $this->MarcaRepo->getMarcasDesordenadasRandomSegunRank(1, null);;

        //consultar las demas

        //cosnultar las demas


        return view('paginas.marcas.marcas', compact('MarcasRango3','MarcasRango2','MarcasRango1','Marcas','Marca','Marcas_buscador'));
    }
        //pagina de la marca individual
        public function get_pagina_marca_individual($name,$id,Request $Request)
        {
            $Marca   = $this->MarcaRepo->find($id);

            //le envio los eventos de esa marca    
            $Eventos_id = $this->Marca_de_eventoRepo->getEventosDeEstaMarcaActivosYPaginados('marca_id',$id,'desc',10,$Request);  

            $Eventos = $this->EventoRepo->getEventosArrayDeEventosID($Eventos_id,10);

           

            $Empresa = $this->EmpresaRepo->getEmpresaDatos();       
           
            return view('paginas.marcas.marca_individual', compact('Marca','Eventos','Empresa'));
        }


    


    //Empresa
    public function get_pagina_empresa()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.empresa.empresa', compact('Empresa'));
    }

    

    //servicios
    public function get_pagina_servicios()
    {
        return view('paginas.servicios.servicios');
    }

    //Noticias
    public function get_pagina_noticias_listado(Request $Request)
    {
        $Noticias = $this->NoticiasRepo->getEntidadActivasPaginadas($Request,50);
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $Route                = 'post_contacto_form';   

        return view('paginas.noticias.noticias',compact('Noticias','Empresa','Route'));
    }



    //Noticias Individual
    public function get_pagina_noticia_individual($name,$id)
    {
        $Noticia  = $this->NoticiasRepo->find($id);
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $Route                = 'post_contacto_form';  
        $blogs    = $this->NoticiasRepo->getUltimosBlogs();
        
        return view('paginas.noticias.noticia_individual',compact('Noticia','Empresa','Route','blogs'));
    }

    //Proyectos
    public function get_pagina_proyecto_listado(Request $Request)
    {
        $Proyectos = $this->ProyectoRepo->getEntidadActivasPaginadas($Request,3) ;
        return view('paginas.proyecto.proyecto_listado', compact('Proyectos'));
    }

    public function get_pagina_proyecto_individual($name,$id)
    {

        $Proyecto = $this->ProyectoRepo->find($id);

        return view('paginas.proyecto.proyecto_individual',compact('Proyecto'));
    }



    public function get_pagina_cv()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.cv.cv', compact('Empresa'));
    }



    public function get_pagina_de_web_profesionales()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $blogs    = $this->NoticiasRepo->getUltimosBlogs();
        return view('paginas.paginas_personalizadas.webs_profesionales', compact('Empresa','blogs'));
    }

    public function get_pagina_de_web_para_pymes()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $blogs    = $this->NoticiasRepo->getUltimosBlogs();
        return view('paginas.paginas_personalizadas.webs_para_pymes', compact('Empresa','blogs'));
    }


    public function get_programa_para_gestionar_gimancios()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $blogs    = $this->NoticiasRepo->getUltimosBlogs();
        return view('paginas.paginas_personalizadas.programa_para_gestionar_gimnacios', compact('Empresa','blogs'));
    }

    public function get_programa_para_gestionar_academias_de_baile()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $blogs    = $this->NoticiasRepo->getUltimosBlogs();
        return view('paginas.paginas_personalizadas.programa_para_gestionar_academias', compact('Empresa','blogs'));
    }



    



}