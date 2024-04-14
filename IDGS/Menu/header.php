<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menú</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Secciones
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../Personas/index.php">Personas</a>
            <a class="dropdown-item" href="../Sucursales/index.php">Sucursales</a>
            <a class="dropdown-item" href="../Clientes/index.php">Clientes</a>
            <a class="dropdown-item" href="../Perfiles/index.php">Perfiles</a>

          </div>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</body>

</html>