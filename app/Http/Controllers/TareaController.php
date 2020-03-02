<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$tareas = Consultar tareas de tabla tareas
      $tareas = Tarea::all();
      //En compact va el nombre de la variable como string sin el símbolo $
      return view('tareas.tareaIndex', compact('tareas'));
      //->with(['tareas' => $tareas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas.tareaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return redirect('tarea');
        //dd($request->fecha_entrega);
        $tarea = new Tarea();
        $tarea->tarea = $request->tarea;
        $tarea->prioridad = $request->prioridad;
        $tarea->fecha_entrega = $request->fecha_entrega;
        $tarea->descripcion = $request->descripcion;
        //dd($tarea);
        $tarea->save();

        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
      return view('tareas.tareaShow', compact('tarea'));
      //->with(['tarea' => $tarea]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        return view('tareas.tareaForm', compact('tarea'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        //$tarea es el registro y $request la nueva información
        $tarea->tarea = $request->tarea;
        $tarea->prioridad = $request->prioridad;
        $tarea->fecha_entrega = $request->fecha_entrega;
        $tarea->descripcion = $request->descripcion;
        //dd($tarea);
        $tarea->save();

        return redirect()->route('tarea.show', $tarea->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
      $tarea->delete();
      return redirect()->route('tarea.index');
    }
}
