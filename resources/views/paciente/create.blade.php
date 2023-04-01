@extends('tema.app')

@section('title','Nuevo paciente')


@section('contenido')

<title>Nuevo paciente</title>
<h3>Registro de pacientes</h3>

<form action="{{ route('paciente.store') }}" method="POST">
    <x-vistaformulario/>
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