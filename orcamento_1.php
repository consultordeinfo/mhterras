<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description"
              content="Nos envie rapidamente sua proposta de orçamento...">
        <?php
        //requisitando cabeçalho
        require_once './class/head.php';
        ?>
        <title></title>
    </head>
    <body>
        <div class="container-fluid corpo">
            <?php
            //requisitando topo
            require_once './class/topo.php';
            ?>

            <?php
            // requisitando menu
            require_once './class/menu_2.php';
            ?>

            <!--Área de orçamento-->
            <div class="container-fluid orcar">
                <h1>Orçamentos</h1><hr>
                <p>Abaixo, preencha o formulário e escolha entre os ítens que deseja orçar!</p>
                <div class="container-fluid form-group">
                    <form name="frmOrcamento" action="class/send_orcamento.php" method="post" role="form" onsubmit="return validarOrcamento()">
                        <div class="form-group">
                            <label for="usrname"><i class="fa fa-user"></i> Cliente</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" id="cliente" name="cliente" maxlength="50" placeholder="Seu nome completo">
                        </div>
                        <div class="form-group">
                            <label for="psw"><i class="	fa fa-map-marker"></i> Endereço/Número</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" id="endereco" name="endereco" maxlength="50" placeholder="Seu endereço/número">
                        </div>
                        <div class="form-group">
                            <label for="psw"><i class="	fa fa-location-arrow"></i> Bairro/Cidade</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" id="bairro_cidade" name="bairro_cidade" maxlength="50" placeholder="Seu bairro/Cidade">
                        </div>
                        <div class="form-group">
                            <label for="psw"><i class="	fa fa-location-arrow"></i> Estado</label><span style="color: red"> *</span><br>
                            <select name="opcuf">
                                <option value="0">Selecione...</option>
                                <option value="1">AC</option>
                                <option value="2">AL</option>
                                <option value="3">AP</option>
                                <option value="4">AM</option>
                                <option value="5">BA</option>
                                <option value="6">CE</option>
                                <option value="7">DF</option>
                                <option value="8">ES</option>
                                <option value="9">GO</option>
                                <option value="10">MA</option>
                                <option value="11">MT</option>
                                <option value="12">MS</option>
                                <option value="13">MG</option>
                                <option value="14">PA</option>
                                <option value="15">PB</option>
                                <option value="16">PR</option>
                                <option value="17">PE</option>
                                <option value="18">PI</option>
                                <option value="19">RJ</option>
                                <option value="20">RN</option>
                                <option value="21">RS</option>
                                <option value="22">RO</option>
                                <option value="23">RR</option>
                                <option value="24">SC</option>
                                <option value="25">SP</option>
                                <option value="26">SE</option>
                                <option value="27">TO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="psw"><i class="fa fa-envelope-o"></i> Email</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" id="email" name="email" maxlength="50" placeholder="Informe seu email">
                        </div>
                        <div class="form-group">
                            <label for="psw"><i class="	fa fa-home"></i> Telefone Fixo</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" id="f_fixo" name="f_fixo" maxlength="15" placeholder="(11) 99999-9999">
                        </div>
                        <div class="form-group">
                            <label for="psw"><i class="fa fa-phone"></i> Telefone celular</label>
                            <input type="text" class="form-control" id="f_celular" name="f_celular" maxlength="15" placeholder="(11) 99999-9999">
                        </div>

                        <div><!--Escolhas no departamento-->

                            <label>Escolha o departamento desejado</label><br>
                            <input type="checkbox" name="produto" id="produto" /> Produtos <br><!--Produtos-->
                            <div id="opt1" class="form-group">
                                <label style="margin-left: 20px;" id="Adubo" > Adubos</label> <br>
                                <input style="margin-left: 40px;" type="checkbox" id="adubos0" name="adubo0"  /> Calcário <br>
                                <input style="margin-left: 40px;" type="checkbox" id="adubos1" name="adubo1"  /> Fort jardins <br>
                                <input style="margin-left: 40px;" type="checkbox" id="adubos2" name="adubo2"  /> Fort frutas <br>
                                <input style="margin-left: 40px;" type="checkbox" id="adubos3" name="adubo3"  /> Fort flantio <br>
                                <input style="margin-left: 40px;" type="checkbox" id="adubos4" name="adubo4"  /> Fort palmeiras <br>
                                <input style="margin-left: 40px;" type="checkbox" id="adubos5" name="adubo5"  /> Torta de mamona <br>
                                <input style="margin-left: 40px;" type="checkbox" id="adubos6" name="adubo6"  /> Ureia <br>
                                <input style="margin-left: 40px;" type="checkbox" id="adubos7" name="adubo7"  /> NPK, 4.14.8  10-10-10 <br>

                                <label style="margin-left: 20px;" id="frutifera" >Árvores Frutíferas </label><br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera0" name="frutifera0"  /> Abacate <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera1" name="frutifera1"  /> Acerola <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera2" name="frutifera2"  /> Amora <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera3" name="frutifera3"  /> Caqui <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera4" name="frutifera4"  /> Carambola <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera5" name="frutifera5"  /> jaboticaba hidrida <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera6" name="frutifera6"  /> Jaboticaba sabará <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera7" name="frutifera7"  /> Laranjas <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera8" name="frutifera8"  /> Limão <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera9" name="frutifera9"  /> Manga <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera10" name="frutifera10"  /> Pitanga <br>
                                <input style="margin-left: 40px;" type="checkbox" id="frutifera11" name="frutifera11"  /> Uva <br>

                                <label style="margin-left: 20px;" id="jardineira" > Jardineiras</label> <br>
                                <input style="margin-left: 40px;" type="checkbox" id="jardineira0" name="jardineira0"  /> Cimento 0,50cm <br>
                                <input style="margin-left: 40px;" type="checkbox" id="jardineira1" name="jardineira1"  /> Cimento 1,00mt <br>
                                <input style="margin-left: 40px;" type="checkbox" id="jardineira2" name="jardineira2"  /> Cimento 1,20mt <br>
                                <input style="margin-left: 40px;" type="checkbox" id="jardineira3" name="jardineira3"  /> Polietileno <br>
                                <input style="margin-left: 40px;" type="checkbox" id="jardineira4" name="jardineira4"  /> Plástico <br>

                                <input class="" style="margin-left: 20px;" type="checkbox" id="item_produto0" name="eucalipto" /> <b>Eucalipto Tratado</b>
                                <label style="margin-left: 20px;" id="lbl_medida">Medida</label>
                                <select id="opt_medida" name="opt_medida">
                                    <option id="o" value="0">Selecione...</option>
                                    <option id="1" value="1" >2,20m</option>
                                    <option id="2" value="2">3,00m</option>
                                    <option id="3" value="3">4,00m</option>
                                    <option id="4" value="4">5,00m</option>
                                    <option id="5" value="5">6,00m</option>
                                    <option id="6" value="6">7,00m</option>
                                    <option id="7" value="7">8,00m</option>
                                </select>
                                <label style="margin-left: 20px;" id="lbl_bitola">Bitola</label>
                                <select id="opt_bitola0" name="opt_bitola0">*
                                    <option value="0">Selecione...</option>
                                    <option value="1">04 à 06</option>
                                    <option value="2">06 à 08</option>
                                    <option value="3">10 à 12</option>
                                </select>
                                <select id="opt_bitola1" name="opt_bitola1">*
                                    <option value="0">Selecione...</option>
                                    <option value="1">04 à 06</option>
                                    <option value="2">06 à 08</option>
                                    <option value="3">08 à 10</option>
                                    <option value="4">10 à 12</option>
                                    <option value="5">12 à 14</option>
                                    <option value="6">14 à 16</option>
                                    <option value="7">16 à 18</option>
                                    <option value="8">18 à 20</option>
                                    <option value="9">20 à 22</option>
                                </select>
                                <select id="opt_bitola2" name="opt_bitola2">*
                                    <option id="23" value="0">Selecione...</option>
                                    <option id="24" value="1">06 à 08</option>
                                    <option id="25" value="2">08 à 10</option>
                                    <option id="26" value="3">10 à 12</option>
                                    <option id="27" value="4">12 à 14</option>
                                    <option id="28" value="5">14 à 16</option>
                                    <option id="29" value="6">16 à 18</option>
                                    <option id="30" value="7">18 à 20</option>
                                    <option id="31" value="8">20 à 22</option>
                                    <option id="32" value="9">22 à 24</option>
                                </select>
                                <select id="opt_bitola3" name="opt_bitola3">*
                                    <option id="33" value="0">Selecione...</option>
                                    <option id="34" value="1">06 à 08</option>
                                    <option id="35" value="2">08 à 10</option>
                                    <option id="36" value="3">10 à 12</option>
                                    <option id="37" value="4">12 à 14</option>
                                    <option id="38" value="5">14 à 16</option>
                                    <option id="39" value="6">16 à 18</option>
                                    <option id="40" value="7">18 à 20</option>
                                    <option id="41" value="8">20 à 22</option>
                                    <option id="42" value="9">22 à 24</option>
                                </select>
                                <select id="opt_bitola4" name="opt_bitola4">*
                                    <option id="43" value="0">Selecione...</option>
                                    <option id="44" value="1">10 à 12</option>
                                    <option id="45" value="2">12 à 14</option>
                                    <option id="46" value="3">14 à 16</option>
                                    <option id="47" value="4">16 à 18</option>
                                    <option id="48" value="5">18 à 20</option>
                                </select>
                                <select id="opt_bitola5" name="opt_bitola5">*
                                    <option id="49" value="0">Selecione...</option>
                                    <option id="50" value="1">08 à 10</option>
                                    <option id="51" value="2">10 à 12</option>
                                    <option id="52" value="3">16 à 18</option>
                                    <option id="53" value="4">18 à 20</option>
                                </select>
                                <select id="opt_bitola6" name="opt_bitola6">*
                                    <option id="54" value="0">Selecione...</option>
                                    <option id="55" value="1">10 à 12</option>
                                    <option id="56" value="2">14 à 16</option>
                                    <option id="57" value="3">18 à 20</option>
                                    <option id="58" value="4">22 à 24</option>
                                </select><br>

                                <label style="margin-left: 20px;"  id="pedra" > Pedras</label> <br>
                                <input style="margin-left: 40px;" type="checkbox" id="pedra0" name="pedra0" /> Branca/Dolomita nº 1,2,3 e 4 <br>
                                <input style="margin-left: 40px;" type="checkbox" id="pedra1" name="pedra1"  /> Marron - Seixo batata <br>
                                <input style="margin-left: 40px;" type="checkbox" id="pedra2" name="pedra2"  /> Marron - Seixo batatinha <br>
                                <input style="margin-left: 40px;" type="checkbox" id="pedra3" name="pedra3"  /> Marron - Seixo feijãozinho <br>
                                <input style="margin-left: 40px;" type="checkbox" id="pedra4" name="pedra4"  /> Marron - Seixo de rio <br>
                                <input style="margin-left: 40px;" type="checkbox" id="pedra5" name="pedra5" /> Pedrisco Bege - nº 1, 2, 3 e 4 <br>
                                <input style="margin-left: 40px;" type="checkbox" id="pedra6" name="pedra6" /> Pedrisco Branco - nº 1, 2, 3 e 4 <br>

                                <label style="margin-left: 20px;"  id="planta" > Plantas Ornamentais</label> <br>
                                <input style="margin-left: 40px;" type="checkbox" id="planta0" name="planta0"  /> Orquídea Bambu <br>
                                <input style="margin-left: 40px;" type="checkbox" id="planta1" name="planta1"  /> Orquídea Vaso <br>

                                <label style="margin-left: 20px;"  id="terra" > Terras</label> <br>
                                <input style="margin-left: 40px;" type="checkbox" id="terra0" name="terra0"  /> Adubada <br>
                                <input style="margin-left: 40px;" type="checkbox" id="terra1" name="terra1"  /> Esterco bovino <br>
                                <input style="margin-left: 40px;" type="checkbox" id="terra2" name="terra2"  /> Orgânica <br>
                                <input style="margin-left: 40px;" type="checkbox" id="terra3" name="terra3"  /> Substrato <br>
                                <input style="margin-left: 40px;" type="checkbox" id="terra4" name="terra04"  /> Vegetal <br>

                                <label style="margin-left: 20px;"  id="vaso"> Vasos</label> <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso0" name="vaso0" /> Bacia <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso1" name="vaso1" /> Quadrado <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso2" name="vaso2" /> Polietileno <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso3" name="vaso3" /> Redondo <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso4" name="vaso4" /> Vaso de cimento - Bacias <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso5" name="vaso5" /> Vaso de cimento - Cone <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso6" name="vaso6" /> Vaso de cimento - Redondo <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso7" name="vaso7" /> Vaso de cerâmica - Cilindro <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso8" name="vaso8" /> Vaso de cerâmica - Cone <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso9" name="vaso9" /> Vaso de cerâmica - Redondo <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso10" name="vaso10" /> Vaso de cerâmica - de parede com furos <br>
                                <input style="margin-left: 40px;" type="checkbox" id="vaso11" name="vaso11" /> Vaso de cerâmica - de parede sem furos <br>

                                <label style="margin-left: 20px; margin-top: 10px;">Assunto</label><br>
                                <textarea id="txtproduto" name="txtproduto" style="margin-left: 20px;" cols="60" rows="7" placeholder="Digite o que deseja aqui..."></textarea>
                            </div>

                            <input type="checkbox" id="servico" name="servico"  /> Serviços <br><!--Serviços-->
                            <div id="opt2" class="form-group">
                                <input style="margin-left: 20px;" type="checkbox" name="serv0" value="ON" /> Adubação <br>
                                <input style="margin-left: 20px;" type="checkbox" name="serv1" value="ON" /> Cerca de Eucalipto Tratado com Tela/Arame <br>
                                <input style="margin-left: 20px;" type="checkbox" name="serv2" value="ON" /> Cerca de Eucalipto Tratado Fechada <br>
                                <input style="margin-left: 20px;" type="checkbox" name="serv3" value="ON" /> Construção com Eucalipto Tratado <br>
                                <input style="margin-left: 20px;" type="checkbox" name="serv4" value="ON" /> Controle de Pragas em Geral <br>
                                <input style="margin-left: 20px;" type="checkbox" name="serv5" value="ON" /> Corte de Árvores <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv6" value="ON" /> Churrasqueira/Cobertura <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv7" value="ON" /> Decorações <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv8" value="ON" /> Detetização de Jardins <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv9" value="ON" /> Iluminação de Jardins <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv10" value="ON" /> Irrigação de Jardins <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv11" value="ON" /> Jardim Verticais <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv12" value="ON" /> Manutenção de Condomínios <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv13" value="ON" /> Manutenção de Jardins <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv14" value="ON" /> Montagem de Deck <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv15" value="ON" /> Montagem de Pergulado <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv16" value="ON" /> Movimentação de Solo <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv17" value="ON" /> Piso Grama <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv18" value="ON" /> Plantio de Árvores Frutíferas <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv19" value="ON" /> Poda de Árvores <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv20" value="ON" /> Projeto/Implantação de Jardins <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv21" value="ON" /> Transplantes de Árvores <br>
                                <input style="margin-left: 20px;" type="checkbox"  name="serv22" value="ON" /> Troca de Solo <br>
                                <label style="margin-left: 20px; margin-top: 10px;">Assunto</label><br>
                                <textarea id="txtservico" name="txtservico" style="margin-left: 20px;" placeholder="Digite o que deseja aqui..." cols="60" rows="7"></textarea>
                            </div>

                            <input type="checkbox" id="movel" name="decoracao" /> Decorações <br><!--Decorações-->
                            <div id="opt3" class="form-group">
                                <label style="margin-left: 20px;"  id="decora" > Móveis rústicos</label> <br>
                                <input style="margin-left: 40px;" type="checkbox" id="decora0" name="decora0"  /> Bancos de madeira <br>
                                <input style="margin-left: 40px;" type="checkbox" id="decora1" name="decora1"  /> Cadeira de balanço <br>
                                <input style="margin-left: 40px;" type="checkbox" id="decora2" name="decora2"  /> Mesas <br>
                                <label style="margin-left: 20px; margin-top: 10px;">Assunto</label><br>
                                <textarea id="txtdecoracao" name="txtdecoracao" style="margin-left: 20px;" placeholder="Digite o que deseja aqui..." cols="60" rows="7"></textarea>
                            </div>

                            <input type="checkbox" id="paisagem" name="paisagem" /> Paisagismo <br><!--Paisagismo-->
                            <div id="opt4" class="form-group">
                                <input style="margin-left: 40px;" type="checkbox" id="paisagem0" name="paisagem0"  /> Projeto: Paisagismo de interiores <br>
                                <textarea id="txtpaisagem" name="txtpaisagem" style="margin-left: 20px;" placeholder="Digite o que deseja aqui..." cols="60" rows="7"></textarea>
                            </div>
                        </div><br>


                        <button type="submit" class="btn-enviar"><!--Botões de ação-->
                            <i class="fa fa-send"></i> Enviar</button>
                        <button type="reset" class="btn-limpar">
                            <i class="fa fa-trash"></i> Limpar</button>
                            
                    </form>
                </div>
            </div>

            <!--Rodapé-->
            <?php
            //requisitando rodapé
            require_once './class/footer.php';
            ?>
        </div>

    </body>
</html>
