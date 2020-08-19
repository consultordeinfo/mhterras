<?php

//TESTE PARA SABER QUAL DEPARTAMENTO FOU SUBMETIDO
if (isset($_POST['btnproduto'])) {
    recuperarProdutos(); // Enviando email com os dados de produto
    
} else if (isset($_POST['btndecoracao'])) {
    recuperarDecoracao(); // Envia e-mail com os dados de decoração
    
} else if (isset($_POST['btneucalipto'])) {
    recuperarEucalipto(); // Envia e-mail com os dados de eucalipto tratado
    
} else if (isset($_POST['btnprojeto'])) {
    recuperarPaisagismo(); // Envia e-mail com os dados de projetos para paisagismo
    
} else if (isset ($_POST['btnservicos'])){
    recuperarServicos(); // Envia e-mail com os dados de serviços
}

// FUNÇÕES PARA RECUPERAR OS DADOS ESPECIFICOS DE CADA PARTE DO FORMULÁRIO 
// Função para recuperar dados de Produtos - Orçamento direto **********
//**********************************************************************
function recuperarProdutos() {
    $departamento = "Produtos";

    // Recebendo os dados do formulário
    $cliente = $_POST['cliente'];
    $endereco = $_POST['endereco'];
    $bairro_cidade = $_POST['bairro_cidade'];
    $cep = $_POST['cep'];
    $opuf = $_POST['opcuf'];
    $email = $_POST['email'];
    $f_fixo = $_POST['f_fixo'];
    $f_celular = $_POST['f_celular'];

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


    // Testando para saber se produtos foram selecionados
    //ADUBOS
    if (isset($_POST['adubo0']) != null) {
        $adubo0 = "Calcário";
    } else {
        $adubo0 = null;
    }

    if (isset($_POST['adubo1']) != null) {
        $adubo1 = "Fort jardins";
    } else {
        $adubo1 = null;
    }

    if (isset($_POST['adubo2']) != null) {
        $adubo2 = "Fort frutas";
    } else {
        $adubo2 = null;
    }

    if (isset($_POST['adubo3']) != null) {
        $adubo3 = "Fort flantio";
    } else {
        $adubo3 = null;
    }

    if (isset($_POST['adubo4']) != null) {
        $adubo4 = "Fort palmeiras";
    } else {
        $adubo4 = null;
    }

    if (isset($_POST['adubo5']) != null) {
        $adubo5 = "Torta de mamona";
    } else {
        $adubo5 = null;
    }

    if (isset($_POST['adubo6']) != null) {
        $adubo6 = "Ureia";
    } else {
        $adubo6 = null;
    }

    if (isset($_POST['adubo7']) != null) {
        $adubo7 = "NPK, 4.14.8  10-10-10";
    } else {
        $adubo7 = null;
    }

    //FRUTIFERAS
    if (isset($_POST['frutifera0']) != null) {
        $frutifera0 = "Abacate";
    } else {
        $frutifera0 = null;
    }
    if (isset($_POST['frutifera1']) != null) {
        $frutifera1 = "Acerola";
    } else {
        $frutifera1 = null;
    }
    if (isset($_POST['frutifera2']) != null) {
        $frutifera2 = "Amora";
    } else {
        $frutifera2 = null;
    }
    if (isset($_POST['frutifera3']) != null) {
        $frutifera3 = "Caqui";
    } else {
        $frutifera3 = null;
    }
    if (isset($_POST['frutifera4']) != null) {
        $frutifera4 = "Carambola";
    } else {
        $frutifera4 = null;
    }
    if (isset($_POST['frutifera5']) != null) {
        $frutifera5 = "jaboticaba hidrida";
    } else {
        $frutifera5 = null;
    }
    if (isset($_POST['frutifera6']) != null) {
        $frutifera6 = "Jaboticaba sabará";
    } else {
        $frutifera6 = null;
    }
    if (isset($_POST['frutifera7']) != null) {
        $frutifera7 = "Laranjas";
    } else {
        $frutifera7 = null;
    }
    if (isset($_POST['frutifera8']) != null) {
        $frutifera8 = "Limão";
    } else {
        $frutifera8 = null;
    }
    if (isset($_POST['frutifera9']) != null) {
        $frutifera9 = "Manga";
    } else {
        $frutifera9 = null;
    }
    if (isset($_POST['frutifera10']) != null) {
        $frutifera10 = "Pitanga";
    } else {
        $frutifera10 = null;
    }
    if (isset($_POST['frutifera11']) != null) {
        $frutifera11 = "Uva";
    } else {
        $frutifera11 = null;
    }

    //JARDINEIRAS
    if (isset($_POST['jardineira0']) != null) {
        $jardineira0 = "Cimento 0,50cm";
    } else {
        $jardineira0 = null;
    }
    if (isset($_POST['jardineira1']) != null) {
        $jardineira1 = "Cimento 1,00mt";
    } else {
        $jardineira1 = null;
    }
    if (isset($_POST['jardineira2']) != null) {
        $jardineira2 = "Cimento 1,20mt";
    } else {
        $jardineira2 = null;
    }
    if (isset($_POST['jardineira3']) != null) {
        $jardineira3 = "Polietileno";
    } else {
        $jardineira3 = null;
    }
    if (isset($_POST['jardineira4']) != null) {
        $jardineira4 = "Plástico";
    } else {
        $jardineira4 = null;
    }

    //PEDRAS
    if (isset($_POST['pedra0']) != null) {
        $pedra0 = "Branca/Dolomita nº 1,2,3 e 4";
    } else {
        $pedra0 = null;
    }
    if (isset($_POST['pedra1']) != null) {
        $pedra1 = "Marron - Seixo batata";
    } else {
        $pedra1 = null;
    }
    if (isset($_POST['pedra2']) != null) {
        $pedra2 = "Marron - Seixo batatinha";
    } else {
        $pedra2 = null;
    }
    if (isset($_POST['pedra3']) != null) {
        $pedra3 = "Marron - Seixo feijãozinho";
    } else {
        $pedra3 = null;
    }
    if (isset($_POST['pedra4']) != null) {
        $pedra4 = "Marron - Seixo de rio";
    } else {
        $pedra4 = null;
    }
    if (isset($_POST['pedra5']) != null) {
        $pedra5 = "Pedrisco Bege - nº 1, 2, 3 e 4";
    } else {
        $pedra5 = null;
    }
    if (isset($_POST['pedra6']) != null) {
        $pedra6 = "Pedrisco Branco - nº 1, 2, 3 e 4";
    } else {
        $pedra6 = null;
    }

    //PLANTAS ORNAMENTAIS
    if (isset($_POST['planta0']) != null) {
        $planta0 = "Orquídea Bambu";
    } else {
        $planta0 = null;
    }
    if (isset($_POST['planta1']) != null) {
        $planta1 = "Orquídea Vaso";
    } else {
        $planta1 = null;
    }

    //TERRAS
    if (isset($_POST['terra0']) != null) {
        $terra0 = "Adubada";
    } else {
        $terra0 = null;
    }
    if (isset($_POST['terra1']) != null) {
        $terra1 = "Esterco bovino";
    } else {
        $terra1 = null;
    }
    if (isset($_POST['terra2']) != null) {
        $terra2 = "Organica";
    } else {
        $terra2 = null;
    }
    if (isset($_POST['terra3']) != null) {
        $terra3 = "Substrato";
    } else {
        $terra3 = null;
    }
    if (isset($_POST['terra4']) != null) {
        $terra4 = "Vegetal";
    } else {
        $terra4 = null;
    }

    //VASOS
    if (isset($_POST['vaso0']) != null) {
        $vaso0 = "Bacia";
    } else {
        $vaso0 = null;
    }
    if (isset($_POST['vaso1']) != null) {
        $vaso1 = "Quadrado";
    } else {
        $vaso1 = null;
    }
    if (isset($_POST['vaso2']) != null) {
        $vaso2 = "Polietileno";
    } else {
        $vaso2 = null;
    }
    if (isset($_POST['vaso3']) != null) {
        $vaso3 = "Redondo";
    } else {
        $vaso3 = null;
    }
    if (isset($_POST['vaso4']) != null) {
        $vaso4 = "Vaso de cimento - Bacias";
    } else {
        $vaso4 = null;
    }
    if (isset($_POST['vaso5']) != null) {
        $vaso5 = "Vaso de cimento - Cone";
    } else {
        $vaso5 = null;
    }
    if (isset($_POST['vaso6']) != null) {
        $vaso6 = "Vaso de cimento - Redondo";
    } else {
        $vaso6 = null;
    }
    if (isset($_POST['vaso7']) != null) {
        $vaso7 = "Vaso de cerâmica - Cilindro";
    } else {
        $vaso7 = null;
    }
    if (isset($_POST['vaso8']) != null) {
        $vaso8 = "Vaso de cerâmica - Cone";
    } else {
        $vaso8 = null;
    }
    if (isset($_POST['vaso9']) != null) {
        $vaso9 = "Vaso de cerâmica - Redondo";
    } else {
        $vaso9 = null;
    }
    if (isset($_POST['vaso10']) != null) {
        $vaso10 = "Vaso de cerâmica - de parede com furos";
    } else {
        $vaso10 = null;
    }
    if (isset($_POST['vaso11']) != null) {
        $vaso11 = "Vaso de cerâmica - de parede sem furos";
    } else {
        $vaso11 = null;
    }

    corpoEmailProdutos($departamento, $cliente, $endereco, $bairro_cidade, $email,
            $uf, $f_fixo, $f_celular, $adubo0, $adubo1, $adubo2, $adubo3, $adubo4, $adubo5,
            $adubo6, $adubo7, $frutifera0, $frutifera1, $frutifera2, $frutifera3,
            $frutifera4, $frutifera5, $frutifera6, $frutifera7, $frutifera8, $frutifera9,
            $frutifera10, $frutifera11, $jardineira0, $jardineira1, $jardineira2,
            $jardineira3, $jardineira4, $pedra0, $pedra1, $pedra2, $pedra3, $pedra4,
            $pedra5, $pedra6, $planta0, $planta1, $terra0, $terra1, $terra2, $terra3,
            $terra4, $vaso0, $vaso1, $vaso2, $vaso3, $vaso4, $vaso5, $vaso6, $vaso7, $vaso8, $vaso9);
}

