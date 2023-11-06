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
<nav class="navbar navbar-expand-lg text-light sticky-top p-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand text-light" href="home.php"><i class="fa-solid fa-shop me-2"></i> <strong>Crypto
                Coins</strong></a>
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
            <div class="dropdown">
                <button class="btn btn-drop dropdown-toggle text-uppercase text-light" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                </button>
                <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                    <a class="nav-link mx-2 text-light text-uppercase" href="edit.php"><i
                            class="fa-solid fa-circle-user me-1"></i>
                        Edit account</a>
                    <a class="nav-link mx-2 text-light text-uppercase" href="sair.php" title="SAIR DO SISTEMA">
                        Sair&nbsp;
                        <i class="fas fa-sign-out-alt text text-primary"></i>
                    </a>
                </div>
            </div>
        </ul>
    </div>
    </div>
</nav>