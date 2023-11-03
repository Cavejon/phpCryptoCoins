<?php
include_once('cabecalho.php');
?>

<style>
    a {
        font-size: 14px;
        color: #fff;
        font-weight: 200;
    }

    .superNav {
        font-size: 13px;
    }

    .form-control {
        outline: none !important;
        box-shadow: none !important;
    }

    @media screen and (max-width:540px) {
        .centerOnMobile {
            text-align: center
        }
    }
</style>

<!-- <div class="superNav border-bottom py-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
                <select class="me-3 border-0 bg-light">
                    <option value="en-us">EN-US</option>
                </select>
                <span
                    class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>info@somedomain.com</strong></span>
                <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i>
                    <strong>1-800-123-1234</strong></span>
            </div>
            <div
                class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
                <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted"
                        href="#">Shipping</a></span>
                <span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i><a class="text-muted"
                        href="#">Policy</a></span>
            </div>
        </div>
    </div>
</div> -->
<nav class="navbar navbar-expand-lg text-light sticky-top p-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand text-light" href="home.php"><i class="fa-solid fa-shop me-2"></i> <strong>Crypto Coins</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ms-auto ">
            <li class="nav-item ">
                <a class="nav-link mx-2 text-uppercase active text-light" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-2 text-uppercase text-light" href="#">Top Coins</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-2 text-light text-uppercase" href="#">Catalog</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
                <a class="nav-link mx-2 text-uppercase text-light" href="edit.php"><i class="fa-solid fa-circle-user me-1"></i>
                    Account</a>
            </li>
        </ul>
    </div>
    </div>
</nav>