// Função para recuperar dados de Decoraçoes - Orçamento direto **********
//**********************************************************************
function recuperarDecoracao() {
    $departamento = "Decorações";

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


    // Testando para saber se produtos foram selecionados
    if (isset($_POST['decora0']) != null) {
        $decora0 = "Bancos de madeira";
    } else {
        $decora0 = null;
    }

    if (isset($_POST['decora1']) != null) {
        $decora1 = "Cadeira de balanço";
    } else {
        $decora1 = null;
    }

    if (isset($_POST['decora2']) != null) {
        $decora2 = "Mesas";
    } else {
        $decora2 = null;
    }

    //Chamando a função para envio de email
    corpoEmailDecoracao($departamento, $cliente, $endereco, $bairro_cidade, $cep, $uf, $email, $f_fixo, $f_celular, $assunto,
            $decora0, $decora1, $decora2);
}

// Função para recuperar dados de eucalipto tratado - Orçamento direto **
//***********************************************************************
function recuperarEucalipto() {
    $departamento = "Eucalipto tratado";

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

    //Determinando qual medida e bitola foi escolhido
    if (isset($_POST['medidas']) && $_POST['medidas'] == 'medida1') {
        $inputGroupMedida1 = $_POST['inputGroupMedida1'];
        $medida = '2,20 metros';

        switch ($inputGroupMedida1) {//De 2,20 metros
            case 4:
                $bitola = "04";
                break;
            case 5:
                $bitola = "05";
                break;
            case 6:
                $bitola = "06";
                break;
            case 7:
                $bitola = "07";
                break;
            case 8:
                $bitola = "08";
                break;
            case 9:
                $bitola = "09";
                break;
            case 10:
                $bitola = "10";
                break;
            case 11:
                $bitola = "11";
                break;
            case 12:
                $bitola = "12";
                break;
            default :
                break;
        }
    } else if (isset($_POST['medidas']) && $_POST['medidas'] == 'medida2') {
        $inputGroupMedida2 = $_POST['inputGroupMedida2'];
        $medida = '3,00 metros';

        switch ($inputGroupMedida2) {//De 3,00 metros
            case 4:
                $bitola = "04";
                break;
            case 5:
                $bitola = "05";
                break;
            case 6:
                $bitola = "06";
                break;
            case 7:
                $bitola = "07";
                break;
            case 8:
                $bitola = "08";
                break;
            case 9:
                $bitola = "09";
                break;
            case 10:
                $bitola = "10";
                break;
            case 11:
                $bitola = "11";
                break;
            case 12:
                $bitola = "12";
                break;
            case 13:
                $bitola = "13";
                break;
            case 14:
                $bitola = "14";
                break;
            case 15:
                $bitola = "15";
                break;
            case 16:
                $bitola = "16";
                break;
            case 17:
                $bitola = "17";
                break;
            case 18:
                $bitola = "18";
                break;
            case 19:
                $bitola = "19";
                break;
            case 20:
                $bitola = "20";
                break;
            case 21:
                $bitola = "21";
                break;
            case 22:
                $bitola = "22";
                break;
            default :
                break;
        }
    } else if (isset($_POST['medidas']) && $_POST['medidas'] == 'medida3') {
        $inputGroupMedida3 = $_POST['inputGroupMedida3'];
        $medida = '4,00 metros';

        switch ($inputGroupMedida3) {//De 4,00 metros
            case 4:
                $bitola = "04";
                break;
            case 5:
                $bitola = "05";
                break;
            case 6:
                $bitola = "06";
                break;
            case 7:
                $bitola = "07";
                break;
            case 8:
                $bitola = "08";
                break;
            case 9:
                $bitola = "09";
                break;
            case 10:
                $bitola = "10";
                break;
            case 11:
                $bitola = "11";
                break;
            case 12:
                $bitola = "12";
                break;
            case 13:
                $bitola = "13";
                break;
            case 14:
                $bitola = "14";
                break;
            case 15:
                $bitola = "15";
                break;
            case 16:
                $bitola = "16";
                break;
            case 17:
                $bitola = "17";
                break;
            case 18:
                $bitola = "18";
                break;
            case 19:
                $bitola = "19";
                break;
            case 20:
                $bitola = "20";
                break;
            case 21:
                $bitola = "21";
                break;
            case 22:
                $bitola = "22";
                break;
            case 23:
                $bitola = "23";
                break;
            case 24:
                $bitola = "24";
                break;
            default :
                break;
        }
    } else if (isset($_POST['medidas']) && $_POST['medidas'] == 'medida4') {
        $inputGroupMedida4 = $_POST['inputGroupMedida4'];
        $medida = '5,00 metros';

        switch ($inputGroupMedida4) {//De 5,00 metros
            case 8:
                $bitola = "08";
                break;
            case 9:
                $bitola = "09";
                break;
            case 10:
                $bitola = "10";
                break;
            case 11:
                $bitola = "11";
                break;
            case 12:
                $bitola = "12";
                break;
            case 13:
                $bitola = "13";
                break;
            case 14:
                $bitola = "14";
                break;
            case 15:
                $bitola = "15";
                break;
            case 16:
                $bitola = "16";
                break;
            case 17:
                $bitola = "17";
                break;
            case 18:
                $bitola = "18";
                break;
            case 19:
                $bitola = "19";
                break;
            case 20:
                $bitola = "20";
                break;
            case 21:
                $bitola = "21";
                break;
            case 22:
                $bitola = "22";
                break;
            case 23:
                $bitola = "23";
                break;
            case 24:
                $bitola = "24";
                break;
            default :
                break;
        }
    } else if (isset($_POST['medidas']) && $_POST['medidas'] == 'medida5') {
        $inputGroupMedida5 = $_POST['inputGroupMedida5'];
        $medida = '6,00 metros';

        switch ($inputGroupMedida5) {//De 6,00 metros
            case 10:
                $bitola = "10";
                break;
            case 11:
                $bitola = "11";
                break;
            case 12:
                $bitola = "12";
                break;
            case 13:
                $bitola = "13";
                break;
            case 14:
                $bitola = "14";
                break;
            case 15:
                $bitola = "15";
                break;
            case 16:
                $bitola = "16";
                break;
            case 17:
                $bitola = "17";
                break;
            case 18:
                $bitola = "18";
                break;
            case 19:
                $bitola = "19";
                break;
            case 20:
                $bitola = "20";
                break;
            default :
                break;
        }
    } else if (isset($_POST['medidas']) && $_POST['medidas'] == 'medida6') {
        $inputGroupMedida6 = $_POST['inputGroupMedida6'];
        $medida = '7,00 metros';

        switch ($inputGroupMedida6) {//De 7,00 metros
            case 8:
                $bitola = "08";
                break;
            case 9:
                $bitola = "09";
                break;
            case 10:
                $bitola = "10";
                break;
            case 11:
                $bitola = "11";
                break;
            case 12:
                $bitola = "12";
                break;
            case 13:
                $bitola = "13";
                break;
            case 14:
                $bitola = "14";
                break;
            case 15:
                $bitola = "15";
                break;
            case 16:
                $bitola = "16";
                break;
            case 17:
                $bitola = "17";
                break;
            case 18:
                $bitola = "18";
                break;
            case 19:
                $bitola = "19";
                break;
            case 20:
                $bitola = "20";
                break;
            default :
                break;
        }
    } else if (isset($_POST['medidas']) && $_POST['medidas'] == 'medida7') {
        $inputGroupMedida7 = $_POST['inputGroupMedida7'];
        $medida = '8,00 metros';

        switch ($inputGroupMedida7) {//De 8,00 metros
            case 10:
                $bitola = "10";
                break;
            case 11:
                $bitola = "11";
                break;
            case 12:
                $bitola = "12";
                break;
            case 13:
                $bitola = "13";
                break;
            case 14:
                $bitola = "14";
                break;
            case 15:
                $bitola = "15";
                break;
            case 16:
                $bitola = "16";
                break;
            case 17:
                $bitola = "17";
                break;
            case 18:
                $bitola = "18";
                break;
            case 19:
                $bitola = "19";
                break;
            case 20:
                $bitola = "20";
                break;
            case 21:
                $bitola = "21";
                break;
            case 22:
                $bitola = "22";
                break;
            case 23:
                $bitola = "23";
                break;
            case 24:
                $bitola = "24";
                break;
            default :
                break;
        }
    }
    
    corpoEmailEucalipto($cliente, $endereco, $bairro_cidade, $email, $uf,
            $f_fixo, $f_celular, $departamento, $medida, $bitola);
}

