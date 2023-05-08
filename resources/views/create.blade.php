@extends('layouts.base')

@section('content')
<!-- POR SI ES NECESARIO LAS TABS DEL FORMULARIO PRINCIPAL -->
<header>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#informacion" aria-controls="información" aria-selected="true">Información básica</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#cronograma" aria-controls="cronograma" aria-selected="false">Cronograma</a>
    </li>
  </ul>
  <button class="btn btn-secondary mx-3">
    <a href="/"><i class="bi bi-arrow-left"></i>Volver</a>
  </button>
</header>

<main class="tab-content">
  <section class="tab-pane fade show active" id="informacion">
    <form action="{{route('procesos.store')}}" method="POST">
      @csrf
      <h5>Información Básica</h5>
      <hr class="delimitadorSuperior">
      <div class="contenedorInformacion">
        <div class="objeto">
          <label for="objeto" class="form-label">Objeto</label>
          <input name="objeto" type="text" class="form-control" id="objeto" aria-describedby="objeto">
        </div>
        <!-- AQUÍ SE DEBE PODER BUSCAR ENTRE LOS CAMPOS DE PRODUCTOS GUARDADOS EN LA BASE DE DATOS -->
        <div class="actividad">
          <!-- REVISAR SI NO HACE FALTA LA ETIQUETA FORM -->
          <label for="actividad" class="form-label">Actividad</label>
          <div class="input-group mb-3">
            <input name="actividad" type="search" class="form-control actividad" id="actividad" placeholder="Buscar actividad" aria-label="Buscar actividad" aria-describedby="Buscar">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
          </div>
        </div>

        <div class="descripcion">
          <label for="descripcion" class="form-label">Descripción / Alcance</label>
          <textarea name="descripcion" type="text-area" class="form-control" id="descripcion" aria-describedby="descripcion"></textarea>
        </div>

        <div class="moneda">
          <label for="moneda" class="form-label">Moneda</label>
          <div class="input-group">
            <label class="input-group-text" for="moneda"><i class="bi bi-list"></i></label>
            <select name="moneda" class="form-select" id="moneda">
              <option value="COP" selected>COP</option>
              <option value="USD">USD</option>
              <option value="EUR">EUR</option>
            </select>
          </div>
        </div>

        <div class="presupuesto">
          <label for="presupuesto" class="form-label">Presupuesto</label>
          <div class="input-group">
            <span class="input-group-text">$</span>
            <input name="presupuesto" type="number" id="presupuesto" class="form-control" aria-label="Amount">
          </div>
        </div>

      </div>
      <hr>
      <div class="botonGuardar">
        <script>
          function cambiarPestaña() {
            document.getElementById("informacion").classList.remove("show");
            document.getElementById("informacion").classList.remove("active");
            document.getElementById("cronograma").classList.add("show");
            document.getElementById("cronograma").classList.add("active");
          }
        </script>
        <button onclick="cambiarPestaña()" type="button" class="btn btn-success">Guardar</button>
      </div>

  </section>

  @if ($errors->any())
  <div class="alert alert-danger">
    <strong>Eror</strong> Algo fue mal..<br><br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <section class="tab-pane fade" id="cronograma">

    <h5>Cronograma</h5>
    <hr class="delimitadorSuperior">

    <div class="contenedorCronograma">

      <div class="fechaInicio">
        <label for="fechaInicio" class="form-label">Fecha Inicio(*)</label>
        <input name="fecha_inicio" type="date" class="form-control" id="fechaInicio" aria-describedby="fechaInicio" required>
        <!-- <div id="fechaHelp" class="form-text">(AAAA/MM/DD)</div> -->
      </div>

      <div class="horaInicio">
        <label for="horaInicio" class="form-label">Hora Inicio(*)</label>
        <input name="hora_inicio" type="time" class="form-control" id="horaInicio" aria-describedby="horaInicio" required>
      </div>

      <div class="fechaCierre">
        <label for="fechaCierre" class="form-label">Fecha Cierre(*)</label>
        <input name="fecha_cierre" type="date" class="form-control" id="fechaCierre" aria-describedby="fechaCierre" required>
        <!-- <div id="fechaHelp" class="form-text">(AAAA/MM/DD)</div> -->
      </div>

      <div class="horaCierre">
        <label for="horaCierre" class="form-label">Hora Cierre(*)</label>
        <input name="hora_cierre" type="time" class="form-control" id="horaCierre" aria-describedby="horaCierre" required>
      </div>

    </div>

    <div class="botonGuardar my-3">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
    </form>

  </section>
</main>
<!-- <div class="col-12">
        <div>
            <h2>Crear Tarea</h2>
        </div>
        <div>
            <a href="{{route('procesos.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div> -->
@endsection