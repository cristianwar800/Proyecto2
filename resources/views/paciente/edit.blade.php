@extends('tema.app')

@section('title','Editar paciente')


@section('contenido')


 
<h3>Editar registro de paciente<i>{{ $tarea->nombre }}</i></h3>
<form action="{{ route('paciente.update', $tarea) }}" method="POST">
    @method('put')
    <x-vistaformulario :tarea="$tarea"/>
</form>

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection

