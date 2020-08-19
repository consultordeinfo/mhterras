<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php
        require_once './head.php';
        ?>
        <style>
            body{
                background-color: #99cc33;
            }
            .msg{
                background-image: url('../image/img-contato-teste.JPG');
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
                max-width: 800px;
                margin: 0 auto;
                border: 2px solid #2d6d00;
                border-radius: 10px;
                margin-top: 25px;
            }
            .msg > h2{
                font-size: 45px;
                text-align: center;
                color: #ffffff;
            }
            .msg > h3{
                font-size: 25px;
                font-family: tahoma, comic sans ms;
                color: #ffffff;
                text-align: center;
            }
            .msg > img{
                display: block;
                margin: 0 auto;
                width: 300px;
                padding-top: 10px;
            }
        </style>
        <title></title>
    </head>
    <body>
        
        <div class="msg">
            <img src="../image/img-logo-mhterras.png"/>
            <h2><i class="fa fa-check-circle-o maracacao"></i> Mensagem enviada!</h2>
            <h3>Obrigado pelo contato,</h3>
            <h3>sua mensagem foi enviada com sucesso,</h3>
            <h3>em breve entraremos em contato!</h3>
        </div>
    </body>
</html>
