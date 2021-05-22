<x-plantilla>
    <x-slot name="titulo">Gestion</x-slot>
    <x-slot name="cabecera">Detalles Profesor ({{$profesore->id}})</x-slot>
    <div class="card bg-dark text-white border-info mb-3 m-auto" style="width: 34rem;">
        <div class="card-body">
          <h4 class="card-title text-info">{{$profesore->apellidos.", ".$profesore->nombre}}</h4>
          <h6 class="card-subtitle mb-2 text-muted">{{$profesore->email}}</h6>
          <h6 class="card-subtitle mb-2 text-muted"></h6>
          <p class="card-text"><b>Localidad: </b> ({{$profesore->localidad}})</p>
          <p class="card-text"><b>Asignaturas que imparte: </b>
            <ul>
                @foreach($profesore->asignaturas as $item)
                <li><a href="{{route('asignaturas.show', $item)}}" class="link-light">{{$item->nombre}}</a></li>
                @endforeach
            </ul>
          </p>
            <div class="card-footer bg-transparent border-info mt-2">
          <button class="ml-3 btn btn-primary" onclick="window.history.back();" ><i class="fas fa-backward"></i> Volver</button>
          </div>

        </div>
      </div>

</x-plantilla>
