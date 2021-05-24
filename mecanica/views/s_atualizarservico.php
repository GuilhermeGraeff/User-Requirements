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
                <img id="logo_menuprincipal" src="../assets/images/logo_servicos.png" alt="Ferramentas diversas">
            </div>
            <div id="tela">
                <h1>ATUALIZAR SERVIÇO</h1>
            </div>
        </header>

        <main>
            <div id="flex_main">
                <div id="main_esq">
                    <div id="cabecalho_main_esq">
                        <nav class="navegacao">
                        </nav> 
                    </div> 
                    <div id="rodape_main_esq">
                        <nav class="navegacao">
                            <div><a href= "s_servicos.php">Voltar</a></div>
                        </nav> 
                    </div> 
                </div>
                <div id="main_dir">
                    <form id="cad_servico_form" action="">
                        <div class="justify_center">
                            <label for="Nome_consulta">Consultar serviço pelo código:  </label>
                            <input type="text" id="id_nome_consulta" name="nome_cliente_consulta" placeholder="Insira o código do cliente">
                        </div>
                        <div class="justify_center">
                            <input type="button" value="Consultar">
                        </div>
                        <div class="justify_center">
                            <label for="Nome">Insira o nome do Cliente:  </label>
                            <input type="text" id="id_nome" name="nome_cliente">
                        </div>
                        <div class="justify_center">
                            <label for="Telefone">Insira o telefonedo Cliente: </label>
                            <input type="text" id="id_telefone" name="telefone_celular">
                        </div>
                        <div class="justify_center">
                            <label for="datdevol">Data de entrega: </label>
                            <input type="text" id="id_datdev" name="datdev">
                        </div>
                        <div class="justify_center">
                            <label for="Cidade">Descrição do serviço: </label>
                            <input type="text" id="id_descr_serv" name="descr_serv">
                        </div>
                        <div class="justify_center">
                            <label for="Orcamento">Valor de orçamento estimado: </label>
                            <input type="text" id="id_orcamento" name="orcamento_serv">
                        </div>
                        <div class="justify_tables">
                            <div id="cad_servicos">
                                <p>Pesquisar peça:</p>
                                <input type="text" id="id_datdev" name="datdev">
                                <p>Quantidade:</p>
                                <input type="text" id="id_datdev" name="datdev">
                                <p>(Marque a check box da peça que gostaria de selecionar e adicione ao serviço clicando no botão "adicionar")</p>
                                <table>
                                    <tr>
                                        <th>Check</th>
                                        <th>Descrição</th>

                                    </tr>
                                    <div> 
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Griffin</td>
                                        </tr>

                                    </div>
                                    
                                </table>
                                <input type="button" value="Adicionar">
                            </div>
                        </div>
                        <div class= "justify_tables">
                            <div id="cad_servicos">
                                <h5>Peças vinculadas ao serviço</h5>
                                <p>(Marque a check box da peça que gostaria de retirar e clique no botão no fim da tabela)</p>
                                <table>
                                    <tr>
                                        <th>Check</th>
                                        <th>Peça</th>
                                        <th>Quantidade</th>
                                    </tr>
                                    <div> 
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Manopla</td>
                                            <td>12</td>
                                        </tr>
                                        
                                    </div>
                                </table>
                                <input type="button" value="Remover">
                            </div>
                        </div>
                        <div class="justify_center">
                            <input type="submit" value="Atualizar">
                            <input type="submit" value="Finalizar">
                        </div>
                    </form>
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
