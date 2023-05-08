<?php

namespace App\Http\Controllers;

use App\Models\Proceso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // SELECT * FROM prueba_laravel.procesos;
        // $procesos = DB::table('prueba_laravel.procesos')->get();
        $procesos = Proceso::all();
        return view('consultarProceso', ['procesos' => $procesos]);
    }

    // POSIBLE SOLUCIÓN A LO QUE SE DEBA MOSTRAR EN EL HEADER
    // public function index(Tabs $tabs): view
    // {
    //     return view('home', ['Información Básica', 'Cronograma']);
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'objeto' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
            'hora_inicio' => 'required',
            'fecha_cierre' => 'required',
            'hora_cierre' => 'required',
            'presupuesto' => 'required',
            'moneda' => 'required'
        ]);
        // ES EL FORMATO DE LA FECHA EN LA BD
        // dd($request->all());
        // use prueba_laravel;

        // // INSERT INTO `procesos` (`objeto`,`actividad`,`descripcion`,`moneda`,`presupuesto`,`fecha_inicio`,`hora_inicio`,`fecha_cierre`,`hora_cierre`,`updated_at`,`created_at`) VALUES (
        // //     'f','f','f','COP',1,'2023-05-10','22:29:00','2023-05-05','22:28:00','2023-05-08 15:31:01','2023-05-08 15:31:01');
        // DB::statement('use prueba_laravel;');
        Proceso::create($request->all());
        // CON EL PRIMER BOTÓN DE GUARDAR CAMBIAR LA CLASE DE ACTIVE
        // A LA PESTAÑA CRONOGRAMA Y CON EL ULTIMO BOTÓN ENVIAR EL FORMULARIO
        return redirect()->route('procesos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proceso $proceso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proceso $proceso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proceso $proceso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proceso $proceso)
    {
        //
    }
}
