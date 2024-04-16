<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú de Inicio</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
  .card {
    margin-bottom: 20px;
  }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="mt-4">Menú de Inicio</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Inicio</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus nisl nec
              pharetra eleifend.</p>
            <a href="index.php?page=home" class="btn btn-primary">Ir a Inicio</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Acerca de</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus nisl nec
              pharetra eleifend.</p>
            <a href="index.php?page=about" class="btn btn-primary">Ir a Acerca de</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Contacto</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus nisl nec
              pharetra eleifend.</p>
            <a href="index.php?page=contact" class="btn btn-primary">Ir a Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (opcional, para funcionalidades como el navbar toggler) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>