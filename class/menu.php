<?php

echo '<header id="topo">
            <nav class="navbar navbar-expand-sm navbar-light navbar-transparente" id="menu">
                <!-- Logo -->
                <a href="#" class="navbar-brand">
                    <img src="image/img-logo-mhterras.png" width="150" class="ml-3"/>
                </a>

                <!-- Menu Hamburguer-->
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navegação-->
                <div class="collapse navbar-collapse mr-3" id="nav-menu">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a href="aempresa.php" class="nav-link">A Empresa</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Produtos</a>

                            <div class="dropdown-menu">
                                <a href="produtos.php?acao=adubo" class="dropdown-item">Adubos</a>
                                <a href="produtos.php?acao=frutifera" class="dropdown-item">Árvores Frutíferas</a>
                                <a href="produtos.php?acao=jardineira" class="dropdown-item">Jardineiras</a>
                                <a href="produtos.php?acao=eucalipto" class="dropdown-item">Eucalipto Tratado</a>
                                <a href="produtos.php?acao=ornamental" class="dropdown-item">Plantas Ornamentais</a>
                                <a href="produtos.php?acao=pedra" class="dropdown-item">Pedras/Seixos/Pedriscos</a>
                                <a href="produtos.php?acao=terra" class="dropdown-item">Terras</a>
                                <a href="produtos.php?acao=vaso" class="dropdown-item">Vasos</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Serviços</a>

                            <div class="dropdown-menu">
                                <a href="servicos.php?acao=corte" class="dropdown-item">Corte de Árvores</a>
                                <a href="servicos.php?acao=churrasqueira" class="dropdown-item">Churrasqueira Coberta</a>
                                <a href="servicos.php?acao=detetizacao" class="dropdown-item">Detetizações/Iluminações/Irrigações de Jardins</a>
                                <a href="servicos.php?acao=jardim" class="dropdown-item">Jardim Vertical</a>
                                <a href="servicos.php?acao=montagem" class="dropdown-item">Montagem de Decks Pergulados</a>
                                <a href="servicos.php?acao=solo" class="dropdown-item">Movimentação de Solo</a>
                                <a href="servicos.php?acao=grama" class="dropdown-item">Piso Grama</a>
                                <a href="servicos.php?acao=plantio" class="dropdown-item">Plantio de Árvores Nativas</a>
                                <a href="servicos.php?acao=projeto" class="dropdown-item">Projetos Implatações</a>
                                <a href="servicos.php?acao=contrato" class="dropdown-item">Contrato manutenção - Condomínos e Empresas</a>
                                <a href="servicos.php?acao=poda" class="dropdown-item">Poda de Árvores/Transplantes de Árvores/Troca de Solo</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Decorações</a>

                            <div class="dropdown-menu">
                                <a href="decoracao.php?acao=bancos"  class="dropdown-item">Bancos de madeira</a>
                                <a href="decoracao.php?acao=cadeiras" class="dropdown-item">Cadeiras de balanço</a>
                                <a href="decoracao.php?acao=mesas" class="dropdown-item">Mesas</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="paisagismo.php?acao=landscape" class="nav-link">Paisagismo</a>
                        </li>

                        <li class="nav-item">
                            <a href="orcamento.php" class="nav-link">Orçamentos</a>
                        </li>

                        <li class="nav-item">
                            <a href="contato.php" id="contato-mhterras" class="nav-link">Contato</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>';

