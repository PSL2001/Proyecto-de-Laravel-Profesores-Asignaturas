<x-plantilla>
    <x-slot name="titulo">Gestion</x-slot>
    <x-slot name="cabecera">Detalles Asignatura ({{$asignatura->id}})</x-slot>
    <div class="card bg-dark text-white border-info mb-3 m-auto" style="width: 54rem;">
        <div class="card-body">
          <h4 class="card-title text-info">{{$asignatura->nombre}}</h4>
          <h6 class="card-subtitle mb-2 text-muted">Créditos: {{$asignatura->creditos}}</h6>
          <p class="card-text text-"><b>Descripcion: </b> ({{$asignatura->descripcion}})</p>
          <p class="card-text"><b>Cuyo profesor es </b><a href="{{route('profesores.show', $asignatura->profesor->id)}}">{{$asignatura->profesor->nombre}}</a></p>

            <div class="card-footer bg-transparent border-info mt-2">
          <button class="ml-3 btn btn-primary" onclick="window.history.back();"><i class="fas fa-backward"></i> Volver</button>
          </div>
        </div>
      </div>

</x-plantilla>
