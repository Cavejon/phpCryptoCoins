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

<body style="background-color: #1E1C1C;">

    <!-- Section de introdução da CryptoCoins-->
    <section class="container-foulder">
        <div class="container overflow-hidden text-center mt-4">
            <div class="row">
                <div class="col-md3">
                    <div class="p-3" style="width: 35rem; margin-top:7rem">
                        <h2 class="text-light mt-5 " style="font-size: 2.6rem">A <span style="color: #1e4fc4;">CryptoCoins</span> sua
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
        <div class="cards d-flex container" style=" margin-bottom:10rem; margin-left:5rem; gap:3rem">

            <div class="" style="width: 15rem;">
                <img class="card-img-top" src="assets/images/eth-3738542.png" alt="Card image cap" style="width: 100%;">
                <div class="card-body text-center">
                    <h5 class="card-title text-light">R$ 999,99</h5>
                    <p class="card-text text-light" id="valores" style="font-size:15px">Bitcoin</p>

                </div>
            </div>
            <br>
            <div class="" style="width: 15rem;">
                <img class="card-img-top" src="assets/images/eth-3738542.png" alt="Card image cap" style="width: 100%;">
                <div class="card-body text-center text-light">
                    <h5 class="card-title text-light">R$ 999,99</h5>
                    <p class="card-text" id="valores">Etherium</p>

                </div>
            </div>
            <br>
            <div class="" style="width: 15rem;">
                <img class="card-img-top" src="assets/images/eth-3738542.png" alt="Card image cap" style="width: 100%;">
                <div class="card-body text-center">
                    <h5 class="card-title text-light">R$ 999,99</h5>
                    <p class="card-text text-light" id="valores">DogeCoin</p>
                </div>
            </div>

        </div>
    </section>

    <section class="table-coins" id="coins">
        <div class="content container">

            <table id="grade_coins" class="table table-dark mb-4 bg-white">
                <thead>
                    <tr>
                        <th style="width:4rem"></th>
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

</body>
<script>
    $.ajax({
        url: "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&locale=en",
        type: 'GET',
        contentType: 'application/json',
        crossDomain: true,
        success: function(data) {
            if (this.readyState == 4 && this.status == 200) {
                const data = JSON.parse(decodeURIComponent(this.responseText)).map(el => {
                    return {
                        ...el,
                        image: `<img src="${el.image}" style="width:3rem"/>`
                    }
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
                    "data": data,
                    "columns": [{
                            "data": "id"
                        },
                        {
                            "data": "symbol"
                        },
                        {
                            "data": "image"
                        },
                        {
                            "data": "name"
                        },
                        {
                            "data": "current_price"
                        },
                        {
                            "data": "last_updated"
                        },
                    ]
                });
            }
        }
    });

    // var xmlhttp = new XMLHttpRequest();
    // var url = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&locale=en"
    // xmlhttp.open("GET", url, true);
    // xmlhttp.send();
    // xmlhttp.onreadystatechange = function () {
    //     if (this.readyState == 4 && this.status == 200) {
    //         const data = JSON.parse(decodeURIComponent(this.responseText)).map(el => {
    //             return {
    //                 ...el,
    //                 image: `<img src="${el.image}" style="width:3rem"/>`
    //             }
    //         });

    //         $('#grade_coins').DataTable({
    //             language: {
    //                 zeroRecords: 'Nada encontrado, desculpe!',
    //                 infoEmpty: 'Não há registros disponíveis',
    //                 search: 'Pesquisar',
    //                 "paginate": {
    //                     "first": "Primeira",
    //                     "last": "Last",
    //                     "next": "Próxima",
    //                     "previous": "Anterior"
    //                 },
    //             },
    //             "data": data,
    //             "columns": [
    //                 { "data": "id" },
    //                 { "data": "symbol" },
    //                 { "data": "image" },
    //                 { "data": "name" },
    //                 { "data": "current_price" },
    //                 { "data": "last_updated" },
    //             ]
    //         });
    //     }

    // }
</script>

<!-- ================================== MODAL CADASTRAR CLIENTE----------------------------------------------------------------->
<style>
    .errorInput {
        border: 2px solid red !important;
    }
