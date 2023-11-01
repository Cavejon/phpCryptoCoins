<nav class="navbar navbar-dark navbar-expand-lg">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">CryptoCoins <img src="" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapseDrop">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapseDrop">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Descubra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">Contact</a>
                </li>
                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-dark text-light">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <ul>
                                    <li>Linkedin</li>
                                    <li>Linkedin</li>
                                    <li>Linkedin</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-block"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="#coins">Coins</a>
                </li>
                <?php if (!isset($_SESSION['usuarioNome'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">Registre-se</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="edit.php">Account</a>
                    </li>
                <?php } ?>

                <li class="nav-item mr-2">
                    <a class="nav-link" href="sair.php" title="SAIR DO SISTEMA">
                        To go out&nbsp;
                        <i class="fas fa-sign-out-alt text text-danger"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>