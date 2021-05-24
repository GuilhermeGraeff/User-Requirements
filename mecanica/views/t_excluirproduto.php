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
                <img id="logo_menuprincipal" src="../assets/images/logo_estoque.png" alt="Armazém com caixas dispostas em sua frente">
            </div>
            <div id="tela">
                <h1>EXCLUIR PRODUTO</h1>
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
                            <div><a href= "t_estoque.php">Voltar</a></div>
                        </nav> 
                    </div> 
                </div>
                <div id="main_dir">
                    <form id="cad_servico_form" action="td_excluirproduto.php" method="POST">
                        <div class="justify_center">
                            <label for="Nome_consulta">Digite o código do produto que deseja excluir:  </label>
                            <input type="text" id="id_nome_consulta" name="codPecaP">
                        </div>
                        <div class="justify_center">
                            <input type="submit" value="Confirmar">
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