function recuperarPaisagismo(){
    $departamento = "Projetos de paisagismo";

    // Recebendo os dados do formulário
    $cliente = $_POST['cliente'];
    $endereco = $_POST['endereco'];
    $bairro_cidade = $_POST['bairro_cidade'];
    $cep = $_POST['cep'];
    $opuf = $_POST['opcuf'];
    $email = $_POST['email'];
    $f_fixo = $_POST['f_fixo'];
    $f_celular = $_POST['f_celular'];
    $assunto = $_POST['assuntoprojeto'];


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
    
    if(isset($_POST['projeto']) != null){
        corpoEmailPaisagismo($cliente, $endereco, $bairro_cidade, $cep, $email, $uf, $f_fixo,
                $f_celular, $departamento, $assunto);
    }
}

function recuperarServicos(){
    $departamento = "Serviços";

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
    
    if (isset($_POST['serv0']) != null) {
        $serv0 = "Adubação";
    } else {
        $serv0 = null;
    }
    if (isset($_POST['serv1']) != null) {
        $serv1 = "Cerca de Eucalipto Tratado com Tela/Arame";
    } else {
        $serv1 = null;
    }
    if (isset($_POST['serv2']) != null) {
        $serv2 = "Cerca de Eucalipto Tratado Fechada";
    } else {
        $serv2 = null;
    }
    if (isset($_POST['serv3']) != null) {
        $serv3 = "Construção com Eucalipto Tratado";
    } else {
        $serv3 = null;
    }
    if (isset($_POST['serv4']) != null) {
        $serv4 = "Controle de Pragas em Geral";
    } else {
        $serv4 = null;
    }
    if (isset($_POST['serv5']) != null) {
        $serv5 = "Corte de Árvores";
    } else {
        $serv5 = null;
    }
    if (isset($_POST['serv6']) != null) {
        $serv6 = "Churrasqueira/Cobertura";
    } else {
        $serv6 = null;
    }
    if (isset($_POST['serv7']) != null) {
        $serv7 = "Decorações";
    } else {
        $serv7 = null;
    }
    if (isset($_POST['serv8']) != null) {
        $serv8 = "Detetização de Jardins";
    } else {
        $serv8 = null;
    }
    if (isset($_POST['serv9']) != null) {
        $serv9 = "Iluminação de Jardins";
    } else {
        $serv9 = null;
    }
    if (isset($_POST['serv10']) != null) {
        $serv10 = "Irrigação de Jardins";
    } else {
        $serv10 = null;
    }
    if (isset($_POST['serv11']) != null) {
        $serv11 = "Jardim Verticais";
    } else {
        $serv11 = null;
    }
    if (isset($_POST['serv12']) != null) {
        $serv12 = "Manutenção de Condomínios";
    } else {
        $serv12 = null;
    }
    if (isset($_POST['serv13']) != null) {
        $serv13 = "Manutenção de Jardins";
    } else {
        $serv13 = null;
    }
    if (isset($_POST['serv14']) != null) {
        $serv14 = "Montagem de Deck";
    } else {
        $serv14 = null;
    }
    if (isset($_POST['serv15']) != null) {
        $serv15 = "Montagem de Pergulado";
    } else {
        $serv15 = null;
    }
    if (isset($_POST['serv16']) != null) {
        $serv16 = "Movimentação de Solo";
    } else {
        $serv16 = null;
    }
    if (isset($_POST['serv17']) != null) {
        $serv17 = "Piso Grama";
    } else {
        $serv17 = null;
    }
    if (isset($_POST['serv18']) != null) {
        $serv18 = "Plantio de Árvores Frutíferas";
    } else {
        $serv18 = null;
    }
    if (isset($_POST['serv19']) != null) {
        $serv19 = "Poda de Árvores";
    } else {
        $serv19 = null;
    }
    if (isset($_POST['serv20']) != null) {
        $serv20 = "Projeto/Implantação de Jardins";
    } else {
        $serv20 = null;
    }
    if (isset($_POST['serv21']) != null) {
        $serv21 = "Transplantes de Árvores";
    } else {
        $serv21 = null;
    }
    if (isset($_POST['serv22']) != null) {
        $serv22 = "Troca de Solo";
    } else {
        $serv22 = null;
    }
    
    corpoEmailServicos($cliente, $endereco, $bairro_cidade, $email, $cep, $uf, $f_fixo, $f_celular, 
            $assunto, $departamento, $serv0, $serv1, $serv2, $serv3, $serv4, $serv5, $serv6, $serv7, $serv8, 
            $serv9, $serv10, $serv11, $serv12, $serv13, $serv14, $serv15, $serv16, $serv17, $serv18, 
            $serv19, $serv20, $serv21, $serv22);
}





