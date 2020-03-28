@extends('layouts.credo.layout_pricnipal')



@section('og-tags')
  <meta property="og:url"                content="{{$Noticia->route}}" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="{{ $Noticia->name}} | {{$Empresa->name}}" />
  <meta property="og:description"        content="
   {{$Noticia->sub_name}} | {{$Empresa->name}}." />
   <meta property="og:image"               content="{{$Noticia->url_img_portada}}" />
   <meta property="og:image:secure_url"  content="{{$Noticia->url_img_portada}}" /> 

   <meta property="og:image:alt"         content="{{$Noticia->name}} |  {{$Empresa->name}}" /> 
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
            "@id": "{{$Noticia->route}}",
            "name": "{{$Noticia->name}}"
            }
          }          
         ]
        }
</script>


@stop


@section('title')
  {{ $Noticia->name}}    | {{$Empresa->name}}
@stop


@section('MetaContent')
 {{$Noticia->sub_name}} |  {{$Empresa->name}} 
@stop

@section('MetaRobot')
  index,follow
@stop

@section('palabras-claves')
  
@stop

@section('vue')
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
<div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{route('get_home')}}" class="nav-link">Home</a></li>               
              </ul>
            </nav>
          </div>

        

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">                
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
@stop


@section('iconos-compartir')

 <div   class="get_width_100 contenedor-iconos-share">
  

 <div class="flex-row-center sub-contenedor-iconos-share">

    <div class="iconos-share-titulo"><i class="fas fa-share-alt"></i> Compartir</div>
    

    {{-- //whatzap icono --}}
    <a class="iconos-share-formato mostrar-solo-mobil" href="whatsapp://send?text={{$Noticia->route}}" data-action="share/whatsapp/share">
            <i class="fab fa-whatsapp-square"></i>
    </a>


    <a class="iconos-share-formato" href="http://facebook.com/sharer.php?u={{$Noticia->route}}">
            <i class="fab fa-facebook"></i>
    </a>

    <a class="iconos-share-formato" href="https://www.linkedin.com/shareArticle?url={{$Noticia->route}}">
            <i class="fab fa-linkedin"></i>
    </a>

    <a class="iconos-share-formato" href="https://twitter.com/?status=Me gusta esta página {{$Noticia->route}}">
            <i class="fab fa-twitter-square"></i>
    </a>
   
 </div> 



</div>

@stop





@section('contenido')

<div  class="{{-- masthead --}} get_width_100 "  >
  
<div id="carouselExampleIndicators" class="carousel slide auto" data-ride="carousel" data-interval="5000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="post-img-slider-size Slider_cabecer_img" data-src="{{$Noticia->url_img_portada}}"> 
     
    </div>
   
  </div>


     

</div>
</div>

  

<div class="conenedor-maximo-blog">
  

   <div class="contenedor-blog" id="contenido-noticia">  
    
       {{html_entity_decode($Noticia->contenido_render)}}

   </div>

</div>  


@stop 


