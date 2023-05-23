@extends('layouts.app')
<!-- MANADAR TITULO AL CONTENDERO DE APP -->
@section('titulo')
    Curriculum
@endsection

<!-- Contenido de la pagina -->
@section('contenido')
    <div class="container">
    Estudios
        <ul type="A">
            <li>Escuela Primaria Expropiacion Petrolera.</li>
            <li>Escuela Secundaria Tecnica No.38 Lic. Aaron Saenz Garza.</li>
            <li>Centro de Bachillerato Tecnologicos industrial y de servicios No.15.</li>
        </ul>
    </div>
    <div class="container">
    Habilidades
        <ul type="A">
            <li>Programacion</li>
                <ul type="A">
                    <li>Python</li>
                    <li>C++</li>
                    <li>HTML</li>
                    <li>JavaScript</li>
                    <li>C</li>
                    <li>Variante c++ para arduino</li>
                </ul>
            <li>Electronica</li>
            <li>Ingles</li>
            <li>Resolucion de problemas</li>
            <li>Trabajo en equipo</li>
        </ul>
    </div>
    <div class="container">
        Cursos
        <ul type="A">
            <li>Curso python PCEP - Certified Entry-Level Python Programmer.</li>
            <li>Curso de Ingles Lengua Extranjera de la Universidad Autonoma De Tamaulipas.</li>
            <li>Curso Ingles B2+ Interactive English School.</li>
        </ul>
    </div>
    <div class="container">
        Acerca de mi
        <div class="container">
            <table>
                <td>
                    <p>Actualmente soy estudiante de la universidad politecnica de victoria, me gusta el rock,indi rock,metal,heavy-metal, me gustan los videojuegos.</p>
                </td>
                <td>
                    <img src="/Imagenes/Curriculum foto.png" />
                </td>
            </table>
        </div>
    </div>
@endsection