// FUNÇÕES PARA CRIAR CADA CORPO DE EMAIL CONFORME O QUE FOI SOLICITADO PELO USUÁRIO
// Função para reuperar os produtos selecionados e criar o corpo de email****
//***************************************************************************
function corpoEmailProdutos($departamento, $cliente, $endereco, $bairro_cidade, $email, $uf, $f_fixo, $f_celular,
        $adubo0, $adubo1, $adubo2, $adubo3, $adubo4, $adubo5, $adubo6, $adubo7,
        $frutifera0, $frutifera1, $frutifera2, $frutifera3, $frutifera4, $frutifera5, $frutifera6, $frutifera7, $frutifera8, $frutifera9, $frutifera10, $frutifera11,
        $jardineira0, $jardineira1, $jardineira2, $jardineira3, $jardineira4,
        $pedra0, $pedra1, $pedra2, $pedra3, $pedra4, $pedra5, $pedra6,
        $planta0, $planta1,
        $terra0, $terra1, $terra2, $terra3, $terra4,
        $vaso0, $vaso1, $vaso2, $vaso3, $vaso4, $vaso5, $vaso6, $vaso7, $vaso8, $vaso9) {

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
                <h3><b>Estado:</b> $uf</h3>
                <h3><b>Telefone Fixo:</b> $f_fixo</h3>
                <h3><b>Telefone Celular:</b> $f_celular</h3>
                <h3><b>Departamento:</b> $departamento</h3>
                <h3><b>Ítens selecionados:</b></h3>
                <p>$adubo0 - $adubo1 - $adubo2 - $adubo3 - $adubo4 - $adubo5 - $adubo6 - $adubo7</p><hr>
                <p>$frutifera0 - $frutifera1 - $frutifera2 - $frutifera3 - $frutifera4 - $frutifera5 - $frutifera6 - $frutifera7 - $frutifera8 - $frutifera9 - $frutifera10 - $frutifera11</p><hr>
                <p>$jardineira0 - $jardineira1 - $jardineira2 - $jardineira3 - $jardineira4</p><hr>
                <p>$pedra0 - $pedra1 - $pedra2 - $pedra3 - $pedra4 - $pedra5 - $pedra6</p><hr>
                <p>$planta0 - $planta1</p><hr>
                <p>$terra0 - $terra1 - $terra2 - $terra3 - $terra4</p><hr>
                <p>$vaso0 - $vaso1 - $vaso2 - $vaso3 - $vaso4 - $vaso5 - $vaso6 - $vaso7 - $vaso8 - $vaso9</p><hr>
                <br>
                <p>Enviado em <b>$data_envio</b> as <b>$hora_envio</b> horas.</p>
        </html>";

    //Enviando o email
    enviarEmail($arquivo);
}