</style>
<script>
    // ================================ FUNÇÃO PARA MASCARA DE TELEFONE =============================================
    function mask(o, f) {
        setTimeout(function() {
            var v = telefone(o.value);
            if (v != o.value) {
                o.value = v;
            }
        }, 1);
    }

    function telefone(v) {
        var r = v.replace(/\D/g, "");
        r = r.replace(/^0/, ""); //limpa o campo se começar com ZERO (0)
        if (r.length > 10) {
            r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
        } else if (r.length > 5) {
            r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
        } else if (r.length > 2) {
            r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
        } else {
            r = r.replace(/^(\d*)/, "($1");
        }
        return r;
    }

    // ================================ FUNÇÃO PARA MASCARA DE CELULAR =============================================
    function mask(o, f) {
        setTimeout(function() {
            var v = celular(o.value);
            if (v != o.value) {
                o.value = v;
            }
        }, 1);
    }

    function celular(v) {
        var r = v.replace(/\D/g, "");
        r = r.replace(/^0/, ""); //limpa o campo se começar com ZERO (0)
        if (r.length > 10) {
            r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
        } else if (r.length > 5) {
            r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
        } else if (r.length > 2) {
            r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
        } else {
            r = r.replace(/^(\d*)/, "($1");
        }
        return r;
    }

    // ================================ FUNÇÃO PARA MASCARA DE CPF =============================================
    $(document).ready(function() {
        $("#cpf").mask("999.999.999-99");
    });

    // ================================ FUNÇÃO PARA MASCARA DE NASCIMENTO =============================================
    $(document).ready(function() {
        $("#nascimento").mask("99/99/9999");
    });

    // FUNÇÃO PARA ADICONAR ENDEREÇO VIA CEP (https://viacep.com.br/exemplo/javascript/)
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value = ("");
        document.getElementById('bairro').value = ("");
        document.getElementById('cidade').value = ("");
        document.getElementById('uf').value = ("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };


    $(document).ready(function() {

        $('#insert_form').on('submit', function(event) {
            event.preventDefault(); //EVITA O SUBMIT DO FORM

            var nome = $('#nome'); // PEGA O CAMPO CLIENTE DO FORM
            var telefone = $('#telefone'); // PEGA O CAMPO TELEFONE DO FORM
            var email = $('#email');


            var erro = $('.alert-danger'); // PEGA O CAMPO COM A class alert e CRIA A VARIAVEL erro
            var campo = $('#campo-erro'); // CRIA A VARIAVEL PATA EXIBIR O NOME DO CAMPO COM ERROcampo-sucesso


            erro.addClass('d-none');
            $('.is-invalid').removeClass('is-invalid');
            $('.is-valid').removeClass('is-valid');


            if (!nome.val().match(/[A-Za-z\d]/)) {
                erro.removeClass('d-none'); //REMOVE A CLASSE (d-none) DO BOOTSTRAP E EXIBE O ALERTA
                campo.html('cliente'); // ADICIONA AO ALERTA O NOME DO CAMPO NAO PREENCHIDO
                nome.focus(); //COLOCA O CURSOR NO CAMPO COM ERRO
                nome.addClass('is-invalid');


                return false;

            } else if (!email.val().match(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i)) {
                erro.removeClass('d-none'); //REMOVE A CLASSE (d-none) DO BOOTSTRAP E EXIBE O ALERTA
                campo.html('email'); // ADICIONA AO ALERTA O NOME DO CAMPO NAO PREENCHIDO
                email.focus(); //COLOCA O CURSOR NO CAMPO COM ERRO
                email.addClass('is-invalid');

                return false;

            } else if (!telefone.val().match(/^\([0-9]{2}\) [0-9]?[0-9]{5}-[0-9]{4}$/)) {
                erro.removeClass('d-none'); //REMOVE A CLASSE (d-none) DO BOOTSTRAP E EXIBE O ALERTA
                campo.html('telefone'); // ADICIONA AO ALERTA O NOME DO CAMPO NAO PREENCHIDO
                telefone.focus(); //COLOCA O CURSOR NO CAMPO COM ERRO
                telefone.addClass('is-invalid');



                return false;

            } else {

                var dados = $("#insert_form").serialize();
                $.post("processa_cad_clientes.php", dados, function(retorna) {
                    if (retorna) {
                        //Limpar os campo
                        $('#insert_form')[0].reset();

                        //Fechar a janela modal cadastrar
                        $('#cadCliente').modal('hide');
                        $('#sucessModal').modal('show');

                        setInterval(function() {
                            var redirecionar = "listar_clientes.php";
                            $(window.document.location).attr('href', redirecionar);

                        }, 3000);

                    } else {

                        return false;
                    }

                });

            }

        });

    });
</script>


<!-- Modal ALERTA DE CADASTRO COM SUCESSO-->
<div class="modal fade" id="sucessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>

            </div>
            <div class="modal-body bg-success text text-center text-white">
                CLIENTE CADASTRADO COM SUCESSO!
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- Modal ALERTA DE CADASTRO NAO REALIZADO-->
<div class="modal fade" id="dangerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>

            </div>
            <div class="modal-body bg-danger text text-center text-white">
                CLIENTE NÃO CADASTRADO!
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- ==================================================MODAL CADASTRO DE CLIENTE ==================================== -->
<div class="modal fade" id="cadCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">CADASTRO DE CLIENTES</h5>


                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>


            </div>


            <!-- ALERTA PARA ERRO DE PREENCHIMENTO DE FORMULARIO -->
            <div class="alert alert-danger d-none fade show m-3" role="alert">
                <strong>ERRO!</strong> - <strong>Preencha o campo <span id="campo-erro"></span></strong>!
                <span id="msg"></span>
            </div>

            <div class="modal-body">
                <form method="POST" id="insert_form">

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-nome" class="col-form-label">Nome</label>
                            <input type="text" name="nome" id="nome" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-email" class="col-form-label">E-mail</label>
                            <input type="email" name="email" id="email" maxlength="50" class="form-control -10">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <label for="recipient-rua" class="col-form-label">Rua</label>
                            <input type="text" name="rua" id="rua" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-numero" class="col-form-label">Nº</label>
                            <input type="text" name="numero" id="numero" maxlength="50" class="form-control -10">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-bairro" class="col-form-label">Bairro</label>
                            <input type="text" name="bairro" id="bairro" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-complemento" class="col-form-label">Complemento</label>
                            <input type="text" name="complemento" id="complemento" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-cep" class="col-form-label">Cep</label>
                            <input type="text" name="cep" id="cep" maxlength="50" class="form-control -10 border border-warning" onblur="pesquisacep(this.value);">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cidade" class="col-form-label">Cidade</label>
                            <input type="text" name="cidade" id="cidade" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-uf" class="col-form-label">UF</label>
                            <input type="text" name="uf" id="uf" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-telefone" class="col-form-label">Telefone</label>
                            <input type="text" name="telefone" id="telefone" onkeypress="mask(this, telefone);" onblur="mask(this, telefone);" class="form-control -10">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-celular" class="col-form-label">Celular</label>
                            <input type="text" name="celular" id="celular" maxlength="50" onkeypress="mask(this, celular);" onblur="mask(this, celular);" class="form-control -10">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cpf" class="col-form-label">CPF</label>
                            <input type="text" name="cpf" id="cpf" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-rg" class="col-form-label">RG</label>
                            <input type="text" name="rg" id="rg" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-nascimento" class="col-form-label">Nascimento</label>
                            <input type="text" name="nascimento" id="nascimento" class="form-control -10">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-operador" class="col-form-label cli">Operador</label>
                            <input type="text" name="operador" id="operador" maxlength="50" class="form-control" disabled value="<?php echo $_SESSION['usuarioNome'] ?>">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-dataCadastro" class="col-form-label">Data do cadastro</label>
                            <input type="text" class="form-control" value="<?php echo date('d/m/Y - H:i:s') ?>" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">

                            <label for="recipient-situacao" class="col-form-label">Situação</label>
                            <select class="form-control form-select-lg mb-5 select2" name="situacao" id="situacao" aria-label=".form-select-lg example">
                                <option value="Pendente">Pendente</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                                <option value="Cancelado">Cancelado</option>

                            </select>

                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" id="btn-cadastrar">Salvar</button>

            </div>

            </form>


        </div>
        <div class="m-2 col-md-8 col-sm-8 alert alert-primary ">
            Informe o CEP e tecle [ ENTER ] para autopreencher o endereço !
        </div>
    </div>
</div>


<!-- -----------------------------------MODAL VISUALIZAR CLIENTE----------------------------------------------------------------->
<div class="modal fade" id="visulaizarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-name" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" id="recipient-name" disabled>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-email" class="col-form-label">E-mail</label>
                            <input type="text" class="form-control" id="recipient-email" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <label for="recipient-rua" class="col-form-label">Rua</label>
                            <input type="text" class="form-control" id="recipient-rua" disabled>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-numero" class="col-form-label">Nº</label>
                            <input type="text" name="numero" id="recipient-numero" class="form-control -10" disabled>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-bairro" class="col-form-label">Bairro</label>
                            <input type="text" name="bairro" id="recipient-bairro" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-complemento" class="col-form-label">Complemento</label>
                            <input type="text" name="complemento" id="recipient-complemento" maxlength="50" class="form-control -10" disabled>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-cep" class="col-form-label">Cep</label>
                            <input type="text" name="cep" id="recipient-cep" maxlength="50" class="form-control" disabled>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cidade" class="col-form-label">Cidade</label>
                            <input type="text" name="cidade" id="recipient-cidade" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-uf" class="col-form-label">UF</label>
                            <input type="text" name="uf" id="recipient-uf" maxlength="50" class="form-control -10" disabled>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-telefone" class="col-form-label">Telefone</label>
                            <input type="text" name="telefone" id="recipient-telefone" onkeypress="mask(this, telefone);" onblur="mask(this, telefone);" class="form-control -10" disabled>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-celular" class="col-form-label">Celular</label>
                            <input type="text" name="celular" id="recipient-celular" maxlength="50" onkeypress="mask(this, celular);" onblur="mask(this, celular);" class="form-control -10" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cpf" class="col-form-label">CPF</label>
                            <input type="text" name="cpf" id="recipient-cpf" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-rg" class="col-form-label">RG</label>
                            <input type="text" name="rg" id="recipient-rg" maxlength="50" class="form-control -10" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-nascimento" class="col-form-label">Nascimento</label>
                            <input type="text" name="nascimento" id="recipient-nascimento" class="form-control -10" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-operador" class="col-form-label cli">Cadastrado por</label>
                            <input type="text" name="operador" id="recipient-operador" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-dataCadastro" class="col-form-label">Data do cadastro</label>
                            <input type="text" class="form-control" id="recipient-dataCadastro" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">

                            <label for="recipient-situacao" class="col-form-label">Situação</label>
                            <select class="form-control form-select-lg mb-5 select2" name="situacao" id="recipient-situacao" aria-label=".form-select-lg example" disabled>
                                <option value="Pendente">Pendente</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                                <option value="Cancelado">Cancelado</option>

                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-alterado_por" class="col-form-label cli">Alterado por</label>
                            <input type="text" name="alterado_por" id="recipient-alterado_por" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipientultima_alteracao" class="col-form-label">Última Alteração</label>
                            <input type="text" class="form-control" name="ultima_alteracao" id="recipientultima_alteracao" disabled>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>

            </div>
            </form>


        </div>
    </div>
</div>
<!-- -----------------------------------SCRIPT MODAL VISUALIZAR CLIENTE----------------------------------------------------------------->
<script type="text/javascript">
    $('#visulaizarCliente').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var recipient = button.data('whatever')
        var recipientnome = button.data('whatevernome')
        var recipientemail = button.data('whateveremail')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientrua = button.data('whateverrua')
        var recipientnumero = button.data('whatevernumero')
        var recipientbairro = button.data('whateverbairro')
        var recipientcomplemento = button.data('whatevercomplemento')
        var recipientcep = button.data('whatevercep')
        var recipientcidade = button.data('whatevercidade')
        var recipientuf = button.data('whateveruf')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientcelular = button.data('whatevercelular')
        var recipientcpf = button.data('whatevercpf')
        var recipientrg = button.data('whateverrg')
        var recipientnascimento = button.data('whatevernascimento')
        var recipientoperador = button.data('whateveroperador')
        var recipientsituacao = button.data('whateversituacao')
        var recipientdataCadastro = button.data('whateverdata-cadastro')
        var recipientalterado_por = button.data('whateveralterado_por')
        var recipientultima_alteracao = button.data('whateverultima_alteracao')

        var modal = $(this)
        modal.find('.modal-title').text('VISUALIZAR CLIENTE CÓDIGO: ' + recipient)
        modal.find('#id').val(recipient)
        modal.find('#recipient-name').val(recipientnome)
        modal.find('#recipient-email').val(recipientemail)
        modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-rua').val(recipientrua)
        modal.find('#recipient-numero').val(recipientnumero)
        modal.find('#recipient-bairro').val(recipientbairro)
        modal.find('#recipient-complemento').val(recipientcomplemento)
        modal.find('#recipient-cep').val(recipientcep)
        modal.find('#recipient-cidade').val(recipientcidade)
        modal.find('#recipient-uf').val(recipientuf)
        modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-celular').val(recipientcelular)
        modal.find('#recipient-cpf').val(recipientcpf)
        modal.find('#recipient-rg').val(recipientrg)
        modal.find('#recipient-nascimento').val(recipientnascimento)
        modal.find('#recipient-operador').val(recipientoperador)
        modal.find('#recipient-situacao').val(recipientsituacao)
        modal.find('#recipient-dataCadastro').val(recipientdataCadastro)
        modal.find('#recipient-alterado_por').val(recipientalterado_por)
        modal.find('#recipientultima_alteracao').val(recipientultima_alteracao)

    })
