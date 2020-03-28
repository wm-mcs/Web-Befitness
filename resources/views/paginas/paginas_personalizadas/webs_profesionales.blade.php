@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/pagina-web-prefesionales.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/mauricio-costanzo-desarrollador-prgramador.jpg'/*--}}
{{--*/ $Titulo                = 'Páginas web para profesionales' /*--}}
{{--*/ $DescriptionEtiqueta   = 'La carta de presentación del profesional. ¿Tu objetivo es aumentar tus ventas?, ¿conseguir nuevos clientes?, ¿dar a conocer tus talentos al mundo?, ¿te gustaría convertirte en un candidato muchos más cotizado a la hora de buscar un nuevo trabajo?  estás en la página correcta!, aquí te voy a ofrecerte un plan, para que puedas cumplir con esos objetivos. ' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_de_web_profesionales') /*--}}

@section('og-tags')
 <meta property="og:type"               content="website" />
 <meta property="og:title"              content="{{ $Titulo}} " />
 <meta property="og:description"        content="{{$DescriptionEtiqueta}}" />
 <meta property="og:image"              content="{{$ImagenParaTaG }}" />
 <meta property="og:image:secure_url"   content="{{$ImagenParaTaG }}" /> 
 <meta property="og:image:width"        content="250">
 <meta property="og:image:height"       content="250">


@stop 


@section('data-estructurada')

 <script type="application/ld+json">
        {
         "@context": "http://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "{{$UrlDeLaPagina}}",
            "name": "{{$Titulo}}"
            }
          }          
         ]
        }
</script>


@stop




@section('title')
   {{$Titulo}}
@stop


@section('MetaContent')
      {{$DescriptionEtiqueta}}
@stop

@section('MetaRobot')
 index,follow
@stop

@section('palabras-claves')
{{$PalabrasClaves}}
@stop


@section('vue')
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{url()}}" class="nav-link">Home</a></li>
                
                
              </ul>
            </nav>
          </div>

        

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">               
                <li><a href="#precios-section" class="nav-link">Precios</a></li>
                <li><a href="#contact-section" class="nav-link">Contacto</a></li>
                @if(!Auth::guest())
                  <li><a href="{{route('get_datos_corporativos')}}" class="nav-link">Administrar</a></li>
                  <li><a href="{{route('logout')}}" class="nav-link">Salir</a></li>
                @endif
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

@stop


@section('contenido')
   

     <div class="site-blocks-cover overlay bg-light" id="home-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-8">
                <h1 v-if="se_muestra(empresa.home_titulo)" class="text-white">{{$Titulo}}</h1>
                <p class="text-secondary"> Arquitectos, doctores, abogados, psicólogos, contadores, ingenieros y más </p>
                <p v-if="se_muestra(empresa.home_subtitulo)" class="lead"> Úsala para vender tus servicios, comunicar tus logros como profesional. Será tu carta de presentación</p>
                <p><a href="#about-section" class="btn smoothscroll btn-primary"> Más información </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img class="post-img-slider-size Slider_cabecer_img" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="Software simple de usar para gestionar tu gimnasio, centro de fitness, box de crossfit o entrenamiento funcional"> 
       

    </div>  






  <div  class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">La carta de presentación del profesional </h2>
          <p><strong>¿Tu objetivo es aumentar tus ventas?, ¿conseguir nuevos clientes?, ¿dar a conocer tus talentos al mundo?, ¿te gustaría convertirte en un candidato muchos más cotizado a la hora de buscar un nuevo trabajo?</strong>  estás en la página correcta!, aquí te voy a ofrecerte un plan, para que puedas cumplir con esos objetivos.
          </p>   

          <p>Lo primero que tienes que saber es que tener un página web <strong> te va a ayudar a centralizar toda la información con respecto a ti</strong> va ser como  <strong>tu curriculum vitae pero mostrado de una forma super linda e inteligente</strong> . Podrás incluir por ejemplo <strong>todos tus datos de contacto y redes sociales, podrás contarnos quién eres y en qué eres bueno/a, vas a poder exponer toda tu experiencia como profesional</strong> . 
          </p> 

          <p>
            En el momento en el que te decidas por una página web como tu carta de presentación ante el mundo,  debes saber cómo están hechas, cuáles son sus beneficios y las funcionalidades que te ofrece para ayudarte a destacar como profesional . <strong><a href="#about-responsive">Más información</a></strong>
          </p>





          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/pagina-web-como-carta-de-presentación-es-tu-cuuriculumn-vita.jpg" alt="Podrás contar toda tu trayectoría personal. Tal cual lo haces en tu curriculumn vita pero la información estára organizada de un manera mucho más lindo e inteligente.">
          </div>
        </div>
      </div>
    </div>


     @include('paginas.paginas_personalizadas.partial_caracteristicas_paginas_web')

     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
        <img src="{{url()}}/imagenes/PaginasPersonalizadas/paginas-webs-mauricio-costanzo-responsive.jpg" class="imagen-medio-de-web">
        <div class="sub-contiene-texto-imagen-medio">
          <div class="contiene-texto-imagen-medio-texto">Tu pagina web será tu carta de presentación ante el mundo.  </div>
          
        </div>
      </div>




     <section class="site-section bg-light" id="precios-section">
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Precio</h2>
            
          </div>

           <div class=" mb-5 mb-lg-0 get_width_100 flex-row-center flex-justifice-space-around  flex-wrap">
            @include('paginas.home.home_precios')
           </div>



          <div class="get_width_100 flex-row-center flex-justifice-space-around">
             <div class="Seccion_precio_aclaracion">
                * El primer año el Hosting y mantenimiento son gratis y si tu dominio es ".com" también. A partir del segundo año deberás abonar U$S 150 (cada año) por dichos conceptos. <br>* Si quieres un dominio por ejemplo "tudominio.com.ar o tudominio.com.uy" deberás comprarlo con el respectivo proveedor, te voy a ayduar con eso. <br>* En Uruguay sería con ANTEL y ellos te van a cobrar algo así como $500 por año. 
                <br>* Los precios no incluyen inpuestos.     

                     
             </div>
          </div>
           
           

        </div>
      </div>
    </section>




    

    

   


   

    

    <section v-if="blogs.length" class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Blog</h2>
          </div>

           <blog-list-component v-for="blog in blogs" :empresa="empresa" :blog="blog" :key="blog.id" ></blog-list-component>

           

        </div>
      </div>
    </section>

@stop
