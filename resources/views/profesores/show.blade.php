<x-plantilla>
    <x-slot name="titulo">Gestion</x-slot>
    <x-slot name="cabecera">Detalles Profesor ({{$profesore->id}})</x-slot>
    <div class="card m-auto" style="width: 34rem;">
        <div class="card-body">
          <h4 class="card-title">{{$profesore->apellidos.", ".$profesore->nombre}}</h4>
          <h6 class="card-subtitle mb-2 text-muted">{{$profesore->email}}</h6>
          <h6 class="card-subtitle mb-2 text-muted"></h6>
          <p class="card-text"><b>Localidad: </b> ({{$profesore->localidad}})</p>
            <div class="mt-2">
          <button class="ml-3 btn btn-primary" onclick="window.history.back();"><i class="fas fa-backward"></i>
          </div>

        </div>
      </div>

</x-plantilla>
