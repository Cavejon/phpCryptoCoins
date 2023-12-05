<?php
session_start();
include_once('assets/cabecalho.php');
include_once('assets/rodape.php');
include('config/conexao.php');
include_once("config/seguranca.php");
seguranca_adm();
?>

<?php include_once('assets/menuEdit.php'); ?>

<?php
if (!isset($_SESSION['usuarioNome'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/edit.css">
    <script src="assets/js/jquery.min.js"></script>
</head>

<script>
    $(document).ready(function (e) {
        // Submit form data via Ajax
        $("#fupForm").on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'submit.php',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled", "disabled");
                    $('#fupForm').css("opacity", ".5");
                },
                success: function (response) {
                    $('.statusMsg').html('');
                    if (response.status == 1) {
                        $('#fupForm')[0].reset();
                        $('.statusMsg').html('<p class="alert alert-success">' + response.message + '</p>');
                    } else {
                        $('.statusMsg').html('<p class="alert alert-danger">' + response.message + '</p>');
                    }
                    $('#fupForm').css("opacity", "");
                    $(".submitBtn").removeAttr("disabled");
                }
            });
        });
    });

    // File type validation
    $("#file").change(function () {
        var file = this.files[0];
        var fileType = file.type;
        var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
        if (!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))) {
            alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
            $("#file").val('');
            return false;
        }
    });

</script>

<body style="background-color: #1E1C1C; overflow: hidden;">
    <div class="container bootstrap snippets bootdey" style="margin-left: 20rem; margin-top:5rem;">
        <h1 class="text-light h4 mt-4">Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <form class="needs-validation form-horizontal text-light" enctype="multipart/form-data" role="form"
                        novalidate method="POST" action="validaEdit.php" id="fupForm">
                        <div class="form-group">
                            <label for="file">File:</label>
                            <input type="file" class="form-control" id="file" name="file" required />
                        </div>
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <!-- <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div> -->
                <h3 class="text-light">User info</h3>


                <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Full name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="nome" type="text"
                            value="<?php echo $_SESSION['usuarioNome']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Username:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="usuario" type="text"
                            value="<?php echo $_SESSION['usuarioLogin']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Password:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="senha" type="password"
                            value="<?php echo $_SESSION['usuarioSenha']; ?>">
                    </div>
                </div>
                <!-- <div class="form-group">
                        <label class="col-lg-3 control-label">Time Zone:</label>
                        <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="user_time_zone" class="form-control">
                                    <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                    <option value="Alaska">(GMT-09:00) Alaska</option>
                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp;
                                        Canada)</option>
                                    <option value="Arizona">(GMT-07:00) Arizona</option>
                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp;
                                        Canada)</option>
                                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00)
                                        Central Time (US &amp; Canada)</option>
                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp;
                                        Canada)</option>
                                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                <button type="submit" name="submit" value="submit" class="btn btn-outline-secondary mx-2 submitBtn"
                    style="width:20rem;">Edit info</button>
                <button type="submit" name="submit" value="submit" class="btn btn-outline-secondary mx-2 "
                    style="width:20rem; text-decoration: none;"><a href="delete.php" class="text-muted"
                        style="text-decoration: none;">Delete account</button></a>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

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