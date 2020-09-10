<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description"
              content="Um pequeno resumo de nossos trabalhos de paisagismo...">
        
        <?php
        // Requisição para cabeçalho da página
        require_once './class/head.php';
        ?>
        
        <title>Paisagismo - Mhterras</title>
    </head>
    <body>
        <!-- Menu-->
        <?php require_once './class/menu.php'; ?>
        
        <!-- Modal Eucalipto-->
        <?php require_once './class/eucalipto-modal.php'; ?>
        
        <!-- Paisagismo -->
        <section id="paisagem">
            <div class="container caixa">
                <h3 class="border-bottom">Paisagismo - Projetos realizados</h3>
                <form action="orcamento.php" method="post">
                    <div class="row mt-3">

                        <?php
                        //Teste para buscar as imagens
                        $tipo = $_GET['acao'];
                        if (isset($tipo) && $tipo == 'landscape') {
                            $img = glob("image/paisagismo/*.*");

                            $img_name = $img;
                            $img_name = str_replace('image/paisagismo/', '', $img_name);
                            $img_name = str_replace('.jpg', '', $img_name);
                            $img_name = str_replace('img-', '', $img_name);
                            $img_name = str_replace('-', ' ', $img_name);


                            for ($i = 0; $i < count($img); $i++) {
                                $file = $img[$i];
                                $string_name = $img_name[$i];
                                ?>

                                <div class="col-md-3 mt-3 mb-3">
                                    <div class="border border-success">

                                        <img class="img-fluid rounded p-2" alt="" src="<?php echo $file; ?>" />

                                        <div class="m-2 text-center">
                                            <p class="pt-1 pb-1 description"><?php echo $string_name; ?></p>
                                        </div>

                                        <div class="m-2 pl-4">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" name="elementos[]" id="" value="<?php echo $string_name; ?>"> <span class="ml-2">Orçar</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <?php }
                            } else { //Resulatado, caso falso  ?>

                            <div class="container m-5">
                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading">Paisagismo</h4>

                                    <p>
                                        Opss! Desculpe, não encotramos nenhuma serviço relacionado,
                                        mas não desista, você pode entrar em contado em um de nossos canais de atendimento!
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        Visite nossas outras sessões, 
                                        <a href="decoracao.php?acao=bancos"><i>Decorações</i></a>, 
                                        <a href="produtos.php?acao=adubo"><i>Produtos</i></a> ou 
                                        <a href=""><i>Serviços</i></a>.
                                    </p>
                                </div>
                            </div>

                        <?php } //Fim do teste  ?>

                    </div>
                    <hr>
                    
                    <!-- Ação para habilitar/desabilitar o botão -->
                    <?php if($tipo == 'landscape'){//Listando todos os itens ?>
                    
                    <button type="submit" class="btn btn-success" name="btn-orcar-diversos" id="btn-orcar-diversos" title="Envie seu orçamento">Enviar orçamento</button>
                    <a href="index.php" class="btn btn-danger" title="Cancelar">Cancelar</a>
                    
                    <?php } else { ?>

                    <button type="submit" class="btn btn-success" name="btn-orcar-diversos" id="btn-orcar-diversos" title="Desabilitado no momento!" disabled>Enviar orçamento</button>
                    <a href="index.php" class="btn btn-danger" title="Cancelar">Cancelar</a>
                    
                    <?php } ?>
                    
                </form>
                
            </div>
        </section>

        
        <!-- Footer -->
        <?php require_once './class/footer.php'; ?>
        
    </body>
</html>
