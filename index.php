<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5-Shinobi</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="./css/all.css">

    <!--Favicon -->
    <link rel="icon" type="img/favicon.jpg" href="./imgs/favicon.jpg">

    <!-- Link CSS Pessoal -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/style-responsivo.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--[if lt IE 9]> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <![endif]-->

</head>
<body>
    <header class="header bg-black">
       <div class="container">
            <h1 class="oculto">HTML5-Shinobi</h1>

            <img src="./imgs/learnCool.png" alt="logo cursos" title="HTML5-Shinobi" class="logo">

            <nav>
                <h1 class="oculto">Mais sobre HTML</h1>
                <ul class="menu">
                    <li>
                        <a href="#">Início</a>
                    </li>
                    <li>
                        <a href="#">Audio</a>
                    </li>
                    <li>
                        <a href="#">Vídeo</a>
                    </li>
                    <li>
                        <a href="#">Formulário</a>
                    </li>
                    <li>
                        <a href="#">Sobre</a>
                    </li>
                </ul>
            </nav>

            <a href="#" class="btn-saiba-mais">Saiba mais</a>
       </div>
    </header> <!-- Finaliza o header -->

    <div class="clear"></div>

    <section class="slide background-fixed-1 color-white text-center">
        
            <h1 class="titulo-slide">Curso Web Developer</h1>
            <p>Desenvolvendo Softwares profissionais para a Web</p>    
             
    </section> <!-- Finaliza o slide -->

    <section class="detalhes-curso text-center padding-30">
        <div class="container">
            <div class="padding-30">
                <h1 class="titulo">Vamos aprender a programar</h1>
                <p>Bora lá galera!</p>
            </div>        

            <div class="row">
                <article class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="detalhes">
                        <img src="./imgs/icones/curso-pratico-especializati.png" alt="HTML5 Curso prático" title="Curso HTML5">
                        <h1 class="titulo-detalhe">Prático</h1>
                    </div>
                </article>

                <article class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="detalhes">
                    <img src="./imgs/icones/curso-online-especializati.png" alt="HTML5 Curso rápido" title="Curso HTML5">
                    <h1 class="titulo-detalhe">Rápido</h1>
                </div>
                </article>

                <article class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="detalhes">
                    <img src="./imgs/icones/projetos-reais-especializati.png" alt="HTML5 Curso divertido" title="Curso HTML5">
                    <h1 class="titulo-detalhe">Divertido</h1>
                </div>
                </article>

                <article class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="detalhes">
                    <img src="./imgs/icones/certificado-digital-especializati.png" alt="HTML5 Curso profissional" title="Curso HTML5">
                    <h1 class="titulo-detalhe">Profissional</h1>
                </div>
                </article>
            </div>

        </div>
    </section> <!-- Detalhes-curso -->


    <section class="propaganda text-center padding-60 bg-blue-one color-white">
        <div class="container col-md-12 padding-10">
            <h1 class="titulo-propaganda">
                Aprendendo a desenvolver de maneira profissional, sites modernos e avançados. 
            </h1>            
        </div>

        <div class="container">            
            <a class="btn-saiba-mais2" href="">Saiba Mais</a>
        </div>
    </section> <!-- Final Propaganda -->


    <section class="cursos text-center padding-30">
        <div class="container">
            <h1 class="titulo padding-30">Conteúdo <mark>Curso Web Developer</mark></h1>

            <div class="row">

                <article class="col-md-3 col-sm-6 col-xs-12 box-detalhes-curso">
                    <img src="./imgs/conteudo-cursos/treinamento-php-especializati.png" alt="Curso PHP" title="Curso PHP" class="img-curso">
                    <h1 class="titulo-curso">
                        Curso de PHP
                    </h1>
                    <p class="descricao">
                        Aprenda PHP 
                    </p>
                </article>   

                <article class="col-md-3 col-sm-6 col-xs-12 box-detalhes-curso">
                    <img src="./imgs/conteudo-cursos/treinamento-javascript-especializati.png" alt="Curso JavaScript" title="Curso PHP" class="img-curso">
                    <h1 class="titulo-curso">
                        Curso de JavaScript
                    </h1>
                    <p class="descricao">
                        Aprenda JavaScript 
                    </p>
                </article> 

                <article class="col-md-3 col-sm-6 col-xs-12 box-detalhes-curso">
                    <img src="./imgs/conteudo-cursos/treinamento-jquery-especializati.png" alt="Curso jQuery" title="Curso jQuery" class="img-curso">
                    <h1 class="titulo-curso">
                        Curso de jQuery
                    </h1>
                    <p class="descricao">
                        Aprenda jQuery 
                    </p>
                </article> 

                <article class="col-md-3 col-sm-6 col-xs-12 box-detalhes-curso">
                    <img src="./imgs/conteudo-cursos/treinamento-ajax-especializati.png" alt="Curso Ajax" title="Curso Ajax" class="img-curso">
                    <h1 class="titulo-curso">
                        Curso de Ajax
                    </h1>
                    <p class="descricao">
                        Aprenda Ajax 
                    </p>
                </article>                

                <article class="col-md-3 col-sm-6 col-xs-12 box-detalhes-curso">
                    <img src="./imgs/conteudo-cursos/treinamento-seo-especializati.png" alt="Curso SEO" title="Curso SEO" class="img-curso">
                    <h1 class="titulo-curso">
                        Curso de SEO
                    </h1>
                    <p class="descricao">
                        Aprenda SEO (Google, Yahoo, Bing)
                    </p>
                </article>

                <article class="col-md-3 col-sm-6 col-xs-12 box-detalhes-curso">
                    <img src="./imgs/conteudo-cursos/desenvolvimento-sistemas-especializati.png" alt="Curso Desenvolvimento de Sistemas" title="Curso Desenvolvimento de Sistemas" class="img-curso">
                    <h1 class="titulo-curso">
                        Curso de Desenvolvimento de Sistemas
                    </h1>
                    <p class="descricao">
                        Aprenda Desenvolvimento de Sistemas
                    </p>
                </article>

            </div>
        </div>
    </section> <!-- Fim cursos -->

    <section class="propaganda-dois padding-70 background-fixed-2 color-white text-center">
        <h1 class="titulo padding-20">Aprendendo a aprender, crescendo juntos</h1>
        <a class="btn-saiba-mais3">Saiba Mais</a>
    </section> <!-- Final propaganda 2 -->

    <section class="mais-detalhes">
        <div class="container">
            <div class="row">
                <h1 class="oculto">Curso abrangente</h1>

                <article class="col-md-6">
                    <h1 class="titulo-detalhe">Sólido e abrangente</h1>

                    <p class="descricao">
                        Crescimento contínuo!
                    </p>
                </article>

                <div class="col-md-6 text-center">
                    <img src="./imgs/desenvolvimento-responsivo.png" alt="Desenvolvendo sites responsivos" title="Desenvolvendo sites responsivos" class="img-designer-responsivo">
                </div>
            </div>
        </div>
    </section> <!-- Final Mais Detalhes -->

    <footer class="footer color-white">
        <h1 class="oculto">Detalhes sobre o Curso Web Developer</h1>

            <div class="container padding-20">
                <div class="row">
                    
                <article class="col-md-4">
                    <h1 class="titulo-footer">Learn Cool</h1>                    
                        <nav>
                            <h1 class="oculto">Mais sobre HTML</h1>
                            <ul class="menu-footer">
                                <li>
                                    <a href="#">Início</a>
                                </li>
                                <li>
                                    <a href="#">Audio</a>
                                </li>
                                <li>
                                    <a href="#">Vídeo</a>
                                </li>
                                <li>
                                    <a href="#">Formulário</a>
                                </li>
                                <li>
                                    <a href="#">Sobre</a>
                                </li>
                            </ul>
                        </nav>                    
                </article>

              <article class="col-md-4">
                    <h1 class="titulo-footer">Empresa</h1>                    
                        <nav>
                            <h1 class="oculto">Mais sobre a Empresa</h1>
                            <ul class="menu-footer">
                                <li>
                                    <a href="#">O professor</a>
                                </li>
                                <li>
                                    <a href="#">Contato</a>
                                </li>
                            </ul>
                        </nav>                    
                </article> 

              <article class="col-md-4">
                    <h1 class="titulo-footer">Social</h1>                    
                    <ul class="redes-sociais">
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-google-plus-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </article> 

                </div>
            </div>     
    </footer> <!-- Finalizado Footer -->

    <div class="copyrigth">
        <p class="copyrigth">
            Copyright &COPY; Todos os direitos reservados <?=date('Y')?> - Rubem Cândido
        </p>
    </div>



    <!-- JQuery, Bootstrap --> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>