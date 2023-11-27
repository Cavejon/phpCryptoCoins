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
        background-color: #1E1C1C;
    }


    table td {
        width: 4rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
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

    #grade_coins {
        color: #fff;
    }

    .animate-charcter {
        text-transform: uppercase;
        background-image: linear-gradient(-225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #fff800 100%);
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
    }

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
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
    <section class="container-foulder section bg1">
        <div class="container overflow-hidden text-center mt-4">
            <div class="row">
                <div class="col-md3">
                    <div class="p-3" style="width: 35rem; margin-top:7rem">
                        <h2 class="text-light mt-5 " style="font-size: 2.6rem">A <span class="animate-charcter"
                                style="color: #1e4fc4;">CryptoCoins</span> yours real-time consultation.</h2>
                        <p style="font-size:1.4rem" class="text-light mt-4">
                            CrytoCoins is the easiest and fastest place to check cryptocurrencies. Register and get
                            started
                            today the
                            check the market.
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
    <section class="hall container-fluid d-flex pt-5 section bg2" id="about">
        <div class="container mt-5" style="width:60rem;">
            <div class="text-light text-center revealUp">
                <h1 class="font-weight-normal mb-3  text-uppercase ">About CryptoCoins</h1>
                <p class="font-weight-normal mb-3 ">
                    The "CryptoCoins" page is an academic project developed as part of the degree in Analysis and
                    Systems development. Its main objective is to offer information about cryptocurrencies, such as
                    Bitcoin, Ethereum and many others, as well as monitoring their quotes in real time. To reach
                    To achieve this objective, several technologies were used in the development:
                </p>
                <p>
                    HTML: HTML is the backbone of the page, being used to create the structure and content of the page.
                    platform, from headers and paragraphs to search forms and data tables.
                </p>
                <p>
                    Bootstrap: The Bootstrap framework was used for the design and appearance of the page. He provides
                    pre-made components and styles that make it easy to create a responsive and attractive layout,
                    ensuring that the page is accessible on devices of different sizes.
                </p>
                <p>
                    MySQL: MySQL database management system is used to store and manage
                    information about cryptocurrencies, such as price history, market information and others
                    relevant statistics.
                </p>
                <p>
                    PHP: The PHP programming language is used to create the back-end logic of the page. She
                    allows data to be retrieved from the database, processed and presented to users of
                    dynamic way. Additionally, PHP can also be used to interact with third-party APIs such as
                    those that provide real-time data on cryptocurrencies.
                </p>
                <p>
                    jQuery: The jQuery JavaScript library is employed to make the page more interactive. She can
                    be used to create features such as dynamic charts, real-time updates of information
                    market and improve user experience.
                </p>
                <p>
                    Overall, the "CryptoCoins" page aims to provide users with an informative and practical platform
                    to follow the latest news and cryptocurrency quotes, with a user-friendly interface and
                    responsive, thanks to HTML, Bootstrap, MySQL, PHP and jQuery technologies.
                </p>

                <button class="btn btn-Sm" style="background-color: #1e4fc4; color:#fff;">
                    <a href="https://www.linkedin.com/in/pedrolcavejon/">Check out my profile!</button></a>
            </div>
    </section>

    <!-- Section de introdução da CryptoCoins-->
    <section class="container section bg3" style="margin-top: 15rem;">

        <h1 class="text-light text-center h3">Your favorite coins</h1>

        <div class="cards d-flex container mt-4" id="grade_top_coins"
            style=" margin-bottom:10rem; margin-left:5rem; gap:3rem">

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

    <section class="table-coins section bg4" id="coins">
        <div class="content container">
            <input type="text" id="searchInput" placeholder="Search by Name">
            <table id="grade_coins" class="table table-dark mb-4 ">
                <thead>
                    <tr>
                        <th style="width:4rem">Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Current Price</th>
                        <th>Last Updated</th>
                        <th>Favorite</th>
                    </tr>
                </thead>

                <tbody>
                </tbody>
                <script src="dataCoin.js"></script>
                <script>
                    // Adicione um array para armazenar as moedas favoritas
                    var favoriteCoins = [];

                    // Função para adicionar ou remover uma moeda da lista de favoritos
                    function toggleFavorite(coinId) {
                        var index = favoriteCoins.indexOf(coinId);

                        if (index === -1) {
                            favoriteCoins.push(coinId);
                        } else {
                            favoriteCoins.splice(index, 1);
                        }

                        // Atualiza a exibição das moedas favoritas
                        updateFavoriteCoins();
                    }

                    // Função para preencher a tabela com os dados do arquivo dataCoin.js
                    function fillTable() {
                        var tableBody = document.querySelector('#grade_coins tbody');
                        tableBody.innerHTML = ''; // Limpa o conteúdo atual da tabela

                        for (const coin of coins) {
                            tableBody.innerHTML += `
                <tr>
                    <td>${coin.id}</td>
                    <td><img src="${coin.image}" style="width:4rem; margin-left:5rem;"></td>
                    <td>${coin.name}</td>
                    <td>${coin.current_price}</td>
                    <td>${coin.last_updated}</td>
                    <td><button onclick="toggleFavorite('${coin.id}')" class="btn btn-dark">${favoriteCoins.includes(coin.id) ? 'Unfavorite' : 'Favorite'}</button></td>
                </tr>
            `;
                        }

                        // Atualiza a exibição das moedas favoritas
                        updateFavoriteCoins();
                    }

                    // Função para exibir dinamicamente as moedas favoritas na seção acima
                    function updateFavoriteCoins() {
                        var favoriteCoinsSection = document.querySelector('#grade_top_coins');
                        favoriteCoinsSection.innerHTML = ''; // Limpa o conteúdo atual da seção

                        for (const coin of coins) {
                            if (favoriteCoins.includes(coin.id)) {
                                favoriteCoinsSection.innerHTML += `
                    <div class="" style="width: 15rem;">
                        <img class="card-img-top" src="${coin.image}" alt="Card image cap" style="width: 100%;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-light">${coin.current_price}</h5>
                            <p class="card-text text-light" style="font-size:15px">${coin.name}</p>
                        </div>
                    </div>
                `;
                            }
                        }
                    }

                    // Preenche a tabela inicialmente
                    fillTable();
                </script>
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

<!--
 $.ajax({
// url:
"https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&locale=en",
// type: 'GET',
// contentType: 'application/json',
// crossDomain: true,
// success: function(data) {
// if (this.readyState == 4 && this.status == 200) {
// const data = JSON.parse(decodeURIComponent(this.responseText)).map(el => {
// return {
// ...el,
// image: `<img src="${el.image}" style="width:3rem" />`
// }
// });

// $('#grade_coins').DataTable({
// language: {
// zeroRecords: 'Nada encontrado, desculpe!',
// infoEmpty: 'Não há registros disponíveis',
// search: 'Pesquisar',
// "paginate": {
// "first": "Primeira",
// "last": "Last",
// "next": "Próxima",
// "previous": "Anterior"
// },
// },
// "data": data,
// "columns": [{
// "data": "id"
// },
// {
// "data": "symbol"
// },
// {
// "data": "image"
// },
// {
// "data": "name"
// },
// {
// "data": "current_price"
// },
// {
// "data": "last_updated"
// },
// ]
// });
// }
// }
// });

-->