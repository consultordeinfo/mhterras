<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

       
        <title>Contato</title>
    </head>
    <body>
        <div class="container">

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>

                            <p style="font-size: 22px;">Olá, Gostariamos de ajudar você!</p> 
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form name="frmContato" action="./class/send_contato.php" method="post" role="form" onsubmit="return validarForm()">
                                <div class="form-group">
                                    <label for="usrname"><i class="fa fa-user"></i> Nome completo</label><span style="color: red"> *</span>
                                    <input type="text" class="form-control" id="Contatonome" name="nome" maxlength="50" placeholder="Informe seu nome completo">
                                </div>
                                <div class="form-group">
                                    <label for="psw"><i class="fa fa-phone"></i> Telefone</label><span style="color: red"> *</span>
                                    <input type="text" class="form-control" id="Contatofone" name="fone" maxlength="15">
                                </div>
                                <div class="form-group">
                                    <label for="psw"><i class="fa fa-envelope-o"></i> Email</label><span style="color: red"> *</span>
                                    <input type="text" class="form-control" id="Contatoemail" name="email" maxlength="50" placeholder="Informe seu email">
                                </div>
                                <div class="form-group">
                                    <label for="psw"><i class="fa fa-check"></i> Assunto</label><span style="color: red"> *</span>
                                    <select class="form-control" id="escolher" name="escolher">
                                            <option value="0">Selecione o assunto</option>
                                            <option value="1">Eucalipto Tratado</option>
                                            <option value="2">Pergulado</option>
                                            <option value="3">Terra Adubada</option>
                                            <option value="4">Móveis Rústicos</option>
                                            <option value="5">Paisagismo</option>
                                            <option value="6">Serviços</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="descricao"><i class="fa fa-pencil"></i> Descreva o que deseja!</label>
                                    <textarea class="form-control" name="texto" maxlength="180" placeholder="Descrição do assunto"></textarea>
                                </div>

                                <button type="submit" class="btn-enviar">
                                    <i class="fa fa-send"></i> Enviar</button>
                                <button type="reset" class="btn-limpar">
                                    <i class="fa fa-trash"></i> Limpar</button>
                                    
                            </form>
                            
                        </div>
                        <div class="modal-footer">
                            <p>Mhterras e Pedras</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim da janela modal-->
        <!--VAlidação javascript-->
        <script type="text/javascript">
        function validarForm() {
    // Verificando o campo nome
    if (document.frmContato.nome.value == "") {
        alert("CAMPO OBRIGATÓRIO!\nPor favor, preencha o nome completo!");
        document.frmContato.nome.focus();
        return false;

    }// Verificando o campo telefone
    else if (document.frmContato.fone.value == "") {
        alert("CAMPO OBRIGATÓRIO!\nPor favor, preencha o telefone!");
        document.frmContato.fone.focus();
        return false;

    }// verificando os caracteres do email
    else if (document.frmContato.email.value == "" || document.frmContato.email.value.indexOf('@') == -1 || document.frmContato.email.value.indexOf('.') == -1) {
        alert("CAMPO OBRIGATÓRIO!\nPor favor, digite um email válido!");
        document.frmContato.email.focus();
        return false;
        
    }// verificando assunto
    else if (document.frmContato.escolher.value == 0) {
        alert("CAMPO OBRIGATÓRIO!\nPor favor, selecione um assunto!");
        document.frmContato.escolher.focus();
        return false;

    } else {
        
    }
}
        </script>
    </body>
</html>
