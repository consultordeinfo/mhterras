<?php

//TESTE PARA QUAL DEPARTAMENTO FOI SELECIONADO
if (isset($_POST['btn-diversos'])) {
    recuperarItensDiversos(); // Enviando email com os dados de produto
}


// Função para recuperar dados de Produtos - Orçamento direto **********
//**********************************************************************
function recuperarItensDiversos() {

    // Recebendo os dados do formulário
    $cliente = $_POST['cliente'];
    $endereco = $_POST['endereco'];
    $bairro_cidade = $_POST['bairro_cidade'];
    $cep = $_POST['cep'];
    $opuf = $_POST['opcuf'];
    $email = $_POST['email'];
    $f_fixo = $_POST['f_fixo'];
    $f_celular = $_POST['f_celular'];
    $assunto = $_POST['assunto'];

//Recebendo UF **************************************
//***************************************************
    switch ($opuf) {
        case 1:
            $uf = "AC";
            break;
        case 2:
            $uf = "AL";
            break;
        case 3:
            $uf = "AP";
            break;
        case 4:
            $uf = "AM";
            break;
        case 5:
            $uf = "BA";
            break;
        case 6:
            $uf = "CE";
            break;
        case 7:
            $uf = "DF";
            break;
        case 8:
            $uf = "ES";
            break;
        case 9:
            $uf = "GO";
            break;
        case 10:
            $uf = "MA";
            break;
        case 11:
            $uf = "MT";
            break;
        case 12:
            $uf = "MS";
            break;
        case 13:
            $uf = "MG";
            break;
        case 14:
            $uf = "PA";
            break;
        case 15:
            $uf = "PB";
            break;
        case 16:
            $uf = "PR";
            break;
        case 17:
            $uf = "PE";
            break;
        case 18:
            $uf = "PI";
            break;
        case 19:
            $uf = "RJ";
            break;
        case 20:
            $uf = "RN";
            break;
        case 21:
            $uf = "RS";
            break;
        case 22:
            $uf = "RO";
            break;
        case 23:
            $uf = "RR";
            break;
        case 24:
            $uf = "SC";
            break;
        case 25:
            $uf = "SP";
            break;
        case 26:
            $uf = "SE";
            break;
        case 27:
            $uf = "TO";
            break;
        default:
            break;
    }

    corpoEmailDiversos($cliente, $endereco, $bairro_cidade, $email, $cep, $uf, $f_fixo, $f_celular, $assunto);
    
}

// Função para reuperar os produtos selecionados ****
//***************************************************
function corpoEmailDiversos($cliente, $endereco, $bairro_cidade, $email, $cep, $uf, $f_fixo, $f_celular, $assunto ) {

    //Pegando data e hora atual
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    //Recuperando os dados e construindo o email para envio.
    $arquivo = "
        <html>
            <h1 style='color: #99cc33;'>Flora Mhterras - ORCAMENTO</h1>
                <h3><b>Cliente:</b> $cliente</h3>
                <h3><b>Endereco:</b> $endereco</h3>
                <h3><b>Bairro/Cidade:</b> $bairro_cidade</h3>
                <h3><b>E-mail:</b> $email</h3>
                <h3><b>CEP:</b> $cep</h3>
                <h3><b>Estado:</b> $uf</h3>
                <h3><b>Telefone Fixo:</b> $f_fixo</h3>
                <h3><b>Telefone Celular:</b> $f_celular</h3>
                <h3><b>Assunto:</b></h3>
                <p><b>$assunto</b></p><br><hr>
                <p>Enviado em <b>$data_envio</b> as <b>$hora_envio</b> horas.</p>
                </html>";

    //Enviando o email
    enviarEmail($arquivo);
}

// Função para enviar o e-mail **********************
//***************************************************
function enviarEmail($arquivo) {
    
    // Email do destinatário form
    $remetemte_form = "contato@mhterras.com.br";
    $destinatario_form = "contato@mhterras.com.br";
    $assunto_form = "Orçamento via site";

    // Configurando formato do email para saida HTML
    $headers = "Content-type: text/html; charset=UTF-8\r\n";

    // Enviando email do cliente
    $enviar = mail($destinatario_form, $assunto_form, $arquivo, $headers, "-r" . $remetemte_form);


    if ($enviar) {
        require_once './msgEnviado.php';
        echo "<meta http-equiv='refresh' content='5;URL=../index.php'>";
        
    } else {
        require_once './msgErro.php';
        echo "<meta http-equiv='refresh' content='5;URL=../index.php'>";
    }
}
