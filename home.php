<?php
session_start();
include_once('assets/cabecalho.php');
include_once('assets/rodape.php');
include('config/conexao.php');
include_once("config/seguranca.php");
seguranca_adm();
?>

<?php include_once('assets/menu.php'); ?>

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
<style>
    table tr th,
    td {
        background-color: #1E1C1C !important;
    }

    table td {
        width: 4rem;
    }

    body::-webkit-scrollbar {
        width: 12px;
    }

    body::-webkit-scrollbar-track {
        background-color: #1E1C1C;

    }

    body::-webkit-scrollbar-thumb {
        background-color: #1e4fc4;

        border-radius: 20px;

        border: 3px solid #1E1C1C;

    }
</style>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Inclua a biblioteca DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>

<body style="background-color: #1E1C1C;">

    <!-- Section de introdução da CryptoCoins-->
    <section class="container-foulder">
        <div class="container overflow-hidden text-center mt-4">
            <div class="row">
                <div class="col-md3">
                    <div class="p-3" style="width: 35rem; margin-top:7rem">
                        <h2 class="text-light mt-5 " style="font-size: 2.6rem">A <span
                                style="color: #1e4fc4;">CryptoCoins</span> sua
                            consulta em tempo real.</h2>
                        <p style="font-size:1.4rem" class="text-light mt-4">
                            A CrytoCoins é o lugar mais fácil e rapido para consultar criptomoedas. Registre-se e comece
                            hoje mesmo a
                            conferir o mercado.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container" style="width:40rem; ">
                        <img src="assets/images/eth-3738542.png" alt="" class="container img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section de Informação sobre CryptoCoins-->
    <section class="hall container-fluid d-flex pt-5 " id="about">
        <div class="container mt-5" style="width:60rem;">
            <div class="text-light text-center ">
                <h1 class="font-weight-normal mb-3  text-uppercase ">Sobre CryptoCoins</h1>
                <p class="font-weight-normal mb-3 ">
                    A página "CryptoCoins" é um projeto acadêmico desenvolvido como parte da graduação em Análise e
                    Desenvolvimento de Sistemas. Seu objetivo principal é oferecer informações sobre criptomoedas, como
                    Bitcoin, Ethereum e muitas outras, bem como acompanhar suas cotações em tempo real. Para alcançar
                    esse objetivo, várias tecnologias foram empregadas no desenvolvimento:
                </p>
                <p>
                    HTML: O HTML é a espinha dorsal da página, sendo usado para criar a estrutura e o conteúdo da
                    plataforma, desde cabeçalhos e parágrafos até formulários de pesquisa e tabelas de dados.
                </p>
                <p>
                    Bootstrap: O framework Bootstrap foi utilizado para o design e a aparência da página. Ele fornece
                    componentes e estilos pré-fabricados que facilitam a criação de um layout responsivo e atraente,
                    garantindo que a página seja acessível em dispositivos de diferentes tamanhos.
                </p>
                <p>
                    MySQL: O sistema de gerenciamento de banco de dados MySQL é usado para armazenar e gerenciar
                    informações sobre as criptomoedas, como histórico de preços, informações de mercado e outras
                    estatísticas relevantes.
                </p>
                <p>
                    PHP: A linguagem de programação PHP é utilizada para criar a lógica de back-end da página. Ela
                    permite que os dados sejam recuperados do banco de dados, processados e apresentados aos usuários de
                    forma dinâmica. Além disso, o PHP também pode ser usado para interagir com APIs de terceiros, como
                    aquelas que fornecem dados em tempo real sobre criptomoedas.
                </p>
                <p>
                    jQuery: A biblioteca JavaScript jQuery é empregada para tornar a página mais interativa. Ela pode
                    ser usada para criar recursos como gráficos dinâmicos, atualizações em tempo real das informações de
                    mercado e melhorar a experiência do usuário.
                </p>
                <p>
                    No geral, a página "CryptoCoins" visa fornecer aos usuários uma plataforma informativa e prática
                    para acompanhar as últimas notícias e cotações das criptomoedas, com uma interface amigável e
                    responsiva, graças às tecnologias HTML, Bootstrap, MySQL, PHP e jQuery.
                </p>

                <button class="btn btn-Sm" style="background-color: #1e4fc4; color:#fff;">Conheça meu perfil!</button>
            </div>
    </section>

    <!-- Section de introdução da CryptoCoins-->
    <section class="container" style="margin-top: 15rem;">

        <h1 class="text-light text-center h3">The 3 most searched currencies</h1>

        <div class="cards d-flex container mt-4" style=" margin-bottom:10rem; margin-left:5rem; gap:3rem">

            <div class="" style="width: 15rem;">
                <img class="card-img-top" id="bitcoin-image" src="" alt="Card image cap" style="width: 100%;">
                <div class="card-body text-center">
                    <h5 class="card-title text-light" id="bitcoin-price">R$ 0.00</h5>
                    <p class="card-text text-light" id="bitcoin-name" style="font-size:15px">Bitcoin</p>
                </div>
            </div>

            <div class="" style="width: 15rem;">
                <img class="card-img-top" id="etherium-image" src="" alt="Card image cap" style="width: 100%;">
                <div class="card-body text-center">
                    <h5 class="card-title text-light" id="etherium-price">R$ 0.00</h5>
                    <p class="card-text text-light" id="etherium-name" style="font-size:15px">Ethereum</p>
                </div>
            </div>

            <div class="" style="width: 15rem;">
                <img class="card-img-top" id="tether-image" src="" alt="Card image cap" style="width: 100%;">
                <div class="card-body text-center">
                    <h5 class="card-title text-light" id="tether-price">R$ 0.00</h5>
                    <p class="card-text text-light" id="tether-name" style="font-size:15px">Tether</p>
                </div>
            </div>
        </div>
    </section>

    <section class="table-coins" id="coins">
        <div class="content container">

            <table id="grade_coins" class="table table-dark mb-4 bg-white">
                <thead>
                    <tr>
                        <th style="width:4rem">Id</th>
                        <th><img src="assets/images/icons8-coin-80.png" style="width: 1rem;">
                        </th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Current Price</th>
                        <th>Last Updated</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </section>

    <footer class="mt-4 text-center text-lg-start text-light" style="background-color: #1E1C1C;">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-light" href="#">Pedro Lucas Cavejon </a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