</script>

<!-- -----------------------------------MODAL EDITAR CLIENTE----------------------------------------------------------------->
<div class="modal fade" id="editarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="processa_edit_clientes.php" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-name" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" id="recipient-name" name="nome">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-email" class="col-form-label">E-mail</label>
                            <input type="email" class="form-control" id="recipient-email" name="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <label for="recipient-rua" class="col-form-label">Rua</label>
                            <input type="text" class="form-control" id="recipient-rua" name="rua">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-numero" class="col-form-label">Nº</label>
                            <input type="text" name="numero" id="recipient-numero" class="form-control -10">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-bairro" class="col-form-label">Bairro</label>
                            <input type="text" name="bairro" id="recipient-bairro" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-complemento" class="col-form-label">Complemento</label>
                            <input type="text" name="complemento" id="recipient-complemento" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-cep" class="col-form-label">Cep</label>
                            <input type="text" name="cep" id="recipient-cep" maxlength="50" class="form-control">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cidade" class="col-form-label">Cidade</label>
                            <input type="text" name="cidade" id="recipient-cidade" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-uf" class="col-form-label">UF</label>
                            <input type="text" name="uf" id="recipient-uf" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-telefone" class="col-form-label">Telefone</label>
                            <input type="text" name="telefone" id="recipient-telefone" onkeypress="mask(this, telefone);" onblur="mask(this, telefone);" class="form-control -10">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-celular" class="col-form-label">Celular</label>
                            <input type="text" name="celular" id="recipient-celular" maxlength="50" onkeypress="mask(this, celular);" onblur="mask(this, celular);" class="form-control -10">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cpf" class="col-form-label">CPF</label>
                            <input type="text" name="cpf" id="recipient-cpf" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-rg" class="col-form-label">RG</label>
                            <input type="text" name="rg" id="recipient-rg" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-nascimento" class="col-form-label">Nascimento</label>
                            <input type="text" name="nascimento" id="recipient-nascimento" class="form-control -10">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-operador" class="col-form-label cli">Cadastrado por</label>
                            <input type="text" name="operador" id="recipient-operador" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-dataCadastro" class="col-form-label">Data do cadastro</label>
                            <input type="text" class="form-control" id="recipient-dataCadastro" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">

                            <label for="recipient-situacao" class="col-form-label">Situação</label>
                            <select class="form-control form-select-lg mb-5 select2" name="situacao" id="recipient-situacao" aria-label=".form-select-lg example">
                                <option value="Pendente">Pendente</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                                <option value="Cancelado">Cancelado</option>

                            </select>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-operador" class="col-form-label cli">Alterado por</label>
                            <input type="text" name="alterado_por" id="recipient-alterado_por" maxlength="50" class="form-control" disabled value="<?php echo $_SESSION['usuarioNome'] ?>">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-dataCadastro" class="col-form-label">Última Alteração</label>
                            <input type="text" class="form-control" name="ultima_alteracao" id="recipientultima_alteracao" value="<?php echo date('d/m/Y - H:i:s') ?>" disabled>
                        </div>

                    </div>


                    <input type="hidden" name="id" class="form-control" id="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>

            </form>


        </div>
    </div>
