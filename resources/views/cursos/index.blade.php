@extends('layouts.app')

@section('titulo', 'Lista Cursos')

@section('contenido')

    <h2>Listado de Cursos</h2>

    {{--foreach sirve para iterar arrays. Es decir permite ciclos en listas--}}
    <div class="row">
        @foreach ($cursito as $item)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img style="height: 150 px" src="{{Storage::url($item->imagen) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$item->nombre}}</h5>
                    <p class="card-text">{{$item->descripcion}}</p>
                    <p class="card-text">{{$item->duracion}}</p>
                    <a href="#" class="btn btn-primary">Ver Detalle</a>
                    </div>
                </div>
            </div> {{--cierro el col--}}
        @endforeach
    </div> {{--cierro el row--}}

    {{--Las doble llave sirve para interpolar.
        Interpolar es traer una variable de otro lenguaje
        al lenguaje que se está usando actualmente--}}

@endsection
