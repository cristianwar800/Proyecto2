@extends('tema.app')

@section('title','Listado de pacientes')


@section('contenido')

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">
	<title>Listado de Pacientes</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styleboton.css') }}">
	<!-- Agregar el siguiente enlace para usar Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<h3 class="text-center">PACIENTES</h3>
		<form action="{{ route('paciente.index') }}" method="GET">
			<div class="input-group mb-3">
				<input type="text" class="form-control" name="search" placeholder="Busqueda de paciente" value="{{ request('search') }}">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit">Buscar</button>
				</div>
			</div>
		</form>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID del paciente</th>
						<th>Nombre</th>
						<th>Fecha de ingreso</th>
						<th>Urgencia</th>
						<th>Descripcion</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tareas as $tarea)
					<tr>
						<td>{{ $tarea->id }}</td>
						<td>{{ $tarea->nombre }}</td>
						<td>{{ $tarea->fecha_limite }}</td>
						<td>{{ $tarea->urgencia() }}</td>
						<td>{{ $tarea->descripcion }}</td>
						<td>
							<a href="{{ route('paciente.edit', $tarea) }}" class="btn btn-primary btn-sm">Editar</a>
							<a href="{{ route('paciente.show', $tarea) }}" class="btn btn-info btn-sm">Ver</a>
							<form action="{{ route('paciente.destroy', $tarea) }}" method="POST" style="display: inline-block;">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Deseas borrar el registro?')">Eliminar consulta</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
