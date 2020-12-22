<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>FelipeSchefer</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />
  <link rel="stylesheet" href="./assets/css/slick.css" />
  <link rel="stylesheet" href="./assets/css/slick-theme.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <!--//////////////////////////////// INICIO DO NAV ////////////////////////////-->
  <?php
  include 'assets/inc/header.php';
  ?>
  <!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ FINAL DO NAV \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


  <!--//////////////////////////////// INICIO GRUPO DE FOTS SUPERIOR ////////////////////////////-->
  <div class="card-group container mt-5 bg-light p-3">
    <div class="card">
      <img src="./assets/img/casinha.jpg" class="card-img-top" alt="Casinha de cachorro">
      <div class="card-body">
        <h5 class="card-title">Casinha de cachorro</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img src="./assets/img/coleira.jpg" class="card-img-top" alt="Colerira canina">
      <div class="card-body">
        <h5 class="card-title">Colerira canina</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img src="./assets/img/osso.jpeg" class="card-img-top" alt="osso de borracha">
      <div class="card-body">
        <h5 class="card-title">Osso de borracha</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>

  <!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ FINAL GRUPO DE FOTOS SUPERIOR \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

  <section id="servicos" class="container mt-5 bg-light p-3 animated slideInLeft">
    <h3 class="border-bottom p-2 mb-5">Serviços</h3>
    <div class="row mt-3">
      <div class="projetos col-sm">
        <div class="col-sm">
          <img src="./assets/img/shower.jpg" class="img-fluid projects-img img-thumbnail" />
          <h4>Banho </h4>
        </div>
        <div class="col-sm">
          <img src="./assets/img/tosa.jpg" class="img-fluid projects-img img-thumbnail" />
          <h4>Tosa </h4>
        </div>
        <div class="col-sm">
          <img src="./assets/img/passeio.jpg" class="img-fluid projects-img img-thumbnail" />
          <h4>Paseio </h4>
        </div>
        <div class="col-sm">
          <img src="./assets/img/vet.jpg" class="img-fluid projects-img img-thumbnail" />
          <h4>Veterinaria</h4>
        </div>
      </div>
    </div>
  </section>

  <!--//////////////////////////////////// ABRE FORMULARIO ////////////////////////////////////////-->
  <form action="assets/php/pet_shop.php?metodo=cadastrar" method="post" id="compras" class="p-3 m-3">
    <div class="container cont-form m-top-2">
      <div class="form-row">
        <div class="col">
          <label for="inputNome"> Nome </label>
          <input type="text" class="form-control" placeholder="Nome" name="nome">
        </div>
        <div class="col">
          <label for="inputSobrenome"> Sobrenome </label>
          <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail" name="email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4"> Senha </label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Ex: Avenida Espirito Santo nº123" name="avenida">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Cidade</label>
          <input type="text" class="form-control" id="inputCity" name="cidade">
        </div>
        <div class="form-group col-md-4">
          <label>Estado</label>
          <select name="estado"" class=" form-control">
            <option selected>Escolha...</option>
            <option value="RS">Rio Grande do Sul </option>
            <option value="SP">São Paulo </option>
            <option value="RJ">Rio de Janeiro </option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label>CEP</label>
          <input type="text" class="form-control" name="cep">
        </div>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Serviço desejado</label>
        <select name="servicos" class="form-control">
          <option selected>Escolha...</option>
          <option value="tosa">Tosa </option>
          <option value="banho">Banho</option>
          <option value="passeio">Passeio </option>
          <option value="vet">Veterinario </option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Brinquedos</label>
        <select name="brinquedos" class="form-control">
          <option selected>Escolha...</option>
          <option value="ossoDeBorracha">Osso de borracha </option>
          <option value="coleira">Coleira Canina </option>
          <option value="casinhaDeCachorro">Casinha de Cachorro </option>
        </select>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="concordaComCompra">
          <label class="form-check-label" for="gridCheck">
            Tens certeza que quer efetuar a compra?
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-primary btn-block">Enviar</button>
    </div>
  </form>
  <!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ FECHA FORMULARIO \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

  <!-- //////////////////////////////////////////// ABRE RODAPÉ ///////////////////////////////////// -->
  <?php
  include 'assets/inc/footer.php';
  ?>
  <!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ FECHA RODAPÉ \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- Jquery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"> </script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <!-- Bootstrap -->
  <script src="./assets/js/bootstrap.min.js"></script>
  <!-- Slick -->
  <script src="./assets/js/slick.min.js"></script>
  <script src="./assets/js/main.js"></script>

  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/169c5cbd4c.js" crossorigin="anonymous"></script>
</body>

</html>