<!DOCTYPE html>


<html>
    <head>
        <meta name="description"
              content="Eucalipto tratado - O tratamento da madeira deve ser realizado para prevenir sua deterioração, 
              ampliando assim seu tempo de vida útil. O tratamento comumente utilizado é o químico,
              no qual ocorre a fixação de elementos preservativos na madeira">

        <?php
        // Requisição do cabeçalho da página
        require_once './class/head.php';
        ?>

        <title>Paisagismo - Mhterras-v2</title>
    </head>
    <body>

        <!-- Menu-->
        <?php require_once './class/menu.php'; ?>
        
        <!-- Modal Eucalipto-->
        <?php require_once './class/eucalipto-modal.php'; ?>

        <!-- Slider-->
        <section id="home" class="d-flex"><!-- Inicio Home -->
            <div class="container align-self-center">
                <div class="row">
                    <div class="col-md-12 capa">

                        <!-- Carousel -->
                        <div id="carousel-mhterras" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner"><!-- Inner -->

                                <div class="carousel-item active">

                                    <div class=""><!-- Label -->
                                        <h1 class="display-1">Condomínios e Empresas</h1>
                                        <p>
                                            Contatos de manutenção - Deixe tudo em nossas mãos!
                                        </p>

                                    </div><!-- /Label -->
                                    <a href="servicos.php?acao=contrato" class="btn btn-lg btn-custom btn-verde mt-4">Saiba mais</a>

                                </div>
                                <div class="carousel-item">

                                    <div class=""><!-- Label -->
                                        <h1 class="display-1">Eucalipto tratado</h1>
                                        <p>
                                            Os Melhores Eucaliptos tratados e certificados!
                                        </p>

                                    </div><!-- /Label -->
                                    <a href="produtos.php?acao=eucalipto" class="btn btn-lg btn-custom btn-verde mt-4">Saiba mais</a>

                                </div>

                                <div class="carousel-item">

                                    <div class=""><!-- Label -->
                                        <h1 class="display-1">Pergulados</h1>
                                        <p>
                                            Projetos, implantações e manutenções!
                                        </p>  
                                    </div><!-- /Label -->
                                    <a href="servicos.php?acao=montagem" class="btn btn-lg btn-custom btn-verde mt-4">Saiba mais</a>

                                </div>

                                <div class="carousel-item">

                                    <div class=""><!-- Label -->
                                        <h1 class="display-1">Terra adubada</h1>
                                        <p>
                                            Sua planta necessita de força para crescer!
                                        </p>
                                    </div><!-- /Label -->
                                    <a href="produtos.php?acao=adubo" class="btn btn-lg btn-custom btn-verde mt-4">Saiba mais</a>

                                </div>

                            </div><!-- /Inner -->

                            <!-- Controles -->
                            <a href="#carousel-mhterras" class="carousel-control-prev fa-3x" data-slide="prev">
                                <i class="fas fa-angle-left"></i>
                            </a>

                            <a href="#carousel-mhterras" class="carousel-control-next fa-3x" data-slide="next">
                                <i class="fas fa-angle-right"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Fim Home -->
        
        <!-- Produtos -->
        <section id="produtos" class="caixa"><!-- Inicio Produtos -->
            <div class="container">
                <!-- Produtos -->
                <div class="row mt-3 mb-3 border-bottom pb-4 pt-4">
                    
                    <div class="col-md-4">
                        <img src="image/produtos/ornamental/img-plantas-ornamentais00.jpg" class="img-fluid"/>
                    </div>

                    <div class="col-md-8">
                        <h2>Plantas Ornamentais</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy
                        </p>
                        <a href="produtos.php?acao=ornamental" class="btn btn-custom">Quero conhecer</a>
                        <a href="" class="btn btn-orçar ml-2">Quero orçamento</a>
                    </div>
                </div>

                <!-- Serviços -->
                <div class="row  mt-3 mb-3 border-bottom pb-4 pt-4">
                    <div class="col-md-8 text-right">
                        <h2>Mesas</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy
                        </p>
                        <a href="" class="btn btn-orçar mr-2">Quero orçamento</a>
                        <a href="decoracao.php?acao=mesas" class="btn btn-custom">Quero conhecer</a>
                    </div>

                    <div class="col-md-4">
                        <img src="image/decoracao/mesas/img-mesa-de-refeitorio.jpg" class="img-fluid"/>
                    </div>

                </div>

                <!-- Paisagismo -->
                <div class="row mt-3 mb-3 border-bottom pb-4 pt-4">

                    <div class="col-md-4">
                        <img src="image/paisagismo/img-paisagismo-riacho.jpg" class="img-fluid"/>
                    </div>

                    <div class="col-md-8">
                        <h2>Paisagismo</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy
                        </p>
                        <a href="paisagismo.php?acao=landscape" class="btn btn-custom">Quero conhecer</a>
                        <a href="" class="btn btn-orçar ml-2">Quero orçamento</a>
                    </div>

                </div>

            </div>

        </section><!-- Fim Produtos -->
        
        <!-- Localização -->
        <section id="localizacao" class="localiza"><!-- Inicio localização -->
            <div class="container pt-4 pb-4">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="pb-1 mb-3 text-center">Nossa localização</h2>
                        <iframe class="container"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7320.689557993742!2d-46.909789372715736!3d-23.44802481386709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf1b55081adfab%3A0x7e5b1124a187ff52!2sEstr.+Lula+Chaves%2C+20+-+Tanquinho%2C+Santana+de+Parna%C3%ADba+-+SP!5e0!3m2!1spt-BR!2sbr!4v1509832358633"
                            frameborder="0" 
                            style="border:0"
                            allowfullscreen>
                            
                        </iframe>
                    </div>
                </div>
            </div>
        </section><!-- Fim localização -->
        
        <!-- Footer -->
        <?php require_once './class/footer.php'; ?>

    </body>
</html>