<script>
    // $.ajax({
    //     url: "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&locale=en",
    //     type: 'GET',
    //     contentType: 'application/json',
    //     crossDomain: true,
    //     success: function(data) {
    //         if (this.readyState == 4 && this.status == 200) {
    //             const data = JSON.parse(decodeURIComponent(this.responseText)).map(el => {
    //                 return {
    //                     ...el,
    //                     image: `<img src="${el.image}" style="width:3rem"/>`
    //                 }
    //             });

    //             $('#grade_coins').DataTable({
    //                 language: {
    //                     zeroRecords: 'Nada encontrado, desculpe!',
    //                     infoEmpty: 'Não há registros disponíveis',
    //                     search: 'Pesquisar',
    //                     "paginate": {
    //                         "first": "Primeira",
    //                         "last": "Last",
    //                         "next": "Próxima",
    //                         "previous": "Anterior"
    //                     },
    //                 },
    //                 "data": data,
    //                 "columns": [{
    //                         "data": "id"
    //                     },
    //                     {
    //                         "data": "symbol"
    //                     },
    //                     {
    //                         "data": "image"
    //                     },
    //                     {
    //                         "data": "name"
    //                     },
    //                     {
    //                         "data": "current_price"
    //                     },
    //                     {
    //                         "data": "last_updated"
    //                     },
    //                 ]
    //             });
    //         }
    //     }
    // });

    var xmlhttp = new XMLHttpRequest();
    var url = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&locale=en";
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const data = JSON.parse(decodeURIComponent(this.responseText));

            // Iterar sobre os dados da API
            for (const coinData of data) {
                const coinName = coinData.name;

                if (coinName === "Bitcoin") {
                    document.getElementById("bitcoin-name").textContent = coinName;
                    document.getElementById("bitcoin-price").textContent = `R$ ${coinData.current_price.toFixed(2)}`;
                    document.getElementById("bitcoin-image").src = coinData.image;
                } else if (coinName === "Ethereum") {
                    document.getElementById("etherium-name").textContent = coinName;
                    document.getElementById("etherium-price").textContent = `R$ ${coinData.current_price.toFixed(2)}`;
                    document.getElementById("etherium-image").src = coinData.image;
                } else if (coinName === "Tether") {
                    document.getElementById("tether-name").textContent = coinName;
                    document.getElementById("tether-price").textContent = `R$ ${coinData.current_price.toFixed(2)}`;
                    document.getElementById("tether-image").src = coinData.image;
                }
            }

            const dataTableData = data.map(coin => {
                return {
                    ...coin,
                    image: `<img src="${coin.image}" style="width:3rem"/>`
                };
            });

            $('#grade_coins').DataTable({
                language: {
                    zeroRecords: 'Nada encontrado, desculpe!',
                    infoEmpty: 'Não há registros disponíveis',
                    search: 'Pesquisar',
                    "paginate": {
                        "first": "Primeira",
                        "last": "Last",
                        "next": "Próxima",
                        "previous": "Anterior"
                    },
                },
                "data": dataTableData,
                "columns": [
                    { "data": "id" },
                    { "data": "symbol" },
                    { "data": "image" },
                    { "data": "name" },
                    { "data": "current_price" },
                    { "data": "last_updated" },
                ]
            });
        }
    };



</script>