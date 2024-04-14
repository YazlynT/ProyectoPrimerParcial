<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style type="text/css">
  body {
    background-image: linear-gradient(95deg, #c8f1ff 0, #85cbff 25%, #10a4f8 50%, #007fe8 75%, #005dd8 100%);
  }

  .error {
    background: #F2DEDE;
    color: #181616;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 col-lg-4 mt-5">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center mb-8">Iniciar Sesión</h2>
            <?php if (isset($_GET['error'])) { ?>
            <h4>
              <center>
                <p class="error"><?php echo $_GET['error']; ?></p>
              </center>
            </h4>
            <?php } ?>
            <form action="./check_login.php" method="post">

              <div class="mb-4">
                <label for="username" class="form-label"><i class="bi bi-person-circle"></i>Usuario:</label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label"><i class="bi bi-key"></i>Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required />
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Entrar
              </button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

</body>

</html>