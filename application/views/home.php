<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php echo $page_title; ?></title>
  </head>
  <body>
    <div class="container mt-5">
      <h1><?php echo $page_title; ?></h1>
      <div class="row">
        <div class="col-6 px-2">
          <table class="table table-striped">
          <thead>
            <tr>
              <td class="d-block px-0">
                <h4 class="text-capitalize">
                  <?php echo $personagens[0]; ?>
                </h4>
                <p class="text-capitalize">
                  Equip ( <?php foreach(explode('_',$armas[0]) as $key => $entry) echo $entry.' '; echo '-> atq = '.$armas['espada_longa']['atq'].' / def = '.$armas['espada_longa']['def']; ?> dano = 1d8 )
                </p>
              </td>
            </tr>
            <tr>
              <th scope="col">Turnos</th>
              <th scope="col">Primeiro</th>
              <th scope="col">Último</th>
              <th scope="col">Nickname</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        </div>
        <div class="col-6 px-2">
          <table class="table table-striped">
          <thead>
            <tr>
              <td class="px-0">
                <h4 class="text-capitalize">
                  <?php echo $personagens[1]; ?>
                </h4>
                <p class="text-capitalize">
                  Equip ( <?php foreach(explode('_',$armas[1]) as $key => $entry) echo $entry.' '; echo '-> atq = '.$armas['clava_madeira']['atq'].' / def = '.$armas['clava_madeira']['def']; ?> dano = 1d8 )
                </p>
              </td>
            </tr>
            <tr>
              <th scope="col">Turnos</th>
              <th scope="col">Primeiro</th>
              <th scope="col">Último</th>
              <th scope="col">Nickname</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
