@extends('layouts.app')
@section('titulo')
    <!--Integramos user-->
    Perfil: {{$user->username}}
@endsection

@section('contenido')

    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{asset('Imagenes/Materiales DevStagram-UPV/Materiales DevStagram-UPV/usuario.svg')}}" alt="Imagen de usuario">
            </div>
                <div class="md:w-8/12 lg:w-6/12 px-5">
                    <p class="text-gray-700 text-2xl">
                        {{$user->username}}
                    </p>
                    <!-- Añadir mas contenido-->
                    <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                        0
                        <spam class="font-normal">Seguidores</spam>
                    </p>
                    <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                        0
                        <spam class="font-normal">Siguiendo</spam>
                    </p>
                    <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                        0
                        <spam class="font-normal">Post</spam>
                    </p>
                </div>
        </div>
    </div>
    
    <!-- rECIBIR y mpstrar los Post de publicacion, se recibem desde PostController-->
    <section class="container mx-auto mt-10">
        <h2 class="text-4x1 text-center font-black my-10">Publicaciones</h2>
        @if($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($posts as $post)
                <div>
                    <a>
                        <img src="{{assest('uploads'.'/'.$post->imagen)}}"
                        alt="Imagen del Post {{$post->titulo}}">
                    </a>
                </div>
            @endforeach
        </div>
        @else 
            <p class="text-gray-600 uppercase text-sm text-center font bold">
                No existen publicaciones
            </p>
    </section>
    <!--<a class="font-bold text-green-600 text-sm right" href="{{route('registerS')}}">Ingresar nuevo servicio</a>
    <div class="container flex justify-center">
        <table class="border-separate  border-spacing-2 border border-white bg-[#44403c] text-white">
            <br>
            <thead>
                <tr>
                    <th class="border border-slate-50 bg-[#57534e]" >Id</th>
                    <th class="border border-slate-50 bg-[#57534e]">Nombre</th>
                    <th class="border border-slate-50 bg-[#57534e]">Descripcion corta</th>
                    <th class="border border-slate-50 bg-[#57534e]">Descripcion larga</th>
                    <th class="border border-slate-50 bg-[#57534e]">Precio del servicio</th>
                    <th class="border border-slate-50 bg-[#57534e]">Fecha de ingreso de resgistro</th>
                    <th class="border border-slate-50 bg-[#57534e]">Caracteristicas del servicio</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>-->
@endsection