</div>
<!-- -----------------------------------SCRIPT MODAL EDITAR CLIENTE----------------------------------------------------------------->
<script type="text/javascript">
    $('#editarCliente').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var recipient = button.data('whatever')
        var recipientnome = button.data('whatevernome')
        var recipientemail = button.data('whateveremail')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientrua = button.data('whateverrua')
        var recipientnumero = button.data('whatevernumero')
        var recipientbairro = button.data('whateverbairro')
        var recipientcomplemento = button.data('whatevercomplemento')
        var recipientcep = button.data('whatevercep')
        var recipientcidade = button.data('whatevercidade')
        var recipientuf = button.data('whateveruf')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientcelular = button.data('whatevercelular')
        var recipientcpf = button.data('whatevercpf')
        var recipientrg = button.data('whateverrg')
        var recipientnascimento = button.data('whatevernascimento')
        var recipientoperador = button.data('whateveroperador')
        var recipientsituacao = button.data('whateversituacao')
        var recipientdataCadastro = button.data('whateverdata-cadastro')
        var recipientalterado_por = button.data('whateveralterado_por')
        var recipientultima_alteracao = button.data('whateverultima_alteracao')

        var modal = $(this)
        modal.find('.modal-title').text('EDITAR CLIENTE CÓDIGO: ' + recipient)
        modal.find('#id').val(recipient)
        modal.find('#recipient-name').val(recipientnome)
        modal.find('#recipient-email').val(recipientemail)
        modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-rua').val(recipientrua)
        modal.find('#recipient-numero').val(recipientnumero)
        modal.find('#recipient-bairro').val(recipientbairro)
        modal.find('#recipient-complemento').val(recipientcomplemento)
        modal.find('#recipient-cep').val(recipientcep)
        modal.find('#recipient-cidade').val(recipientcidade)
        modal.find('#recipient-uf').val(recipientuf)
        modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-celular').val(recipientcelular)
        modal.find('#recipient-cpf').val(recipientcpf)
        modal.find('#recipient-rg').val(recipientrg)
        modal.find('#recipient-nascimento').val(recipientnascimento)
        modal.find('#recipient-operador').val(recipientoperador)
        modal.find('#recipient-situacao').val(recipientsituacao)
        modal.find('#recipient-dataCadastro').val(recipientdataCadastro)
        modal.find('#recipient-alterado_por').val(recipientalterado_por)
        modal.find('#recipientultima_alteracao').val(recipientultima_alteracao)

    })
</script>


<script>
    $(document).ready(function() {
        $(function() {
            //Pesquisar os cursos sem refresh na página
            $("#pesquisa_cliente").keyup(function() {

                var pesquisa_cliente = $(this).val();

                //Verificar se há algo digitado
                if (pesquisa_cliente != '') {
                    var dados = {
                        palavra: pesquisa_cliente
                    }
                    $.post('busca_clientes.php', dados, function(retorna) {
                        //Mostra dentro da ul os resultado obtidos
                        $(".resultado_cliente").html(retorna);
                    });
                } else {
                    $(".resultado_cliente").html('');
                }
            });
        });

    });
</script>