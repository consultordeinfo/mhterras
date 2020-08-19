<?php
//Recuperando variáveis
$title = $_POST['titulo'];


?>

<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Modal -->
        <div class="modal fade" id="modalImages" tabindex="-1" role="dialog" aria-labelledby="ModalLabelTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabelTitle">Flora Mhterras</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="titulo" id="titulo" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