// Função para reuperar as decorações selecionados e criar o corpo de email**
//***************************************************************************
function corpoEmailDecoracao($departamento, $cliente, $endereco, $bairro_cidade, $cep, $opuf, $email, $f_fixo, $f_celular, $assunto,
        $decora0, $decora1, $decora2) {

    //Pegando data e hora atual
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    //Recuperando os dados e construindo o email para envio.
    $arquivo = "
        <html>
            <h1 style='color: #99cc33;'>Mhterras e Pedras - ORÇAMENTO</h1>
                <h3><b>CLIENTE:</b> $cliente</h3>
                <h3><b>ENDEREÇO:</b> $endereco</h3>
                <h3><b>BAIRRO/CIDADE:</b> $bairro_cidade</h3>
                <h3><b>CEP:</b> $cep</h3>
                <h3><b>ESTADO:</b> $opuf</h3>
                <h3><b>E-MAIL:</b> $email</h3>
                <h3><b>TELEFONE FIXO:</b> $f_fixo</h3>
                <h3><b>TELEFONE CELULAR:</b> $f_celular</h3>
                <h3><b>DEPARTAMENTO:</b> $departamento</h3>
                <h3><b>ITENS:</b></h3>
                <p>$decora0 - $decora1 - $decora2</p><hr>
                <br>
                <h3><b>ASSUNTO:</b></h3>
                <p>$assunto</p><br>
                <p>Enviado em <b>$data_envio</b> as <b>$hora_envio</b> horas.</p>
        </html>";

    //Enviando o email
    enviarEmail($arquivo);
}

