<!doctype html>
<html lang="es">
  <head>
    <title> @yield('title')  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oranienbaum&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">  
    <link rel="shortcut icon" href="{{ asset('imagenes/favicon.ico') }}"> 

    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/credo.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    @yield('og-tags')
    @yield('data-estructurada')

    <meta name="Description" CONTENT="@yield('MetaContent')">      
    <META name="robots" content="@yield('MetaRobot')">
    <meta name="Keywords"  content="@yield('palabras-claves')">
    @include('paginas.comunes.analytics')
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  


  <div id="app" class="site-wrap">
  <div v-if="cargando" class="contiene-cargador">
    <div class="cssload-container">
      <div class="cssload-tube-tunnel"></div>
    </div>
  </div>

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    @yield('header')
   
   

    @yield('contenido')


   



    <contacto-component :empresa="empresa" >
     

    </contacto-component>



    {{-- @if($Empresa->whatsapp_empresa != 'no')
    <div class="site-section flex-row-column">      
      @include('paginas.home.whatasapp_contacto_mensaje')
    </div>
    @endif --}}



    <footer class="site-section  footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">@{{empresa.name}}</h3>
            <p  v-if="se_muestra(empresa.home_footer_sobre_mi)">@{{empresa.home_footer_sobre_mi}}</p>
            <p v-if="se_muestra(empresa.direccion_empresa)"><span class="d-inline-block d-md-block">@{{empresa.direccion_empresa}}</p>
          </div>
          <div class="col-md-6 mx-auto">
            <div class="row">
             
              <div class="col-lg-6">
                <h3 class="footer-title">Rutas de interés</h3>
                <ul class="list-unstyled">

                  @yield('rutas_de_interes')
                  
                  <li><a href="#contact-section" >Contacto</a></li>
                   @if(Auth::guest())
                    <li><a href="{{route('auth_login_get')}}" >Iniciar sesión</a></li>

                   @else
                    <li><a href="{{route('get_datos_corporativos')}}" >Administrar</a></li>
                    <li><a href="{{route('logout')}}" >Salir</a></li>
                   @endif
                </ul>
              </div>   



               <div class="col-lg-6">
                <h3 class="footer-title">Datos</h3>
                <ul class="list-unstyled">

                  
                  <li v-if="se_muestra(empresa.telefono)"><a  href="#" ><i class="fas fa-phone-square"></i>  @{{empresa.telefono}}</a></li>
                  <li v-if="se_muestra(empresa.celular)" ><a  href="#"  ><i class="fas fa-mobile-alt"></i> @{{empresa.celular}} </a></li>
                  <li v-if="se_muestra(empresa.direccion)"><a  href="#" ><i class="fas fa-map-marker-alt"></i> @{{empresa.direccion}}</a></li>
                  <li v-if="se_muestra(empresa.horarios)"><a  href="#" ><i class="far fa-clock"></i>@{{empresa.horarios}}</a></li>
                  <li v-if="se_muestra(empresa.email)"><a  href="#" ><i class="far fa-envelope"></i> @{{empresa.email}}</a></li>



                </ul>
              </div> 
        
               
             
            </div>
          </div>
          
          <div class="col-md-3">
            <h3 class="footer-title">Sígueme</h3>
            <a v-if="se_muestra(empresa.twitter_url)" :href="empresa.twitter_url" class="social-circle p-2"><span class="icon-twitter"></span></a>
            <a v-if="se_muestra(empresa.facebook_url)" :href="empresa.facebook_url" class="social-circle p-2"><span class="icon-facebook"></span></a>
            <a v-if=" se_muestra(empresa.instagram_url)" :href="empresa.instagram_url" class="social-circle p-2"><span class="icon-instagram"></span></a>
            <a v-if="se_muestra(empresa.youtube_url)" :href="empresa.youtube_url" class="social-circle p-2"><span class="icon-youtube"></span></a>
            <a v-if="se_muestra(empresa.linkedin_url)" :href="empresa.linkedin_url" class="social-circle p-2"><span class="icon-linkedin"></span></a>
            <a v-if="se_muestra(empresa.Whatsapp_cel)" :href="empresa.link_whatsapp_send" class="social-circle p-2"> <i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
        @yield('iconos-compartir')
       
      </div>
    </footer>

  </div> 

  <!-- .site-wrap -->

 <script src="{{url()}}{{ elixir('js/credo.js')}} " ></script>   


  @if(Auth::guest())
             <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
  @else
      @if(Auth::user()->role ==='adminMcos522')
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script> 
      @else
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
      @endif
  @endif
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>

  <script type="text/javascript">
    @yield('vue')  
  </script>

  
  </body>
</html> 