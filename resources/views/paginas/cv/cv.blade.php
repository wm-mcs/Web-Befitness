@extends('layouts.user_layout.user_layout')



@section('og-tags')
<meta property="og:title" content="Curriculum Vitae  | {{$Empresa->name}}">
     <meta property="og:description" content="Licenciado en Psicología Javier Jesús Mangini Colombo">
     <meta property="og:image" content="http://javiermanjini.worldmaster.com.uy/imagenes/Cv/Psic%C3%B3logo-Javier-Mangini-cv-4.jpg">
     <meta property="og:url" content="{{route('get_pagina_cv')}}">
@stop


@section('title')
   Curriculum Vitae  | {{$Empresa->name}}
@stop


@section('MetaContent')
  Licenciado en Psicología Javier Jesús Mangini Colombo; Psicólogo clínico en Montevideo en consultorio privado, esto no solo implica terapia propiamente dicha sino que también la realización de informes Psicodiagnosticos, Psicopedagogicos, Pedagógicos y Orientación Vocacional.
@stop

@section('MetaRobot')
 index,follow
@stop

@section('palabras-claves')

@stop



@section('content')

<div  class="{{-- masthead --}} get_width_100 "  >
  
<div id="carouselExampleIndicators" class="carousel slide auto" data-ride="carousel" data-interval="5000">
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="post-img-slider-size Slider_cabecer_img" src="{{$Empresa->url_img_cv_portada}}" align="Cv de {{$Empresa->name}}"> 
     
    </div>
   
  </div>


      <div class="carousel-caption  Slider-Contendor d-md-block Helper-OrdenarHijos-Row">
        <div class="get_width_100 flex-row-center" style="min-height: 100vh;">
          <div class="get_width_100">
              <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase Slider_cabecera_caption_titulo text-color-black">
                  <strong>{{$Empresa->name}}</strong>
                </h1>
               </div>  
          </div>
        </div>
      </div>
      {{-- <img src="{{url()}}/imagenes/580b57fcd9996e24bc43c513.png" class="Slider_cabecera_caption_logo">   --}}
  

</div>
</div>

  


   <div class="contenedor-listado-noticias" id="contenido-noticia"> 
    
       {{html_entity_decode($Empresa->contenido_cv_render)}}

   </div>

  


@stop