function corpoEmailEucalipto($cliente, $endereco, $bairro_cidade, $email, $uf, $f_fixo, $f_celular,
        $departamento, $medida, $bitola) {

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
                <h3><b>Estado:</b> $uf</h3>
                <h3><b>Telefone Fixo:</b> $f_fixo</h3>
                <h3><b>Telefone Celular:</b> $f_celular</h3>
                <h3><b>Departamento:</b> $departamento</h3><br><hr>
                <p>Gostaria de um orçamento para eucalipto de <b>$medida</b> com bitola <b>$bitola</b>.</p><hr>
                <br>
                <p>Enviado em <b>$data_envio</b> as <b>$hora_envio</b> horas.</p>
        </html>";

    //Enviando o email
    enviarEmail($arquivo);
}

function corpoEmailPaisagismo($cliente, $endereco, $bairro_cidade, $cep, $email, $uf, $f_fixo, $f_celular, 
                                $departamento, $assunto){
    
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
                <h3><b>Cep:</b> $cep</h3>
                <h3><b>E-mail:</b> $email</h3>
                <h3><b>Estado:</b> $uf</h3>
                <h3><b>Telefone Fixo:</b> $f_fixo</h3>
                <h3><b>Telefone Celular:</b> $f_celular</h3>
                <h3><b>Departamento:</b> $departamento</h3><br><hr>
                <p>$assunto</p><hr>
                <br>
                <p>Enviado em <b>$data_envio</b> as <b>$hora_envio</b> horas.</p>
        </html>";

    //Enviando o email
    enviarEmail($arquivo);
}

