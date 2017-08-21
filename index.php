<!DOCTYPE html>
<!--
Template Name: Pcomspace
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
    <head>
        <title>BearBit</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="AppThemes/css/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id="top">
        <!-- Top Background Image Wrapper -->
        <div class="bgded overlay" style="background-image:url('AppThemes/images/banner_01.jpg');"> 
            <div class="wrapper row1">
                <header id="header" class="hoc clear"> 
                    <div id="logo" class="fl_left">
                        <h1><a href="index.html"><img src="AppThemes/images/logo_header.png" alt="Bearbit Inc"></a></h1>
                    </div>
                    <!--menu-->
                    <?php
                    include 'modules/menu.php';
                    ?>
                </header>
            </div>
            <div id="pageintro" class="hoc clear">
                <article> 

                    <h3 class="heading">Você já sabe o que é heatmap?</h3>
                    <p>É um mapa de calor que apresenta as informações através das cores. Com ele, você consegue visualizar melhor seus dados de um jeito fácil e prático através de mapas geográficos.</p>
                    <!--<p class="font-x1 uppercase bold">Lacus nec ligula rutrum feugiat</p>-->
                    <footer>
                        <ul class="nospace inline pushright">
                            <li><a class="btn" href="o-que-e-heatmap.php">Clique aqui e saiba mais</a></li>
                        </ul>
                    </footer>
                </article>
            </div>
        </div>
        <!-- End Top Background Image Wrapper --> 
        <div class="wrapper row3">
            <main class="hoc container clear"> 
                <!-- main body --> 
                <div class="sectiontitle" id="tools">
                    <h6 class="heading">Conheça suas funcionalidades</h6>
                </div>
                <ul class="nospace group center">
                    <li class="one_quarter first">
                        <article><a href="#"><i class="icon btmspace-30 fa fa-language"></i></a>
                            <h6 class="heading font-x1">Utilize os <strong>seus</strong> dados</h6>
                            <p>Após a importação, eles poderão ser visualizados dentro do mapa.</p>
                        </article>
                    </li>
                    <li class="one_quarter">
                        <article><a href="#"><i class="icon btmspace-30 fa fa-adjust"></i></a>
                            <h6 class="heading font-x1">Visualize facilmente</h6>
                            <p>Eles serão visualizados dentro do mapa geográfico utilizando o heatmap.</p>
                        </article>
                    </li>
                    <li class="one_quarter">
                        <article><a href="#"><i class="icon btmspace-30 fa fa-low-vision"></i></a>
                            <h6 class="heading font-x1">Heatmap</h6>
                            <p>O heatmap é um mapa de calor que exibe a incidencia através das cores, facilitando na tomada de decisão da sua empresa.</p>
                        </article>
                    </li>
                    <li class="one_quarter">
                        <article><a href="#"><i class="icon btmspace-30 fa fa-blind"></i></a>
                            <h6 class="heading font-x1">Relatórios</h6>
                            <p>Dentro do mapa você consegue filtrá-lo e exportar relatórios com as informações que você solicitar.</p>
                        </article>
                    </li>
                </ul>
                <!-- / main body -->
                <div class="clear"></div>
            </main>
        </div>

        <div class="wrapper bgded" style="background-image:url('AppThemes/images/brazil_map.png');">
            <div class="hoc split clear">
                <section style="float:left !important; ">
                    <p class="nospace font-xs">Por que utilizar o </p>
                    <h6 class="heading">Mapa Geográfico?</h6>
                    <p class="btmspace-30">Através do nosso banco, com as latitudes e longitudes de cada cidade do Brasil, é possível visualizar qualquer informação importada ao Aplicativo.
                    Após a inserção dos dados ao site, estes serão processados e gerarão o heatmap.</p>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-check-circle"></i> Ideal para visualização de grande volume de dados.</li>
                        <li><i class="fa-li fa fa-check-circle"></i> Os dados são visualizados de forma visual, e as cores auxilião na percepcção de informação.</li>
                        <li><i class="fa-li fa fa-check-circle"></i> Cada cor representa os indíces de incidência da informação obtida.</li>
                    </ul>

                </section>
            </div>
        </div>
        <div class="wrapper bgded" style="background-image:url('AppThemes/images/graphs.png'); background-color:#e1e1e1;">
            <div class="hoc split clear">
                <section>
                    <p class="nospace font-xs">Por que gerar</p>
                    <h6 class="heading">relatórios?</h6>
                    <p class="btmspace-30">A partir dos dados importados e dos filtros selecionados no mapa geográfico, é possível gerar relatórios em <i>.pdf</i></p>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-check-circle"></i> Podendo ser utilizados em apresentações.</li>
                        <li><i class="fa-li fa fa-check-circle"></i> Conteúdo de fácil leitura, podendo ser vistos em kindles e até impresso.</li>
                        <li><i class="fa-li fa fa-check-circle"></i> Após gerados, não é necessário o processamento do seu dispositivo.</li>
                    </ul>

                </section>
            </div>
        </div>
        <div class="wrapper coloured overlay bgded" style="background-image:url('images/demo/backgrounds/03.png');">
            <article class="hoc cta clear">
                <h6 class="three_quarter first">Conheça a nossa equipe</h6>
                <!--<footer class="one_quarter"><a class="btn" href="#">Aqui</a></footer>-->
            </article>
        </div>
        <div class="wrapper row3">
            <div class="hoc container clear">
                <ul id="testimonials" class="nospace group">
                    <li class="one_third first">
                        <figure><img class="circle" src="AppThemes/images/60x60.png" alt="">
                            <figcaption><strong>Lívia Oliveira</strong><br>
                                <em>Front-end developer, BearBit</em></figcaption>
                        </figure>
                        <blockquote>Amante de design, é a responsável pelo design do website focando em UX. </blockquote>
                    </li>
                    <li class="one_third">
                        <figure><img class="circle" src="AppThemes/images/60x60.png" alt="">
                            <figcaption><strong>Milene Mayumi</strong><br>
                                <em>Gerente de Projetos, BearBit</em></figcaption>
                        </figure>
                        <blockquote>Com muito foco e dedicação, é a responsável pelo projeto BearBit como um todo.</blockquote>
                    </li>
                    <li class="one_third">
                        <figure><img class="circle" src="AppThemes/images/60x60.png" alt="">
                            <figcaption><strong>Pedro Zingra</strong><br>
                                <em>Back-end developer, BearBit</em></figcaption>
                        </figure>
                        <blockquote>Louco por tecnologia, é o responsável por toda funcionalidade do sistema da BearBit.</blockquote>
                    </li>
                    <li class="one_third">
                        <figure><img class="circle" src="AppThemes/images/60x60.png" alt="">
                            <figcaption><strong>Yan Richarde</strong><br>
                                <em>Analista, BearBit</em></figcaption>
                        </figure>
                        <blockquote>Pensando no ontem, hoje e amanhã, é o responsável por pensar em cada resultado de cada função da BearBit, para deixar cada processamento o mais rápido possível.</blockquote>
                    </li>
                </ul>
            </div>
        </div>
        <!--<div class="wrapper overlay bgded" style="background-image:url('images/demo/backgrounds/04.png');">
            <div id="ctdetails" class="hoc clear">
                <ul class="nospace group">
                    <li class="one_third first"><i class="fa fa-map-marker"></i>
                        <p>Our Location</p>
                        <p><a href="#">Google Maps</a></p>
                    </li>
                    <li class="one_third"><i class="fa fa-phone"></i>
                        <p>Call us</p>
                        <p>+00 (123) 456 7890</p>
                    </li>
                    <li class="one_third"><i class="fa fa-envelope-o"></i>
                        <p>Email us</p>
                        <p>info@yourdomainname.com</p>
                    </li>
                </ul>
            </div>
        </div>-->
        <?php
        include 'modules/footer.php';
        ?>
    </body>
</html>