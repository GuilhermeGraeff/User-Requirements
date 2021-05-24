<!DOCTYPE html>
<html>
    
    <head>
        <title>Casa da Bicicleta</title>
        <meta charset="utf-8">
        <meta name="description" content="Casa da Bicicleta">
        <meta name="keywords" content="Bicicleta, Peças, Oficina"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/styles.css">
    </head>

    <body>
        <header> 
            <div id="logo">
                <img id="logo_menuprincipal" src="../assets/images/logo_despesas.png" alt="Caderneta com sifrão de dinheiro estampada">
            </div>
            <div id="tela">
                <h1>DESPESAS</h1>
            </div>
        </header>

        <main>
            <div id="flex_main">
                <div id="main_esq">
                    <div id="cabecalho_main_esq">
                        <nav class="navegacao">
                            <div><a href="u_atualizardespesa.php">Atualizar Despesa</a></div>
                            <div><a href= "u_cadastrardespesa.php">Cadastrar Despesa</a></div>
                            <div><a href= "u_excluirdespesa.php">Excluir Despesa</a></div>
                        </nav> 
                    </div> 
                    <div id="rodape_main_esq">
                        <nav class="navegacao">
                            <div><a href= "../index.php">Menu Principal</a></div>
                        </nav> 
                    </div> 
                </div>
                <div id="main_dir">
                    
                    <div id="Servicos">
                        <h1>Despesas</h1>
                        <h5>Despesas referente ao mês de Janeiro de 2010</h5>
                        <table>
                            <tr>
                                <th>Código</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>Prazo</th>
                                <th>Recorrência</th>
                            </tr>
                            <div> 
                                <?php
                                    require_once "../classes/DespesaDAO.php";
                                    $obj = new DespesaDAO();
                                    $lista = $obj->listar(); 
                                    
                                    if(count($lista) == 0){
                                        echo "Nenhum sabor encontrado.";
                                    }
                                    else{
                                        foreach ($lista as $despesa){
                                            echo "<tr><td>".$despesa->getCodDespesa()."</td><td>".$despesa->getDescr()."</td><td>".$despesa->getValor()."</td><td>".$despesa->getPrazoValidade()."</td><td>".$despesa->getRecorr()."</td></tr>";
                                        }
                                    }
                                ?>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div>
                <p>© Copyright 2021. Todos os direitos reservados.  </p>
            </div>
        </footer>
    </body>

</html>
