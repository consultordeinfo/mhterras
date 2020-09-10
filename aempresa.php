<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description"
              content="Fundada em 2007, a MHTERRAS atua nas mais diversas áreas de jardinagem, 
                    paisagismo e venda de produtos...">
        <?php
        // Requisição para cabeçalho
        require_once './class/head.php';
        ?>
        <title>A nossa empresa - Mhterras</title>
    </head>
    <body>
        <!-- Menus-->
        <?php require_once './class/menu.php'; ?>
        
        <!-- Modal Eucalipto-->
        <?php require_once './class/eucalipto-modal.php'; ?>
        
        <!-- Sobre a Mhterras-->
        <section id="sobre-mhterras">
            <div class="container caixa">
                <h2 class="border-bottom">Nossa história</h2>
                <div class="row mt-3">
                    
                    <div class="col-md-4 mt-3">
                        <img src="image/img-loja.jpg" class="img-fluid"/>
                    </div>
                    
                    <div class="col-md-8 mt-3">
                        <h3>A Flora M.H. Terras</h3>
                        <p>
                            <b>Fundada em 2007</b>, a Flora M.H. Terras atua nas mais diversas áreas de jardinagem, 
                            paisagismo e venda de produtos, tem como seu principal objetivo a qualidade 
                            e a satisfação de seus clientes.
                        </p>
                        
                        <h3>Missão</h3>
                        <p>
                            Atuar nos mais diversos seguimentos de Terras, Eucaliptos tratados, dormentes, 
                            plantas, pedras ornamentais, Paisagismo e Serviços.
                        </p>
                        
                        <h3>Visão</h3>
                        <p>
                            Ser uma empresa líder em paisagismo e seus derivados, reconhecidamente sólido
                            e confiável, destacando-se pelo uso agressivo de marketing, serviço avançado 
                            e por equipes capacitadas, comprometidas com a qualidade total e a satisfação
                            dos clientes.
                        </p>
                        
                        <h3>Valores</h3>
                        <p>
                            Compromisso, ética, dedicação, confiabilidade e inovação.
                        </p>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php require_once './class/footer.php'; ?>
        
    </body>
</html>
