<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <?php
        //Requisitando cabeeçalho
        require_once './class/head.php';
        ?>
        <title>Paisagismo - Mhterras - Produtos</title>
    </head>
    <body>
        
        <!-- Menu-->
        <?php require_once './class/menu.php'; ?>
        
        <?php $tipo = $_GET['acao']; ?>
        
        
        <!-- Serviços -->
        <section id="paisagem">
            <div class="container caixa">
                <h3 class="text-uppercase border-bottom"><?php echo $tipo ?></h3>
                <form action="orcamento.php" method="post">
                    <div class="row mt-3">

                        <?php
                        //Teste para buscar as imagens
                        $tipo = $_GET['acao'];
                        
                        if (isset($tipo) && $tipo != null) {
                            $img = glob("image/produtos/$tipo/*.*");
                            
                            if($img[0] !=null){
                                
                                $img_name = $img;
                                $img_name = str_replace('image/produtos/'.$tipo.'/', '', $img_name);
                                $img_name = str_replace('.jpg', '', $img_name);
                                $img_name = str_replace('.JPG', '', $img_name);
                                $img_name = str_replace('.jpeg', '', $img_name);
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
                                    <h4 class="alert-heading">Serviços</h4>

                                    <p>
                                        Opss! Desculpe, não encontramos nenhum produto relacionado,
                                        mas não desista, você pode entrar em contado em um de nossos canais de atendimento!
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        Visite nossas outras sessões, 
                                        <a href="servicos.php?acao=corte"><i>Serviços</i></a>, 
                                        <a href="decoracao.php?acao=bancos"><i>Decoraçoes</i></a> ou 
                                        <a href="paisagismo.php?acao=landscape"><i>Paisagismo</i></a>.
                                    </p>
                                </div>
                            </div>

                        <?php }} //Fim do teste  ?>

                    </div>
                    <hr>
                    
                    <!-- Ação para habilitar/desabilitar o botão -->
                    <?php if($img[0] !=null) {//Caso exite mais de um item ?>
                    
                    <button type="submit" class="btn btn-success" name="btn-orcar-diversos" id="btn-orcar-paisagismo" title="Envie seu orçamento!">Enviar orçamento</button>
                    <a href="index.php" class="btn btn-danger" title="Cancelar">Cancelar</a>
                    
                    <?php } else { ?>
                    <button type="submit" class="btn btn-success" name="btn-orcar-diversos" id="btn-orcar-paisagismo" title="Desabilitado no momento!" disabled>Enviar orçamento</button>
                    <a href="index.php" class="btn btn-danger" title="Cancelar">Cancelar</a>
                    
                    <?php } ?>

                </form>
                
            </div>
        </section>
        
        <!-- Footer -->
        <?php require_once './class/footer.php'; ?>
        
    </body>
</html>
