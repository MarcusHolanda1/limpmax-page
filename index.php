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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<!--nav-->

<body>

    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="https://www.instagram.com/limpmaxbsb/?hl=pt-br" target="_blank">
            <img src="img/logolimp.png" width="80" height="40" class="d-inline-block align-top" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#servico" class="nav-link font-weight-bold text-dark scroll-page">Serviço</a>
                </li>
                <li class="nav-item">
                    <a href="#produtos" class="nav-link font-weight-bold text-dark scroll-page">Utensílios</a>
                </li>
                <li class="nav-item">
                    <a href="#beneficios" class="nav-link font-weight-bold text-dark scroll-page">Benefícios</a>
                </li>
                <li class="nav-item">
                    <a href="#contato" class="nav-link font-weight-bold text-dark scroll-page">Contato</a>
                </li>
                <a href="#orcamento" class="btn btn-block btn-orcamento font-weight-bold text-dark">Fazer orçamento</a>
            </ul>

        </div>
    </nav>
    <!--Slide-->

    <h1 class="bemvindo text-center bg-bemvindo">Bem-vindo a Limpmax!</h1>
    <div id="mainSlide" data-interval="1700" class="carousel slide bg-bemvindoo" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainSlide" data-slide-to="0" class="active"></li>
            <li data-target="#mainSlide" data-slide-to="1"></li>
            <li data-target="#mainSlide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/bmteste2.jpg" alt="First slide ">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/bmteste3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/bmteste2.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#mainSlide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--Sobre a empresa-->
    <section id="servico">
        <div class="container">
            <div class="title">
                <h2>Como funciona nosso serviço?</h2>
                <p>On the gym floor or in the pool. Find things you want to do, in the places you want to do them.</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card  border-info text-center">
                        <div class="inner">
                            <img src="img/flotad.jpg" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">GYM FLOOR</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  border-info text-center">
                        <div class="inner">
                            <img src="img/flotad.jpg" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">GYM FLOOR</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  border-info text-center">
                        <div class="inner">
                            <img src="img/flotad.jpg" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">GYM FLOOR</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- produtos e utilitários-->
    <div id="produtos" class="container-fluid bg-parallax">
        <div class="mt-2 py-4">
            <section class="container">
                <header class="col-md-12">
                    <h2 class="text-center text-light">Quais utensílios usamos?</h2>
                    <p class="text-center text-light">
                        
                    </p>
                </header>
                <div class="row py-4">
                    <div class="col-md-4">
                        <div class="fatos">
                            <div class="icon">
                                <img src="iconic/cleaning.svg" alt="produtos" class="icone">
                                <div class="fatos-contador text-light">
                                    <h4>Nos utilizamos um produto que tira ácaro etc</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fatos">
                            <div class="icon">
                                <img src="iconic/cleaning-staff-cor.svg" alt="produtos" class="icone">
                                <div class="fatos-contador text-light">
                                    <h4>Nos entramos devidamente equipados na sua casa</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fatos">
                            <div class="icon">
                                <img src="iconic/vacuum-cleaner.svg" alt="produtos" class="icone">
                                <div class="fatos-contador text-light">
                                    <h4>Nos utilizamos extratora que nao danifica</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--Benefícios de contratar a Limpmax-->
    <div id="beneficios" class="container-fluid bg-beneficio">
        <div class="mt- py-4">
            <section class="container-fluid">
                <header class="col-md-12">
                    <h2 class="text-center">Quais benefícios a Limpmax pode te propor?</h2>
                </header>
                <div class="row py-4">
                    <div class="col-md-4">
                        <div class="benef-fatos">
                            <div class="icon-beneficio">
                                <img src="iconic/stain.svg" alt="produtos" class="icone" width="50px" height="50px">
                                <div class="fatos-contador">
                                    <p>Retiramos/reduzimos todas as manchas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benef-fatos">
                            <div class="icon-beneficio">
                                <img src="iconic/bad-breath.svg" alt="produtos" class="icone" width="50px" height="50px">
                                <div class="fatos-contador">
                                    <p>Fique livre de alergias</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benef-fatos">
                            <div class="icon-beneficio">
                                <img src="iconic/quality.svg" alt="produtos" class="icone" width="50px" height="50px">
                                <div class="fatos-contador">
                                    <p>Oferecemos 7 dias de garantia </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benef-fatos">
                            <div class="icon-beneficio">
                                <img src="iconic/helmetblue.svg" alt="produtos" class="icone" width="50px" height="50px">
                                <div class="fatos-contador">
                                    <p>Trabalhamos com segurança</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benef-fatos">
                            <div class="icon-beneficio">
                                <img src="iconic/alarm.svg" alt="produtos" class="icone" width="50px" height="50px">
                                <div class="fatos-contador">
                                    <p>Somos pontuais</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benef-fatos">
                            <div class="icon-beneficio">
                                <img src="iconic/cleaning-spray1.svg" alt="produtos" class="icone" width="50px" height="50px">
                                <div class="fatos-contador">
                                    <p clas="text-center">Melhores produtos do mercado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>




    </div>


    <!--Sofá metade-->
    <div class="estrelas text-center">
        <h3 class="garantia">Garantia</h3>
        <span class="fa fa-star checked" aria-hidden="true">
            <span class="fa fa-star checked" aria-hidden="true">
                <span class="fa fa-star checked" aria-hidden="true">
                    <span class="fa fa-star checked" aria-hidden="true">
                        <span class="fa fa-star checked" aria-hidden="true">
    </div>
    <div id="sofameio" class="container-fluid bg-sofameio text-center">
        <h5>Oferecemos garantia de 7 dias para seu estofado, caso houver alguma infelicidade voltamos para refazer o serviço!</h5>


        <img src="img/sofaedit.jpg" alt="Sofa" class="img-fluid sofametade">

    </div>


    <!--Contato-->
    <div id="contato" class="container-fluid bg-contato">
        <div class="mt-2 py-4">
            <section class="container">
                <header class="col-md-12">
                    <h2 class="text-center">Como entrar em contato?</h2>
                </header>
                <div class="row py-4">
                    <div class="col-md-4">
                        <div class="contatinho">
                            <div class="icone-contato">
                                <a href="" target="_blank" class="icon1 fas fa-map-marker-alt"></a>
                                <div class="text-contato">
                                    <p>Não possuimos local de serviço, nós levamos nosso serviço até você!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contatinho">
                            <div class="icone-contato" >
                                <a href="https://api.whatsapp.com/send/?phone=5561996958056&text&app_absent=0" target="_blank" class="fab fa-whatsapp" ></a>
                                <div class="text-contato">
                                    <p>Nosso atendimento é feito pelo Whatsapp, converse com a gente por lá! <br><p class="font-weight-bold">(Clique no ícone para acessar)</p></br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contatinho">
                            <div class="icone-contato">
                                <a href="https://www.instagram.com/limpmaxbsb/?hl=pt-br" class="fab fa-instagram"  target="_blank"></a>
                                <div class="text-contato">
                                    <p>Nossa principal rede social é o Instagram, lá postamos todas novidades sobre o serviço.<br><p class="font-weight-bold">(Clique no ícone para acessar)</p></br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <!--Orçamento php-->
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
                                    <td class="nome-estofado"><span id="sofal" class="border border-primary rounded">Sofá em L</span></td>
                                    <td>
                                        <div class="select-cointainer">
                                            <select class="form-select form-select-sm border-primary" name="qtde-l" aria-label="Default select example" id="quantidade">
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
                                    <td class="nome-estofado"><span id="almofadas" class="border border-primary rounded">Almofada</span></td>
                                    <td>
                                        <div class="select-cointainer">
                                            <select class="form-select form-select-sm border-primary" name="qtde-almofada" aria-label="Default select example" id="quantidade">
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
                                    <td class="nome-estofado"><span id="colchaosolt" class="border border-primary rounded">Colchão/solt.</span></td>
                                    <td>
                                        <div class="select-cointainer">
                                            <select class="form-select form-select-sm border-primary" name="qtde-colchao-solt" aria-label="Default select example" id="quantidade">
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
                                    <td class="nome-estofado"><span id="colchaobebe" class="border border-primary rounded">Colchão/bebê</span></td>
                                    <td>
                                        <div class="select-cointainer">
                                            <select class="form-select form-select-sm border-primary" name="qtde-colchao-bebe" aria-label="Default select example" id="quantidade">
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
                                    <td class="nome-estofado"><span id="colchaocasal" class="border border-primary rounded">Colchão/casal</span></td>
                                    <td>
                                        <div class="select-cointainer">
                                            <select class="form-select form-select-sm border-primary" name="qtde-colchao-casal" aria-label="Default select example" id="quantidade">
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
                                    <td class="nome-estofado"><span id="bebeconforto" class="border border-primary rounded">Bebê conforto</span></td>
                                    <td>
                                        <div class="select-cointainer">
                                            <select class="form-select form-select-sm border-primary" name="qtde-bebeconforto" aria-label="Default select example" id="quantidade">
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
                                    <td class="nome-estofado"><span id="carrinhobebe" class="border border-primary rounded">Carrinho/Bebê</span></td>
                                    <td>
                                        <div class="select-cointainer">
                                            <select class="form-select form-select-sm border-primary" name="qtde-carrinhobebe" aria-label="Default select example" id="quantidade">
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
                                    <td class="nome-estofado"><span id="tapetebig" class="border border-primary rounded">Tapete grande</span></td>
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
                                    <td class="nome-estofado"><span id="bancocarr" class="border border-primary rounded">Banco/carro</span></td>
                                    <td>
                                        <div class="select-cointainer">
                                            <select class="form-select form-select-sm border-primary" name="qtde-banco-carro" aria-label="Default select example" id="quantidade">
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
                                    <td class="nome-estofado"><span id="carro" class="border border-primary rounded">Carro inteiro</span></td>
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
        <div class="row justify-content-center botao">
            <div class="col-md-6 justify-content-center col-lg-7 d-flex align-items-center">
                <button href="#result" type="submit" class="btn btn-primary">Calcular orçamento</button>
            </div>
            </form>
        </div>




        <?php


        $precosofa2 = 150.00;
        $precosofa3 = 170.00;
        $precosofa4 = 190.00;
        $precosofal = 220.00;
        $precoalmofada = 30.00;
        $precocadeira = 25.00;
        $precopuff = 15.00;
        $precopoltrona = 75.00;
        $precocolchaosolteiro = 80.00;
        $precocolchaobebe = 60.00;
        $precocolchaocasal = 130.00;
        $precobebeconforto = 12.00;
        $precocarrinhobebe = 40.00;
        $precotapete = 50.00;
        $precotapetegrande = 75.00;
        $precobancocarro = 15.00;
        $precocarro = 100.00;


        $preco_total = 0;

        if (
            isset($_POST['qtde-sofa2']) || isset($_POST['qtde-sofa3']) || isset($_POST['qtde-sofa4']) || isset($_POST['qtde-cadeira'])
            || isset($_POST['qtde-puff']) || isset($_POST['qtde-poltrona']) || isset($_POST['qtde-colchao-solt']) || isset($_POST['qtde-tapete'])
            || isset($_POST['qtde-tapete-grande']) || isset($_POST['qtde-carro']) || isset($_POST['qtde-l']) || isset($_POST['qtde-almofada'])
            || isset($_POST['qtde-colchao-bebe']) || isset($_POST['qtde-colchao-casal']) || isset($_POST['qtde-bebeconforto']) || isset($_POST['qtde-carrinhobebe'])
            || isset($_POST['qtde-banco-carro'])
        ) {


            $sofa2 = $_POST['qtde-sofa2'];
            $sofa3 = $_POST['qtde-sofa3'];
            $sofa4 = $_POST['qtde-sofa4'];
            $sofal = $_POST['qtde-l'];
            $almofada = $_POST['qtde-almofada'];
            $cadeira = $_POST['qtde-cadeira'];
            $puff = $_POST['qtde-puff'];
            $poltrona = $_POST['qtde-poltrona'];
            $colchaosolt = $_POST['qtde-colchao-solt'];
            $colchaobebe = $_POST['qtde-colchao-bebe'];
            $colchaocasal = $_POST['qtde-colchao-casal'];
            $bebeconforto = $_POST['qtde-bebeconforto'];
            $carrinhobebe = $_POST['qtde-carrinhobebe'];
            $tapete = $_POST['qtde-tapete'];
            $tapetegrande = $_POST['qtde-tapete-grande'];
            $bancocarro = $_POST['qtde-banco-carro'];
            $carro = $_POST['qtde-carro'];




            $preco_total = $sofa2 * $precosofa2;
            $preco_total = $preco_total + $sofa3 * $precosofa3;
            $preco_total = $preco_total + $sofa4 * $precosofa4;
            $preco_total = $preco_total + $sofal * $precosofal;
            $preco_total = $preco_total + $almofada * $precoalmofada;
            $preco_total = $preco_total + $cadeira * $precocadeira;
            $preco_total = $preco_total + $puff * $precopuff;
            $preco_total = $preco_total + $poltrona * $precopoltrona;
            $preco_total = $preco_total + $colchaosolt * $precocolchaosolteiro;
            $preco_total = $preco_total + $colchaobebe * $precocolchaobebe;
            $preco_total = $preco_total + $colchaocasal * $precocolchaocasal;
            $preco_total = $preco_total + $bebeconforto * $precobebeconforto;
            $preco_total = $preco_total + $carrinhobebe * $precocarrinhobebe;
            $preco_total = $preco_total + $tapete * $precotapete;
            $preco_total = $preco_total + $tapetegrande * $precotapetegrande;
            $preco_total = $preco_total + $bancocarro * $precobancocarro;
            $preco_total = $preco_total + $carro * $precocarro;
        }

        /*echo  "<h2> Seu orçamento é de $preco_total,00  R$</h2>";*/
        ?>

        <div class="alert alert-primary text-center  text-center" role="alert" id="result">
            <?php
            echo  "<h2> Seu orçamento é de $preco_total,00  R$</h2>";
            ?>
        </div>

    </section>




    <!-- Footer-->
    <footer class="bg-rodape1 text-center">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-info btn-floating m-1" href="https://www.facebook.com/limpmaxbsbdf" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>

                <a class="btn btn-outline-info btn-floating m-1" href="https://www.instagram.com/limpmaxbsb/?hl=pt-br" target="_blank" role="button"><i class="fab fa-instagram"></i></a>

                <a class="btn btn-outline-info btn-floating m-1" href="https://api.whatsapp.com/send/?phone=5561996958056&text&app_absent=0" target="_blank" role="button"><i class="fab fa-whatsapp"></i></a>
        </div>

        <div class="text-center p-3 text-dark bg-rodape2">
            © 2021 Copyright: Marcus Holanda - All rights reserved
        </div>
    </footer>



    <!--JS Bootstrap-->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>