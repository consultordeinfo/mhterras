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

        <!-- requisitando topo -->
        <?php  require_once './class/menu.php'; ?>
        
        <!-- Modal Eucalipto-->
        <?php require_once './class/eucalipto-modal.php'; ?>

        <!-- Orçamento -->
        <section id="orcamento">
            <div class="container caixa">
                <h3 class="border-bottom mb-4">Orçamentos</h3>
                    
                    <?php
                        //Recebendo os dados via post
                        if(isset($_POST['btn-orcar-diversos'])){
                            $itens = $_POST['elementos']; ?>
                    
                    <!-- Formulário com itens selecionados-->
                    <form name="frmOcamentoPorDepartamento" action="class/send-orcamento-depart.php" method="post" >
                        <div class="form-group">
                            <label for="FormControlInputName">Nome</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" name="cliente" maxlength="50" id="FormControlInputName" placeholder="Seu nome completo" required="">
                        </div>
                    
                        <div class="form-group">
                            <label for="FormControlInputEndereco">Endereço/Número</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" name="endereco" maxlength="50" id="FormControlInputEndereco" placeholder="Seu endereço/número" required="">
                        </div>
                    
                        <div class="form-group">
                            <label for="FormControlInputBairro">Bairro/Cidade</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" name="bairro_cidade" maxlength="50" id="FormControlInputBairro" placeholder="Seu bairro/cidade" required="">
                        </div>
                    
                        <div class="form-group">
                            <label for="FormControlInputCep">Cep</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" name="cep" maxlength="10" id="FormControlInputCep" placeholder="00000-000">
                        </div>
                    
                        <div class="form-group">
                            <label for="FormControlSelectUF">Estado </label><span style="color: red"> *</span>
                            <select class="btn btn-light" name="opcuf" id="FormControlSelectUF">
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
                            <label for="FormControlInputEmail">E-mail</label><span style="color: red"> *</span>
                            <input type="email" class="form-control" name="email" maxlength="50" id="FormControlInputEmail" placeholder="Informe seu E-mail" required="">
                        </div>
                        
                        <div class="form-group">
                            <label for="FormControlInputFoneFixo">Telefone Comercial</label>
                            <input type="tel" class="form-control" name="f_fixo" maxlength="15" id="FormControlInputFoneFixo" placeholder="(11) 9999-9999">
                        </div>
                    
                        <div class="form-group">
                            <label for="FormControlInputFoneCelular">Telefone Celular</label>
                            <input type="tel" class="form-control"  name="f_celular" maxlength="15" id="FormControlInputFoneCelular" placeholder="(11) 99999-9999" required="">
                        </div>
                        
                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <textarea class="form-control text-left" rows="4" id="assunto" name="assunto" placeholder="Digite o que deseja aqui...">
                                
                                <?php
                                    //Percorrendo o array de elementos
                                    if ($itens != null) {
                                        echo "Ola, o que seria necessario para realizar um orcamentos dos seguintes itens: ";
                                        foreach ($itens as $valor) {
                                            echo $valor . " | ";
                                        }
                                        
                                    }else{
                                        echo "Nenhum item foi selecionado para orçamento!";
                                    }
                                ?>

                            </textarea>
                        </div>
                            
                        <!--Botões de ação-->
                        <button type="submit" class="btn btn-success" name="btn-diversos" id="btn-diversos" title="Envie seu orçamento">Enviar orçamento</button>
                        <a href="index.php" class="btn btn-danger" title="Cancelar">Cancelar</a>
                        
                    </form>
                        
                    <?php } else { 
                        // Formulário sem a seleção de elemntos ?>
                        
                    <form name="frmOrcamentoNormal" action="class/send_orcamento.php" method="post" data-toggle="validator" role="form">
                                <div class="row">
                                    <!-- Coluna formulário-->

                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="FormControlInputName">Nome</label><span style="color: red"> *</span>
                                                <input type="text" class="form-control" name="cliente" maxlength="50" id="FormControlInputName" placeholder="Seu nome completo" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="FormControlInputEndereco">Endereço/Número</label><span style="color: red"> *</span>
                                                <input type="text" class="form-control" name="endereco" maxlength="50" id="FormControlInputEndereco" placeholder="Seu endereço/número" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="FormControlInputBairro">Bairro/Cidade</label><span style="color: red"> *</span>
                                                <input type="text" class="form-control" name="bairro_cidade" maxlength="50" id="FormControlInputBairro" placeholder="Seu bairro/cidade" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="FormControlInputCep">Cep</label><span style="color: red"></span>
                                                <input type="text" class="form-control" name="cep" maxlength="10" id="FormControlInputCep" placeholder="00000-000">
                                            </div>

                                            <div class="form-group">
                                                <label for="FormControlSelectUF">Estado </label><span style="color: red"> *</span>
                                                <select class="btn btn-light" name="opcuf" id="FormControlSelectUF" required>
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
                                                <label for="FormControlInputEmail">E-mail</label><span style="color: red"> *</span>
                                                <input type="email" class="form-control" name="email" maxlength="50" id="FormControlInputEmail" placeholder="Informe seu E-mail">
                                            </div>

                                            <div class="form-group">
                                                <label for="FormControlInputFoneFixo">Telefone Comercial</label>
                                                <input type="tel" class="form-control" name="f_fixo" maxlength="15" id="FormControlInputFoneFixo" placeholder="(11) 9999-9999">
                                            </div>

                                            <div class="form-group">
                                                <label for="FormControlInputFoneCelular">Telefone Celular</label><span style="color: red"> *</span>
                                                <input type="tel" class="form-control"  name="f_celular" maxlength="15" id="FormControlInputFoneCelular" placeholder="(11) 99999-9999" required>
                                            </div>
                                        </div>

                                    <div class="col-md-12">
                                        
                                        <!-- Decorações -->
                                        <div class="accordion mb-2" id="accordionItensDecoration">
                                            <div class="card">
                                                    <div class="card-header" id="headingDecoration">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseDecoration" aria-expanded="false" aria-controls="collapseDecoration">
                                                                 Decorações
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapseDecoration" class="collapse" aria-labelledby="headingDecoration" data-parent="#accordionItensDecoration">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                
                                                                <div class="col-md-12">
                                                                    
                                                                    <label id="decora" > Móveis rústicos</label> <br>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" class="decora" name="decora0" id="decora0" value="1" checked/>
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Bancos de madeira</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" class="decora" name="decora1" id="decora1" value="2" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Cadeira de balanço</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"class="decora" name="decora2" id="decora2" value="3" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Mesas</span>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="assunto">Assunto</label>
                                                                        <textarea class="form-control" rows="4" id="assuntodecoracao" name="assunto" placeholder="Digite o que deseja aqui..."></textarea>
                                                                    </div>
                                                                    
                                                                    <button type="submit" class="btn btn-success" name="btndecoracao" id="btndecoracao" title="Envie seu orçamento">Enviar orçamento</button>
                                                                    </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        <!-- Eucalipto tratado -->
                                        <div class="accordion mb-2" id="accordionItensEucalipto">
                                            <div class="card">
                                                    <div class="card-header" id="headingEucalipto">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEucalipto" aria-expanded="false" aria-controls="collapseEucalipto">
                                                                 Eucalipto tratado
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapseEucalipto" class="collapse" aria-labelledby="headingEucalipto" data-parent="#accordionItensEucalipto">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    
                                                                    <!-- 2.20 metros-->
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-text">
                                                                            <input type="radio" id="medidas" name="medidas" value="medida1" checked>
                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text" for="inputGroupMedida1">De 2,20 metros</label>
                                                                        </div>
                                                                        <select class="custom-select" name="inputGroupMedida1" id="inputGroupMedida1">
                                                                            <option selected>Bitola</option>
                                                                            
                                                                            <?php for($i = 4; $i <= 12; $i++){ ?>
                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                            <?php } ?>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <!-- 3,00 metros-->
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-text">
                                                                            <input type="radio" id="medidas" name="medidas" value="medida2">
                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text" for="inputGroupMedida2">De 3,00 metros</label>
                                                                        </div>
                                                                        <select class="custom-select" name="inputGroupMedida2" id="inputGroupMedida2">
                                                                            <option selected>Bitola</option>
                                                                            
                                                                            <?php for($i = 4; $i <= 22; $i++){ ?>
                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                            <?php } ?>                                                                            
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <!-- 4,00 metros-->
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-text">
                                                                            <input type="radio" id="medidas" name="medidas" value="medida3">
                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text" for="inputGroupMedida3">De 4,00 metros</label>
                                                                        </div>
                                                                        <select class="custom-select" name="inputGroupMedida3" id="inputGroupMedida3">
                                                                            <option selected>Bitola</option>
                                                                            
                                                                            <?php for($i = 6; $i <= 24; $i++){ ?>
                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                            <?php } ?> 
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <!-- 5,00 metros-->
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-text">
                                                                            <input type="radio" id="medidas" name="medidas" value="medida4">
                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text" for="inputGroupMedida4">De 5,00 metros</label>
                                                                        </div>
                                                                        <select class="custom-select" name="inputGroupMedida4" id="inputGroupMedida4">
                                                                            <option selected>Bitola</option>
                                                                            
                                                                            <?php for($i = 8; $i <= 24; $i++){ ?>
                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                            <?php } ?> 
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <!-- 6,00 metros-->
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-text">
                                                                            <input type="radio" id="medidas" name="medidas" value="medida5">
                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text" for="inputGroupMedida5">De 6,00 metros</label>
                                                                        </div>
                                                                        <select class="custom-select" name="inputGroupMedida5" id="inputGroupMedida5">
                                                                            <option selected>Bitola</option>
                                                                            
                                                                            <?php for($i = 10; $i <= 20; $i++){ ?>
                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                            <?php } ?> 
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <!-- 7,00 metros-->
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-text">
                                                                            <input type="radio" id="medidas" name="medidas" value="medida6">
                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text" for="inputGroupMedida6">De 7,00 metros</label>
                                                                        </div>
                                                                        <select class="custom-select" name="inputGroupMedida6" id="inputGroupMedida6">
                                                                            <option selected>Bitola</option>
                                                                            
                                                                            <?php for($i = 8; $i <= 20; $i++){ ?>
                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                            <?php } ?> 
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <!-- 8,00 metros-->
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-text">
                                                                            <input type="radio" id="medidas" name="medidas" value="medida7">
                                                                        </div>
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text" for="inputGroupMedida7">De 8,00 metros</label>
                                                                        </div>
                                                                        <select class="custom-select" name="inputGroupMedida7" id="inputGroupMedida6">
                                                                            <option selected>Bitola</option>
                                                                            
                                                                            <?php for($i = 10; $i <= 24; $i++){ ?>
                                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                            <?php } ?>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <button type="submit" class="btn btn-success" name="btneucalipto" id="btneucalipto" title="Envie seu orçamento">Enviar orçamento</button>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        <!-- Paisagismo -->
                                        <div class="accordion mb-2" id="accordionItensLandscaping">
                                            <div class="card">
                                                    <div class="card-header" id="headingLandscaping">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLandscaping" aria-expanded="false" aria-controls="collapseLandscaping">
                                                                 Paisagismo
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapseLandscaping" class="collapse" aria-labelledby="headingLandscaping" data-parent="#accordionItensLandscaping">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                
                                                                <div class="col-md-12">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" id="projeto" name="projeto"  checked/>
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Projetos</span>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="assunto">Assunto</label>
                                                                        <textarea class="form-control" rows="4" id="assunto" name="assuntoprojeto" placeholder="Descreva o projeto desejado..."></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-success" name="btnprojeto" id="btnprojeto" title="Envie seu projeto">Enviar orçamento</button>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        <!-- Produtos -->
                                        <div class="accordion mb-2" id="accordionItensProducts">
                                            <div class="card">
                                                    <div class="card-header" id="headingProduct">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
                                                                 Produtos
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapseProduct" class="collapse" aria-labelledby="headingProduct" data-parent="#accordionItensProducts">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                
                                                                <div class="col-md-4"><!-- Adubos -->
                                                                    <label id="Adubo" > Adubos</label>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" id="adubos0" name="adubo0"  checked/>
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Calcário</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" id="adubos1" name="adubo1"  /> 
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Fort jardins</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" id="adubos2" name="adubo2"  />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Fort frutas</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" id="adubos3" name="adubo3"  /> 
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Fort flantio</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" id="adubos4" name="adubo4"  /> 
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Fort palmeiras</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" id="adubos5" name="adubo5"  /> 
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Torta de mamona</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" id="adubos6" name="adubo6"  />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Ureia</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" id="adubos7" name="adubo7"  /> 
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">NPK, 4.14.8  10-10-10</span>
                                                                    </div>  
                                                                    
                                                                </div>
                                                                
                                                                <div class="col-md-4"><!-- Árvores Frutíferas -->
                                                                        <label id="frutifera" >Árvores Frutíferas </label><br>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera0" name="frutifera0"  /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Abacate</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera1" name="frutifera1"  /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Acerola</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera2" name="frutifera2"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Amora</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera3" name="frutifera3"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Caqui</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera4" name="frutifera4"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Carambola</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera5" name="frutifera5"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">jaboticaba hidrida</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera6" name="frutifera6"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Jaboticaba sabará</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera8" name="frutifera8"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Limão</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera9" name="frutifera9"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Manga</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera10" name="frutifera10"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Pitanga</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="frutifera11" name="frutifera11"  /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Uva</span>
                                                                        </div> 
                                                                </div>
                                                                
                                                                <div class="col-md-4"><!-- Jardineiras -->
                                                                        <label id="jardineira" > Jardineiras</label> <br>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="jardineira0" name="jardineira0"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Cimento 0,50cm</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="jardineira1" name="jardineira1"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Cimento 1,00mt</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="jardineira2" name="jardineira2"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Cimento 1,20mt</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="jardineira3" name="jardineira3"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Polietileno</span>
                                                                        </div> 
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="jardineira4" name="jardineira4"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Plástico</span>
                                                                        </div> 
                                                                        
                                                                </div>
                                                                
                                                                <div class="col-md-4"><!-- Pedras -->
                                                                        <label  id="pedra" > Pedras</label> <br>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="pedra0" name="pedra0" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Branca/Dolomita nº 1,2,3 e 4</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="pedra1" name="pedra1"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Marron - Seixo batata</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="pedra2" name="pedra2"  /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Marron - Seixo batatinha</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="pedra3" name="pedra3"  /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Marron - Seixo feijãozinho</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="pedra4" name="pedra4"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Marron - Seixo de rio</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="pedra5" name="pedra5" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Pedrisco Bege - nº 1, 2, 3 e 4</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="pedra6" name="pedra6" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Pedrisco Branco - nº 1, 2, 3 e 4</span>
                                                                        </div>
                                                                </div>
                                                                
                                                                <div class="col-md-4"><!-- Plantas Ornamentais -->
                                                                        <label  id="planta" > Plantas Ornamentais</label> <br>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="planta0" name="planta0"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Orquídea Bambu</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="planta1" name="planta1"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Orquídea Vaso</span>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-4"><!-- Terras -->
                                                                        <label  id="terra" > Terras</label> <br>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="terra0" name="terra0"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Adubada</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="terra1" name="terra1"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Esterco bovino</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="terra2" name="terra2"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Orgânica</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="terra3" name="terra3"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Substrato</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="terra4" name="terra04"  />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Vegetal</span>
                                                                        </div>
                                                                </div>
                                                                
                                                                <div class="col-md-4"><!-- Vasos -->
                                                                        <label  id="vaso"> Vasos</label> <br>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso0" name="vaso0" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Bacia</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso1" name="vaso1" /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Quadrado</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso1" name="vaso1" /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Quadrado</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso2" name="vaso2" /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Polietileno</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso3" name="vaso3" /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Redondo</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso4" name="vaso4" /> 
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Vaso de cimento - Bacias</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso5" name="vaso5" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Vaso de cimento - Cone</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso6" name="vaso6" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Vaso de cimento - Redondo</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso7" name="vaso7" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Vaso de cerâmica - Cilindro</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso8" name="vaso8" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Vaso de cerâmica - Cone</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso9" name="vaso9" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Vaso de cerâmica - Redondo</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso10" name="vaso10" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Vaso de cerâmica - parede com furos</span>
                                                                        </div>
                                                                        
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">
                                                                                    <input type="checkbox" id="vaso11" name="vaso11" />
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text">Vaso de cerâmica - parede sem furos</span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                
                                                                
                                                            </div>
                                                            <button type="submit" name="btnproduto" id="btnproduto" class="btn btn-success" value="on" title="Envie seu orçamento">Enviar orçamento</button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        <!-- Serviços -->
                                        <div class="accordion mb-3" id="accordionItensServices">
                                            <div class="card">
                                                    <div class="card-header" id="headingServices">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseServices" aria-expanded="false" aria-controls="collapseServices">
                                                                 Serviços
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapseServices" class="collapse" aria-labelledby="headingServices" data-parent="#accordionItensServices">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                
                                                                <div class="col-md-12">
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" name="serv0" value="ON" checked/>
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Adubação</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" name="serv1" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Cerca de Eucalipto Tratado com Tela/Arame</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" name="serv2" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Cerca de Eucalipto Tratado Fechada</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" name="serv3" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Construção com Eucalipto Tratado</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" name="serv4" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Controle de Pragas em Geral</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox" name="serv5" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Corte de Árvores</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv6" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Churrasqueira/Cobertura</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv7" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Decorações</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv8" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Detetização de Jardins</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv9" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Iluminação de Jardins</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv10" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Irrigação de Jardins</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv11" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Jardim Verticais</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv12" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Manutenção de Condomínios</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv13" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Manutenção de Jardins</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv14" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Montagem de Deck</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv15" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Montagem de Pergulado</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv16" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Movimentação de Solo</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv17" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Piso Grama</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv18" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Plantio de Árvores Frutíferas</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv19" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Poda de Árvores</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv20" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Projeto/Implantação de Jardins</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv21" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Transplantes de Árvores</span>
                                                                    </div>
                                                                    
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <input type="checkbox"  name="serv22" value="ON" />
                                                                            </div>
                                                                        </div>
                                                                        <span class="input-group-text">Troca de Solo</span>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="assunto">Assunto</label>
                                                                        <textarea class="form-control" id="assunto" name="assunto" rows="4"  placeholder="Digite o que deseja aqui..."></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-success" name="btnservicos" id="btnservicos" title="Envie seu orçamento">Enviar orçamento</button>
                                                                    </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                    </div>

                                </div>
                            
                                <!--Botões de ação-->
                                <a href="index.php" class="btn btn-danger">Cancelar orçamento</a>
                            </form>
                        
                    <?php } ?>    
                    
            </div>
        </section>

        <!--Rodapé-->
        <?php
        //requisitando rodapé
        require_once './class/footer.php';
        ?>

    </body>
</html>
