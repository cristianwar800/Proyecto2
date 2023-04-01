@extends('tema.app')




@section('contenido')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Editar registro <i>{{ $tarea->nombre }}</i></h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>ID del paciente: <strong>{{$tarea->id}}</strong></li>
                        <li>Urgencia: <strong>{{$tarea->urgencia()}}</strong></li>
                        <li>Fecha ingreso: <strong>{{$tarea->fecha_limite}}</strong></li>
                        <li>Descripcion: <strong>{{$tarea->descripcion}}</strong></li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <a href="{{ route('paciente.index') }}" class="btn btn-secondary">Regresar</a>
                        </div>
                        <div class="col-md-6 text-center">
                            <form action="{{ route('paciente.destroy', $tarea) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')">Eliminar consulta</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection