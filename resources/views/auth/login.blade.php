@extends('layouts.user_layout.user_layout')


@section('title')
 Iniciar Sesion 
@stop

@section('MetaContent')
  Entra en.  
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop




@section('content')


 
<div class="wraper-content-principal-con-nav">
      <h1 class="m-5">Inicio de Sesión</h1>     
      <div class="flex-row-column" style="min-width: 300px;">
        @include('formularios.auth.login_form')
      </div>  
</div>


  
     

@stop