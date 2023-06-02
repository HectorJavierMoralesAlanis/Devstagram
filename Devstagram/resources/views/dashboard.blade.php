@extends('layouts.app')
@section('titulo')
    Dashboard de Servicios
@endsection

@section('contenido')
<!--
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="" alt="Imagen de usuario">
            </div>
                <div class="md:w-8/12 lg:w-6/12 px-5">
                    <p class="text-gray-700 text-2xl">
                        
                    </p>
                </div>
        </div>
    </div>-->
    
    <a class="font-bold text-green-600 text-sm right" href="{{route('registerS')}}">Ingresar nuevo servicio</a>
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
                <tr>
                    @foreach($servicios as $servicio)
                        <td>{{ $servicio->codigo }}</td>
                        <td>{{ $servicio->nombre }}</td>
                        <td>{{ $servicio->descripcion_Corta }}</td>
                        <td>{{ $servicio->descripcion_Larga }}</td>
                        <td>{{ $servicio->precio_Servicio }}</td>
                        <td>{{ $servicio->fecha_Ingreso }}</td>
                        <td>{{ $servicio->caracteristica_Servicio }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection