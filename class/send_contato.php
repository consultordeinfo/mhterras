<?php

if (isset($_POST['escolher']) && $_POST['escolher'] == 0) {

    header('Location: ../contato.php?acao=selectError'); //Erro ao não selecionar assunto
} else {

    // Recebendo os dados do formulário
    $nome = $_POST['nome'];
    $telefone = $_POST['fone'];
    $email = $_POST['email'];
    $opcao = $_POST['escolher'];
    $texto = $_POST['texto'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

//Verificando qual opção escolhida
    switch ($opcao) {
        case 1:
            $escolha = "Eucalipto Tratado";
            break;
        case 2:
            $escolha = "Pergulado";
            break;
        case 3:
            $escolha = "Terra Adubada";
            break;
        case 4:
            $escolha = "Móveis Rústicos";
            break;
        case 5:
            $escolha = "Paisagismo";
            break;
        case 6:
            $escolha = "Serviços";
            break;
        case 7:
            $escolha = "Contratos";
            break;
        default :
            break;
    }

#parâmetros em um array para comprovar a segurança
    $vetParametros = array(
        "secret" => "6LdmvrQZAAAAAPlZboTRcvFdVkfMjaCGszV-Hg59",
        "response" => $_POST["g-recaptcha-response"],
        "remoteip" => $_SERVER["REMOTE_ADDR"]
    );

# Abre a conexão e informa os parâmetros: URL, método POST, parâmetros e retorno numa string
    $curlReCaptcha = curl_init();
    curl_setopt($curlReCaptcha, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($curlReCaptcha, CURLOPT_POST, true);
    curl_setopt($curlReCaptcha, CURLOPT_POSTFIELDS, http_build_query($vetParametros));
    curl_setopt($curlReCaptcha, CURLOPT_RETURNTRANSFER, true);

# A resposta é um objeto json em uma string, então só decodificar em um array (true no 2º parâmetro)
    $vetResposta = json_decode(curl_exec($curlReCaptcha), true);

# Fecha a conexão
    curl_close($curlReCaptcha);

# Analisa o resultado (no caso de erro, pode informar os códigos)
    if ($vetResposta["success"]) {

        // Configuração para o corpo de email
        $arquivo = "
        <html>
            <h1 style='color: #99cc33;'>Flora Mhterras - Contato via site</h1>
                <h3><b>Nome:</b> $nome</h3>
                <h3><b>Telefone:</b> $telefone</h3>
                <h3><b>Email:</b> $email</h3>
                <h3><b>Assunto:</b> $escolha</h3>
                <h3><b>Mensagem:</b> $texto</h3>
                <p>Enviado em <b>$data_envio</b> as <b>$hora_envio</b> horas.</p>
        </html>";

        //Enviando email
        enviarEmail($arquivo);
        
    } else {
        header('Location: ../contato.php?acao=error'); //Implementar resposata
    }
}

//Funçao para envio de email
function enviarEmail($arquivo) {

    // Email do destinatário form
    $remetemte_form = "contato@mhterras.com.br";
    $destinatario_form = "contato@mhterras.com.br";
    $assunto_form = "Contato via site Mhterras";

    // Configurando formato do email para saida HTML
    $headers = "Content-type: text/html; charset=UTF-8\r\n";

    // Enviando email do cliente
    $enviar = mail($destinatario_form, $assunto_form, $arquivo, $headers, "-r" . $remetemte_form);


    if ($enviar) {
        require_once './msgEnviado.php';
        echo "<meta http-equiv='refresh' content='5;URL=../index.php'>";
        
    } else {
        require_once './msgErro.php';
        echo "<meta http-equiv='refresh' content='5;URL=../contato.php'>";
    }
}
