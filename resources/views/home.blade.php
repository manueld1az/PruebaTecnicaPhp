@extends('layouts.base')

@section('content')

<main>
  <section class="contenedorOpciones">
    <h5>Procesos / Eventos</h5>

    <article>
      <a href="/crearProceso" class="opcion">
        <i class="bi bi-pencil-fill"></i>Crear
      </a>
      <a href="#" class="opcion">
        <i class="bi bi-clipboard-check"></i>Copiar
      </a>
      <a href="/procesos" class="opcion">
        <i class="bi bi-search"></i>Consultar
      </a>
    </article>

  </section>
</main>
@endsection