<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid mx-2">
      <a class="navbar-brand" href="#">Academia Intel S.A</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active mx-2" aria-current="page" href="/"><i class="fas fa-home"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{route('profesores.index')}}"><i class="far fa-address-card"></i> Gestionar Profesores</a>
          </li>
          <li class="nav-item">
              <a class="nav-link mx-2" href="{{route('asignaturas.index')}}"><i class="fas fa-book-reader"></i> Gestionar Asignaturas</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
