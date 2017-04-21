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
        <title>Pcomspace | Pages | Basic Grid</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="AppThemes/css/layout.css" rel="stylesheet" type="text/css" media="all">
        <style type="text/css">
            /* DEMO ONLY */
            .container .demo{text-align:center;}
            .container .demo div{padding:8px 0;}
            .container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
            .container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
            @media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
            /* DEMO ONLY */
        </style>
    </head>
    <body id="top">
        <!-- Top Background Image Wrapper -->
        <?php
        include 'modules/header.php';
        ?>


        <div class="wrapper row3">
            <main class="hoc container clear"> 
                <!-- main body --> 

                <div class="content"> 

                    <h2>Half</h2>

                    <div class="group btmspace-50 demo">
                        <div class="one_half first">1/2</div>
                        <div class="one_half">1/2</div>
                    </div>

                    <h2>Quarter</h2>

                    <div class="group btmspace-50 demo">
                        <div class="one_quarter first">1/4</div>
                        <div class="one_quarter">1/4</div>
                        <div class="one_quarter">1/4</div>
                        <div class="one_quarter">1/4</div>
                    </div>
                    <div class="group btmspace-50 demo">
                        <div class="one_quarter first">1/4</div>
                        <div class="one_quarter">1/4</div>
                        <div class="two_quarter">2/4 or 1/2</div>
                    </div>
                    <div class="group btmspace-50 demo">
                        <div class="one_quarter first">1/4</div>
                        <div class="three_quarter">3/4</div>
                    </div>

                    <h2>Third</h2>

                    <div class="group btmspace-50 demo">
                        <div class="one_third first">1/3</div>
                        <div class="one_third">1/3</div>
                        <div class="one_third">1/3</div>
                    </div>
                    <div class="group demo">
                        <div class="one_third first">1/3</div>
                        <div class="two_third">2/3</div>
                    </div>

                </div>

                <!-- / main body -->
                <div class="clear"></div>
            </main>
        </div>
  <?php
        include 'modules/footer.php';
        ?>

    </body>
</html>