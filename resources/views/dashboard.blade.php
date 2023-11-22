@extends('layaout.app')

@section('titulo-pagina')

@endsection


@section('contenido')
<div class="md:flex  items-center text-center" >
   
    
    <div class="md:w-7/12  ">
        <img src={{ asset('img/user.png') }} alt="">
    </div>
    <div class="md:w-5/12">hola desde dasboard</div>
</div>
@endsection






