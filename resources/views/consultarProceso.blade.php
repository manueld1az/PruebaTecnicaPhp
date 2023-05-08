@extends('layouts.base')

@section('content')
<header>
  <h3>Procesos / Evento Participación Cerrada</h3>

  <!-- CREAR BOTONES PARA VOLVER AL INDEX -->
  <!-- REVISAR LA CALIDAD DEL CÓDIGO LUEGO MIRAR SI SE MIGRA A LARAVEL -->
  <button class="btn btn-secondary mx-3">
    <a href="/crearProceso"><i class="bi bi-arrow-left"></i>Volver</a>
  </button>
</header>

<main>
  <h5>Búsqueda</h5>
  <hr class="delimitadorSuperior">

  <form>
    <div class="row row-cols-3">

      <div class="col">
        <label for="idCerrada" class="form-label">ID cerrada</label>
        <input type="text" class="form-control" id="idCerrada" aria-describedby="idCerrada" placeholder="Numero id proceso / evento">
      </div>

      <div class="col">
        <label for="objeto" class="form-label">Objeto / Descripción</label>
        <input type="text" class="form-control" id="objeto" aria-describedby="objeto" placeholder="Objeto / Descripción">
      </div>

      <div class="col">
        <label for="creador" class="form-label">Creador</label>
        <input type="text" class="form-control" id="creador" aria-describedby="creador" placeholder="Responsable Evento">
      </div>

      <div class="col">
        <label for="estado" class="form-label">Estado</label>
        <select class="form-select" id="estado">
          <option value="activo" selected>Activo</option>
          <option value="publicado">Publicado</option>
          <option value="evaluacion">Evaluacion</option>
        </select>
      </div>

    </div>

    <div class="contendorBotones">
      <button type="submit" class="btn btn-secondary mx-3">Buscar</button>
      <button type="submit" class="btn btn-success">Generar Excel</button>
    </div>
  </form>
  </section>

  <!-- TABLA DE PROCESOS -->
  <section class="row">
    <div class="col-12 mt-3">
      <!-- <p class="textHelp">Numero de procesos / eventos listados: {{13}}</p> -->
    </div>

    @if (Session::get('success'))
    <div class="alert alert-success mt-2">
      <strong>{{Session:get('success')}}</strong><br>
    </div>
    @endif


    <div class="col-12 mt-1 table-responsive">
      <table class="table table-bordered text-white">
        <tr>
          <th>Id</th>
          <th>Objeto</th>
          <th>Descripción</th>
          <th>Fecha inicio</th>
          <th>Fecha cierre</th>
          <th>Estado</th>
          <th>Responsable de evento</th>
          <th>Acciones</th>
        </tr>
        <tr>
          @foreach($procesos as proceso)
          <td>{{$proceso->codigo_proceso}}</td>
          <td>{{$proceso->objeto}}</td>
          <td>{{$proceso->actividad}}</td>
          <td>{{$proceso->descripcion}}</td>
          <td>{{$proceso->fecha_inicio}}</td>
          <td>{{$proceso->hora_inicio}}</td>
          <td>{{$proceso->fecha_cierre}}</td>
          <td>{{$proceso->hora_cierre}}</td>
          <td>{{$proceso->presupuesto}}</td>
          <td>{{$proceso->moneda}}</td>
          <td>
            <div class="contendorBotones">
              <a href="" class="btn btn-warning">Editar</a>

              <form action="" method="post" class="d-inline">
                <button type="submit" class="btn btn-danger mx-1">Eliminar</button>
              </form>
            </div>
          </td>
          @endforeach
        </tr>
      </table>
    </div>
  </section>

</main>
@endsection