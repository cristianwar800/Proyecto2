<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleboton.css') }}">

<a class="session" href="{{ route('paciente.index') }}">Regresar</a>
<title>Nuevo paciente</title>



@csrf
    <div class="row">
        <div class="col-sm-12">
        @csrf
            <label for="" class="form-label">Nombre del paciente</label>         
          <input type="text" name="nombre" id="inputNombre" class="form control" placeholder="..."value="{{ old('nombre', $tarea->nombre) }}">
        </div>
        <div class="col-sm-4">
            <label for="SelectUrgencia" class="form-label">* Urgencia</label>
            <select name="urgencia" id="SelectUrgencia" class="form-select">
            @for($x = 0; $x < count($urgencias); $x++)
                <option value="{{ $x }}" @selected(old('urgencia', $tarea->urgencia))>{{$urgencias[$x] }}</option>
            @endfor
        </select>
        </div>
        <div class="col-sm-4">
            <label for="inputfechalimite" class="form-label">* Fecha de ingreso</label>
            <input type="datetime-local" name="fecha_limite" id="inputfechalimite" class="form-control" value="{{ old('fecha_limite', $tarea->fecha_limite) }}">
        </div>
        <div class="col-sm-12">
            <label for="textareadescripcion" class="form label">Descripcion del paciente</label>
            <textarea name="descripcion" id="textareadescripcion" cols="30" rows="10" class="form-control">{{ old('descripcion',$tarea->descripcion) }}</textarea>
        </div>
        <div class="col-sm-12 text-end my-2">
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </div>
    </div>