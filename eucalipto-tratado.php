<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <?php
        //Requisitando cabeçalho
        require_once './class/head.php';
        ?>
        <title>Mhterras - Eucalipto tratado</title>
    </head>
    <body>
        <div class="container-fluid corpo">
            <?php
            //Requisitando informações do topo da página
            require_once './class/topo.php';
            ?>
            
            <?php 
            //Requisitando menu
            require_once './class/menu_2.php';
            ?>
            
            <?php
            //requisitando Eucalipto tratado
            require_once './class/eucalipto.php';
            ?>
            
            <?php
            //Requisitando rodapé da página
            require_once './class/footer.php';
            ?>
        </div>
    </body>
</html>
