<?php
session_start();
include('config/conexao.php');
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body style="background-color: #244772; overflow: hidden;">
  <main>
    <div class="container teste border mt-3rounded p-5 text-dark " style="width: 60rem; display: flex !important; margin-top: 7rem !important; 
            background-color: #fff; border-radius: 1rem 0 0 1rem">
      <figure>
        <img src="assets/images/eth-3738542.png" class="card-img-top img-fluid img-thumbnail container-fluid"
          style="width:23rem; border: none;" alt="CryptoCoins">
        <figcaption class="text-center h3" style="font-weight: 350; color: #0e4166 o !important;"></figcaption>
      </figure>

      <div class="card-body" style="margin-top: 1rem;">
        <h3 class="card-title text-center mb-4 text-uppercase h6 ">Insert yours informations for login</h3>
        <form class="needs-validation container" method="POST" action="valida.php">

          <div class="form-group mb-3">
            <label for="usuario"> </label>
            <input type="text" id="floatingInput" name="usuario" class="form-control text-center"
              placeholder="Insert your User...">
            <div class="invalid-feedback">
              Informe o Usuário.
            </div>
          </div>

          <div class="form-group mb-3">
            <label for="senha"> </label>
            <input type="password" id="floatingPassword" name="senha" class="form-control text-center"
              placeholder="Insert your Password...">
            <div class="invalid-feedback">
              Informe a Senha.
            </div>
          </div>

          <div class="form-check mt-3 ">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label " for="exampleCheck1">Lembre-se de mim</label>
          </div>

          <input type="submit" value="Submit" class="btn btn-primary mt-3 container"></input>
          <span>Do you don't have account? <a href="register.php">Register Here</a></span>
        </form>
        
      </div>
    </div>


    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      width="100%" height="12.3rem" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

<script>
  // SCRIPT DE VALIDAÇÃO DO PROPRIO BOOTSTRAP
  (function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>