function corpoEmailServicos($cliente, $endereco,$bairro_cidade, $email, $cep, $uf, $f_fixo, $f_celular, $assunto, $departamento,
                            $serv0, $serv1, $serv2, $serv3, $serv4, $serv5, $serv6, $serv7, $serv8, $serv9,
                            $serv10, $serv11, $serv12, $serv13, $serv14, $serv15, $serv16, $serv17, $serv18, $serv19,
                            $serv20, $serv21, $serv22){
    //Pegando data e hora atual
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');
    
    //Recuperando os dados e construindo o email para envio.
    $arquivo = "
        <html>
            <h1 style='color: #99cc33;'>Mhterras e Pedras - ORÇAMENTO</h1>
                <h3><b>CLIENTE:</b> $cliente</h3>
                <h3><b>ENDEREÇO:</b> $endereco</h3>
                <h3><b>BAIRRO/CIDADE:</b> $bairro_cidade</h3>
                <h3><b>E-MAIL:</b> $email</h3>
                <h3><b>CEP:</b> $cep</h3>
                <h3><b>ESTADO:</b> $uf</h3>
                <h3><b>TELEFONE FIXO:</b> $f_fixo</h3>
                <h3><b>TELEFONE CELULAR:</b> $f_celular</h3>
                <h3><b>DEPARTAMENTO:</b> $departamento</h3>
                <h3><b>ITENS SELECIONADOS:</b></h3>
                <p>$serv0 - $serv1 - $serv2 - $serv3 - $serv4 - $serv5 - $serv6 - $serv7 - $serv8 - $serv9 - "
                . "$serv10 - $serv11 - $serv12 - $serv13 - $serv14 - $serv15 - $serv16 - $serv17 - $serv18 - $serv19 "
                . "- $serv20 - $serv21 - $serv22</p><hr>
                <br>
                <h3><b>ASSUNTO:</b> $assunto</h3><br>
                <p>Enviado em <b>$data_envio</b> as <b>$hora_envio</b> horas.</p>
        </html>";
    
    //Enviando o email
    enviarEmail($arquivo);
}



// FUNÇÃO PARA ENVIO DO E-MAIL **********************
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
