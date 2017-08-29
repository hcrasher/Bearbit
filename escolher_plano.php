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
                    <h2>Escolha um plano</h2>
                    <p>A Bearbit disponibiliza três tipos de planos, para você escolher o mais adequado para você e sua empresa. </p>
                    <center>
                    <div class="plans">
                        <p>Mensal</p>
                        <img src="AppThemes/images/No_Image_Available.gif">
                        <p>R$ 00,00 /mes</p>
                        <ul>
                            <li>Vantagem 1</li>
                            <li>Vantagem 2</li>
                            <li>Vantagem 3</li>
                        </ul>
                    </div>
                    <div class="plansbest">
                        <p>Semestral</p>
                         <img src="AppThemes/images/No_Image_Available.gif">
                        <p>R$ 00,00 /mes</p>
                        <ul>
                            <li>Vantagem 1</li>
                            <li>Vantagem 2</li>
                            <li>Vantagem 3</li>
                        </ul>
                    </div>
                    <div class="plans">
                        <p>Anual</p>
                         <img src="AppThemes/images/No_Image_Available.gif">
                        <p>R$ 00,00 /mes</p>
                        <ul>
                            <li>Vantagem 1</li>
                            <li>Vantagem 2</li>
                            <li>Vantagem 3</li>
                        </ul>
                    </div>
                    </center>   
                    <div class="cleardiv"></div>
                    <hr>
                    <div class="cleardiv"></div>
                    <h2>Pague com</h2>
                    
                    <div class="four_quarter">
                        
                        <input type="radio" class="radio" name="pagamento" value="visa"> Visa
                        <input type="radio" class="radio" name="pagamento" value="mastercard"> MasterCard
                        <input type="radio" class="radio" name="pagamento" value="boleto"> Boleto
                        <div class="cleardiv"></div>
                        <p>Informações de pagamento</p>
                    </div>
                    <div class="one_half">
                        <div class="form">              
                            <label for="nome_cartao">Nome impresso no cartão</label>
                            <input type="text" id="nome_cartao" placeholder="Digite o nome idêntico ao que está impresso"/>
                            <label for="endereco_corp">Número cartão</label>
                            <input type="text" id="endereco_corp" placeholder="Digite o número do cartão"/>
                            <label for="vencimento_cartao">Ano Vencimento</label>
                            <select class="little">
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                              </select>
                           
                            <div class="cleardiv"></div>
                        </div> 
                    </div>
                    
                    <div class="one_half">
                        <div class="form">
                            <label for="cpf_cartao">CPF</label>
                            <input type="text" id="cpf_cartao" placeholder="Digite o CPF" />
                            
                             <label for="csv_cartao">CSV</label>
                             
                            <input type="text" id="csv_cartao" placeholder="Digite o código de segurança" />
                        </div>
                    </div>
                    
                    <hr>
                    <div class="one_half">
                        <div class="form">              
                            <a href="Heatmap.php"><input type="submit" id="avancar" value="Avançar" onclick="alert('Cadastro realizado com sucesso.')"></a>
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