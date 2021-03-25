<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shring-to-fit=no">
    <title>
        Limpmax
    </title>
    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/06da039f17.js" crossorigin="anonymous"></script>

    <!--css Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--Personalizado css-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<!--nav-->

<body>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>

    <body>


    <img src="iconic/helmetblack.svg" border="0" width="50px" height="50px"/>


        <section id="orcamento" class="orcamento-section">
            <div id="orcamento" class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="titulo-orc">Orçamento da nossa higienização</h2>
                        <h4 class="titulo-orc2">Selecione seus estofados desejados</h4>
                    </div>
                </div>
                <form action="#quantidade" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span class="border border-primary rounded">Sofá 2 lugares</span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-sofa2" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span class="border border-primary rounded">Sofá 3 lugares</span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-sofa3" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="4">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span class="border border-primary rounded">Sofá 4 lugares</span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-sofa4" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="4">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span id="cadeiras" class="border border-primary rounded">Cadeiras</span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-cadeira" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="4">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span id="puffs" class="border border-primary rounded">Puffs </span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-puff" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="4">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span id="poltrona" class="border border-primary rounded">Poltrona</span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-poltrona" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="4">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span id="colchao" class="border border-primary rounded">Colchão</span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-colchao" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="4">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span id="tapete" class="border border-primary rounded">Tapete</span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-tapete" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="4">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span class="border border-primary rounded"> Tapete Grande </span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-tapete-grande" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="4">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                            <table>
                                <tbody id="lista">
                                    <tr class="item" id="item">
                                        <td class="nome-estofado"><span id="carro" class="border border-primary rounded">Carro</span></td>
                                        <td>
                                            <div class="select-cointainer">
                                                <select class="form-select form-select-sm border-primary" name="qtde-carro" aria-label="Default select example" id="quantidade">
                                                    <option value="0">Quantidade</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="4">3</option>
                                                    <option value="4">4 </option>
                                                    <option value="5">5 </option>
                                                    <option value="6">6 ou mais </option>
                                                </select>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                    <button type="sumbit" class="btn btn-primary">Calcular orçamento</button>
                </div>
                </form>
            </div>
        </section>



        <?php
        

        $precosofa2 = 150.00;
        $precosofa3 = 170.00;
        $precosofa4 = 190.00;
        $precocadeira = 25.00;
        $precopuff = 15.00;
        $precopoltrona = 75.00;
        $precocolchao = 80.00;
        $precotapete = 50.00;
        $precotapetegrande = 75.00;
        $precocarro = 100.00;

        $preco_total = 0;

        if (isset($_POST['qtde-sofa2']) || isset($_POST['qtde-sofa3']) || isset($_POST['qtde-sofa4']) || isset($_POST['qtde-cadeira'])
        || isset($_POST['qtde-puff']) || isset($_POST['qtde-poltrona']) || isset($_POST['qtde-colchao']) || isset($_POST['qtde-tapete'])
        || isset($_POST['qtde-tapete-grande']) || isset($_POST['qtde-carro']) ) {


            $sofa2 = $_POST['qtde-sofa2'];
            $sofa3 = $_POST['qtde-sofa3'];
            $sofa4 = $_POST['qtde-sofa4'];
            $cadeira = $_POST['qtde-cadeira'];
            $puff = $_POST['qtde-puff'];
            $poltrona = $_POST['qtde-poltrona'];
            $colchao = $_POST['qtde-colchao'];
            $tapete = $_POST['qtde-tapete'];
            $tapetegrande = $_POST['qtde-tapete-grande'];
            $carro = $_POST['qtde-carro'];

            $preco_total = $sofa2 * $precosofa2;
            $preco_total = $preco_total + $sofa3 * $precosofa3;
            $preco_total = $preco_total + $sofa4 * $precosofa4;
            $preco_total = $preco_total + $cadeira * $precocadeira;
            $preco_total = $preco_total + $puff * $precopuff;
            $preco_total = $preco_total + $poltrona * $precopoltrona;
            $preco_total = $preco_total + $colchao * $precocolchao;
            $preco_total = $preco_total + $tapete * $precotapete;
            $preco_total = $preco_total + $tapetegrande * $precotapetegrande;
            $preco_total = $preco_total + $carro * $precocarro;

 
        }
        echo $preco_total;
        ?>  
    </body>

    </html>

    <!--JS Bootstrap-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>