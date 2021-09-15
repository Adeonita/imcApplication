<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculadora IMC</title>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-5">Calculadora de IMC</h1>
      <form action="../server/processRequest.php" method="POST">
        <div class="col-md-4">
          <div class="mt-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control" name="weight" placeholder="Insira seu peso(kg)">
          </div>
          <div class="mt-3 mb-3">
            <label for="height" class="form-label">Altura</label>
            <input type="text" class="form-control" name="height" placeholder="Insira sua altura(m)">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Calcular</button>
          </div>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>