<!DOCTYPE html>
<!--
Template Name Pcomspace
Author <a href="http//www.os-templates.com/">OS Templates</a>
Author URI http//www.os-templates.com/
Licence Free to use under our free template licence terms
Licence URI http//www.os-templates.com/template-terms
-->
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
                    <h2>Cadastrar</h2>
                    <div class="four_quarter">
                        <p>Informações pessoais</p>
                        <div class="form">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" placeholder="Digite seu nome completo" style="width:100%"/>
                            <label for="endereco">Endereço completo</label>
                            <input type="text" id="endereco" placeholder="Digite seu endereço" style="width:100%"/>
                        </div>
                    </div>
                    <div class="one_half">
                        <div class="form">              
                            <label for="rg">RG</label>
                            <input type="text" id="rg" placeholder="Digite seu RG" />
                            
                            <label for="email">E-mail</label>
                            <input type="text" id="email" placeholder="Digite seu e-mail" />
                            
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" placeholder="Digite sua senha"/>
                        </div> 
                    </div>
                    
                    <div class="one_half">
                        <div class="form">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" placeholder="Digite seu CPF" />
                            
                             <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" placeholder="Digite seu telefone" />
                            
                            <label for="confirm_senha">Confirme a senha</label>
                            <input type="password" id="confirm_senha" placeholder="Confirme sua senha"/>
                            <div class="cleardiv"></div>
                        </div>
                    </div>
                    
                    <hr>
                    
                    <div class="four_quarter">
                        <p>Informações da empresa</p>
                    </div>
                    <div class="one_half">
                        <div class="form">              
                            <label for="nome_corp">Nome Empresa</label>
                            <input type="text" id="nome_corp" placeholder="Digite o nome da empresa"/>
                            <label for="endereco_corp">Endereço completo</label>
                            <input type="text" id="endereco_corp" placeholder="Digite o endereço a empresa"/>
                            <label for="email_corp">E-mail</label>
                            <input type="text" id="email_corp" placeholder="Digite seu e-mail corporativo" />
                            <div class="cleardiv"></div>
                        </div> 
                    </div>
                    
                    <div class="one_half">
                        <div class="form">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" id="cnpj" placeholder="Digite o CNPJ da empresa" />
                            
                             <label for="telefone_corp">Telefone corporativo</label>
                            <input type="text" id="telefone_corp" placeholder="Digite seu telefone corporativo" />
                        </div>
                    </div>
                    
                    <hr>
                   
                    <div class="one_half">
                        <div class="form">              
                            <a href="escolher_plano.php"><input type="submit"  id="avancar" value="Avançar"></a>
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