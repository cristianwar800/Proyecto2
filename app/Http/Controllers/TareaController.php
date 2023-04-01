<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Http\Requests\tarearequest;
use Illuminate\Http\Request;



class TareaController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        if ($query) {
            $tareas = Tarea::where('nombre', 'LIKE', "%$query%")
                        ->orderByDesc('id')
                        ->get();
        } else {
            $tareas = Tarea::orderByDesc('id')->get();
        }
        return view('paciente.index', compact('tareas'));
    }
    public function create()
    {
        return view('paciente.create');
    }
    public function store(tarearequest $request)
    {
        $datos = $request->validated();
        $tarea = Tarea::create($datos);
        return redirect()->route('paciente.index');
    }
    public function show(Tarea $tarea)
    {
    return view('paciente.show', ['tarea' => $tarea]);
    }
    public function edit(Tarea $tarea)
    {
     return view ('paciente.edit', compact('tarea'));   
    }
    public function update(tarearequest $request, Tarea $tarea)
    {
        $datos = $request->validated();
        $tarea->update($datos);
        return redirect()->route('paciente.index');
    }
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('paciente.index');
    }
}
