<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <?php
        //Requisitando cabeçalho
        require_once './class/head.php';
        ?>
        <title></title>
    </head>
    <body>
        <!-- Menu-->
        <?php require_once './class/menu.php'; ?>
        
        <!-- Modal Eucalipto-->
        <?php require_once './class/eucalipto-modal.php'; ?>

        <!-- Contato-->
        <section id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="border-bottom mb-5 mt-3">Olá, gostariamos de ajudar você!</h3>
                        
                        <!-- Reposta, caso de erro na validação re-captcha-->
                        <?php if(isset($_GET['acao']) && $_GET['acao'] == 'error'){ ?>
                        
                        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                            <strong>Opss!</strong> Por favor, marque "Não sou robô!"
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <?php } elseif(isset($_GET['acao']) && $_GET['acao'] == 'selectError'){ ?>
                        
                        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                            <strong>Opss!</strong> descupe, você esqueceu de selecionar um assunto!"
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <?php } ?>
                        
                        <form name="" action="class/send_contato.php" method="post" class="form-row" data-toggle="validator" role="form">
                            <div class="col-md-4 mb-4">
                                <label for="InputName">Nome</label><span style="color: red"> *</span>
                                <input type="text" class="form-control" name="nome" id="InputName" maxlength="50" placeholder="Informe seu nome completo" required >
                            </div>

                            <div class="col-md-4 mb-4">
                                <label for="InputFone">Telefone</label><span style="color: red"> *</span>
                                <input type="text" class="form-control" name="fone" id="InputFone" maxlength="16" placeholder="(11) 9 9999-9999" required >
                            </div>

                            <div class="col-md-4 mb-4">
                                <label for="InputEmail">Email</label><span style="color: red"> *</span>
                                <input type="email" class="form-control" name="email" id="InputEmail" maxlength="50" placeholder="Informe seu email" required >
                            </div>

                            <div class="col-md-4 mb-4">
                                <label for="InputSelect"> Assunto</label><span style="color: red"> *</span>
                                <select class="form-control" id="escolher" name="escolher" required="">
                                    <option value="0">Selecione o assunto</option>
                                    <option value="1">Eucalipto Tratado</option>
                                    <option value="2">Pergulado</option>
                                    <option value="3">Terra Adubada</option>
                                    <option value="4">Móveis Rústicos</option>
                                    <option value="5">Paisagismo</option>
                                    <option value="6">Serviços</option>
                                    <option value="7">Contratos</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="InputAssunto"> Descreva o que deseja!</label><span style="color: red"> *</span>
                                <textarea class="form-control" name="texto" rows="5" maxlength="180" placeholder="Descrição do assunto" required=""></textarea>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="g-recaptcha"  data-sitekey="6LdmvrQZAAAAALwjx4ZwRR2To3MEErAAbrfK0jhq"></div>
                            </div>
                            
                            <div class="col-md-12 mb-4">
                                <!--Botões de ação-->
                                <button type="submit" class="btn btn-success" name="enviar" id="enviar" title="Enviar contato">Enviar</button>
                                <a href="index.php" class="btn btn-danger" title="Cancelar">Cancelar</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php require_once './class/footer.php'; ?>
    </body>
</html>
