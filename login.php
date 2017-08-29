
<html>
    <head>
        <title>Pcomspace | Pages | Basic Grid</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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

                    <div class="one_half">
                        <h2>Login</h2>
                        <div class="form">
                            <label for="login">Login:</label>
                            <input type="text" id="login" placeholder="Digite seu login" />
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" placeholder="Digite sua senha"/>
                            <a href="Heatmap.php"><input type="submit"  id="entrar" value="Entrar"></a>
                        </div> 
                    </div>
                    
                    <div class="one_half">
                        <div class="linha-vertical"></div>
                        <h2>Ainda não tem conta?</h2>
                        <p>Cadastre-se e conheça as funcionalidades que a Bearbit desenvolveu pensando em você! 
                        <div class="form">
                            <a href="cadastro.php"><input type="submit"  id="cadastrar" value="Cadastrar"></a>
                        </div> 
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