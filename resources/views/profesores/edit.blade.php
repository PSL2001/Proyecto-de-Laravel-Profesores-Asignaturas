<x-plantilla>
    <x-slot name="titulo">Creacion</x-slot>
    <x-slot name="cabecera">Editando profesor</x-slot>
    <x-errores />
    <form name="sd" method="POST" action="{{route('profesores.update', $profesore)}}" class=" p-4 bg-secondary text-light">
        @csrf
        @method("PUT")
        @bind($profesore)
        <x-form-input name="nombre" label="Nombre Profesor" />
        <x-form-input name="apellidos" label="Apellidos Profesor" />
        <x-form-input name="email" label="E-Mail" type="mail" />
        <x-form-input name="localidad" label="Localidad" />

        <div class="mt-3">
            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Enviar</button>
            <button type="reset" class=" ml-3 btn btn-warning"><i class="fas fa-broom"></i> Limpiar</button>
            <button class="ml-3 btn btn-primary" onclick="window.history.back();"><i class="fas fa-backward"></i>
                Volver</button>
        </div>
    </form>
</x-plantilla>
