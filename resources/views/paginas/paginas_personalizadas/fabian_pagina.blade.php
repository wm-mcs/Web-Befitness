@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/fabian-delpino-abogado-especialista-en-desalojos-en-uruguay.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo_cuadrado.png' /*--}}
{{--*/ $Titulo                = 'Delpino & Asociados | Abogados especialistas en desalojos' /*--}} 
{{--*/ $DescriptionEtiqueta   = '¿Quieres desalojar a alguien?, ¿tu inquilino no se quiere ir?, ¿Te han ocupado tu casa sin tu permiso?, soy Fabian Delpino abogado experto en desalojos en Uruguay. 
.
 ' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}

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

      <div class="container-fluid"  style="padding: 0 30px;">
        <div class="row align-items-center justify-content-between">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu  mr-auto ">
                <li>
                    <a v-show="mostrar_logo_nav" href="{{url()}}" class="nav-link">
                      <img v-if="mostrar_para_grande" style="height: 30px;" :src="empresa.img_logo_horizontal">
                      <img v-else style="height: 40px;" :src="empresa.img_logo_horizontal_v2">
                      
                    </a>
                </li>
                
                
              </ul>
            </nav>
          </div>

        

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">               
                <li><a href="#sobre-mi" class="nav-link">QUIENES SOMOS</a></li>
                <li><a href="#contact-section" class="nav-link">CONTACTO</a></li>
                @if(!Auth::guest())
                  <li><a href="{{route('get_datos_corporativos')}}" class="nav-link">ADMINISTRAR</a></li>
                  <li><a href="{{route('logout')}}" class="nav-link">SALIR</a></li>
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
   

     <div class="site-blocks-cover overlay " id="home-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-8">
                {{-- <h1 v-if="se_muestra(empresa.home_titulo)" class="text-dark">¿Quieres desalojar a alguien?</h1>
                
                <p  class="lead text-dark"> ¿Tu inquilino no se quiere ir?  ¿Te ocuparon tu casa sin tu permiso?</p>
                
                <div class="flex-row-center">
                 <img src="{{$ImagenParaTaG}}" class="img-atencion-precios">
                 <a href="#contact-section" class="btn smoothscroll btn-primary"> Contáctanos </a>
                 <img class="icono-uruguay-home" src="{{url()}}/imagenes/PaginasPersonalizadas/abogado-en-uruguay-experto-en-desalojo-bandera-uruguay.png" alt="Abogado en Uruguay experto en desalojo. Mi nombre es Fabian Delpino y me especializo en desalojos.">

                </div> --}}
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img class="post-img-slider-size Slider_cabecer_img" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="Fabian Delpino"> 
        <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
      
       

    </div>  






  <div  class="site-section " id="sobre-mi">
      <div class="container">
        <div class="row" >
         <div class="contiene-presentacion">
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <h1 class="contiene-h1-presentacion  color-text-black">Recuperación de inmuebles</h1>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <div class="boton-contactar-presentacion">Contactar</div>

          </div>
          <div class="contiene-cada-div-presentacion">
            <p class="contiene-p-presentacion color-text-black">
              Brindamos  <strong>soluciones eficaces</strong>, a los efectos de una pronta recuperación de inmuebles arrendados u ocupados, para complacer así las necesidades de nuestros clientes de forma segura y con la mayor celeridad posible. Ofrecemos un servicio personalizado, de <strong>aranceles accesibles</strong>, a medida de cada necesidad.
            </p>

          </div>
           
         </div>
          
        </div>
      </div>
    </div>


     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
       <div class="presentacion-imagen-paralax"></div>
         <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
       
      </div> 
      


      <div  class="site-section BackgroundOscuro" id="sobre-mi">
      <div class="container">
        <div class="row" >
         <div class="contiene-presentacion">
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <h1 class="contiene-h1-presentacion color-text-white">Desalojos de inmuebles</h1>

          </div>
          <div class="contiene-cada-div-presentacion no-mostrar-solo-mobil"></div>
          <div class="contiene-cada-div-presentacion ajuste-de-posicion-para-presentacion">
            <div class="boton-contactar-presentacion-blanco">Contactar</div>

          </div>
          <div class="contiene-cada-div-presentacion">
            <p class="contiene-p-presentacion color-text-white">
              Brindamos  <strong>soluciones eficaces</strong>, a los efectos de una pronta recuperación de inmuebles arrendados u ocupados, para complacer así las necesidades de nuestros clientes de forma segura y con la mayor celeridad posible. Ofrecemos un servicio personalizado, de <strong>aranceles accesibles</strong>, a medida de cada necesidad.
            </p>

          </div>
           
         </div>
          
        </div>
      </div>
    </div>

     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
       <div class="presentacion-imagen-secundaria-paralax"></div>
         <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
       
      </div> 


       <div  class="site-section BackgroundGris" id="sobre-mi">
      <div class="container">
        <div class="row" >
         <div class="col-12 mb-4 d-flex justify-content-around flex-wrap align-items-center">
          <div class="col-lg-6 order-2">
            <h1 class="contiene-h1-presentacion color-text-black text-left">Alcance nacional</h1>
            <p class="contiene-p-presentacion color-text-black">Nuestro servicio integral crece permanentemente y ahora se extiende a todo el territorio nacional, siendo el único estudio especializado en desalojos.
            </p>

          </div>
          <div class="col-lg-6 order-1 pl-lg-5 ">
            <img src="{{url()}}/imagenes/PaginasPersonalizadas/uruguay-mapa.png" alt="Image" class="img-fluid mb-4 helper-border-radius-16">
          </div>
          
          
           
         </div>
          
        </div>
      </div>
    </div>

     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
       <div class="presentacion-imagen-paralax-prueba"></div>
         <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
       
      </div> 








     




   
     {{-- Imagen con logo para mostrar por el medio --}}
     {{--  <div class="contiene-todo-image-centrada">
        <img src="{{url()}}/imagenes/PaginasPersonalizadas/fabian-delpino-abogado-uruguayo-que-se-especializa-es-desalojos.jpg" alt="Abogado especializado en desalojos dentro de Uruguay. Fabian Delpino" class="imagen-medio-de-web">
         <img class="logo-float-easy-socio-portada" :src="empresa.img_logo_horizontal_blanco" alt="Estudio Delpino y Sanchez">
        <div class="sub-contiene-texto-imagen-medio">
          <div class="contiene-texto-imagen-medio-texto mb-4">¿Prestaste tu casa y no te la quieren devolver? ¿El inquilino es mal pagador? ¿Alquien te ocupó tu casa sin tu permiso?  no pierdas más tiempo actuá cuanto antes. Somos abogados expertos en desalojos dentro de Uruguay Montevideo  </div>
          <div class="flex-row-center">
                 <img src="{{$ImagenParaTaG}}" class="img-atencion-precios">
                 <a href="#contact-section" class="btn smoothscroll btn-primary"> Contáctanos</a>
                 <img class="icono-uruguay-home" src="{{url()}}/imagenes/PaginasPersonalizadas/abogado-en-uruguay-experto-en-desalojo-bandera-uruguay.png" alt="Abogado en Uruguay experto en desalojo. Mi nombre es Fabian Delpino y me especializo en desalojos.">

                </div>
          
        </div>
      </div> --}}

{{-- 
    <section v-if="blogs.length" class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Datos de interés</h2>
          </div>

           <blog-list-component v-for="blog in blogs" :empresa="empresa" :blog="blog" :key="blog.id" ></blog-list-component>

           

        </div>
      </div>
    </section> --}}







    

    

   


   

    

    

@stop