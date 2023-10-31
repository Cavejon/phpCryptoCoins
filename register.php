<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crypto Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/stye.css">
  <link rel="stylesheet" href="../css/login.css">
</head>
<style>

</style>

<body style="background-color: #244772;">
  <main>
    <div class="container teste border mt-3rounded p-5 text-dark " style="width: 60rem; display: flex !important; margin-top: 7rem !important; 
            background-color: #fff; border-radius: 1rem 0 0 1rem">
      <figure>
        <img src="assets/images/eth-3738542.png" class="card-img-top img-fluid img-thumbnail container-fluid"
          style="width:23rem; border: none;" alt="CryptoCoins">
        <figcaption class="text-center h3" style="font-weight: 350; color: #0e4166 o !important;"></figcaption>
      </figure>

      <div class="card-body" style="margin-top: 1rem;">
        <h3 class="card-title text-center mb-4 text-uppercase h6 ">Coloque seus dados para registro</h3>

        <form class="needs-validation container" novalidate method="POST" action="validaCreate.php">
        <input type="hidden" name="type" value="register">
          <div class="form-group mb-3">
            <label for="email ">Full name: </label>
            <input type="text" name="nome" class="form-control text-center" aria-describedby="emailHelp"
            placeholder="Full name...">
          </div>
          <div class="form-group mb-3">
            <label for="password">UserName: </label>
            <input type="text" name="usuario" class="form-control text-center" placeholder="Username...">
          </div>
          <div class="form-group mb-3">
            <label for="password">Password: </label>
            <input type="password" name="senha" class="form-control text-center" placeholder="Password...">
          </div>
          <div class="form-check mt-3 ">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label " for="exampleCheck1">Lembre-se de mim</label>
          </div>
          <input type="submit" value="Entrar" class="btn btn-primary mt-3 container"></input>
          <button type="submit" name="submit" class="btn btn-link container" data-mdb-ripple-color="dark"><a
              href="<?php echo BASE_URL; ?>">Voltar ao menu</a> </button>
        </form>
        <?php if (!empty($msg))
          ; ?>
        <h2>
          <?php echo $msg; ?>
        </h2>
      </div>
    </div>


    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      width="100%" height="11.5rem" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
      <defs>
        <linearGradient id="bg">
          <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
          <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
          <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
        </linearGradient>
        <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
        s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z">
        </path>
      </defs>
      <g>
        <use xlink:href="#wave" opacity=".3">
          <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline"
            values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
            repeatCount="indefinite">
          </animateTransform>
        </use>
        <use xlink:href="#wave" opacity=".6">
          <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline"
            values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
            repeatCount="indefinite">
          </animateTransform>
        </use>
        <use xlink:href="#wave" opacty=".9">
          <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline"
            values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
            repeatCount="indefinite">
          </animateTransform>
        </use>
      </g>
    </svg>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>

<script>
 // SCRIPT DE VALIDAÇÃO DO PROPRIO BOOTSTRAP
  (function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>