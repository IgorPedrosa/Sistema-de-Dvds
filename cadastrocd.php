        <?php

            include_once('conexaocd.php');
            
            if ( isset($_POST['submit'] ) ) {
                
                $titulo = $_POST['titulo'];
                $disponibilidade = $_POST['disponibilidade'];
                $preco = str_replace(',', '.', $_POST['preco']);
                $direcao = $_POST['direcao'];
                $data_lancamento = $_POST['data_lancamento'];
                $genero = $_POST['genero'];
            
                $sql = "INSERT INTO cd
                            (titulo, disponibilidade, preco, direcao, data_lancamento, genero)
                        VALUES 
                            ('$titulo', '$disponibilidade', '$preco', '$direcao', '$data_lancamento', '$genero')";

                $resultado = mysqli_query($conexao, $sql);


                if ($resultado) {
                    mensagem("$titulo cadastrado com sucesso!", "success");
                } else {
                    mensagem("não foi possível cadastrar o produto $titulo", 'danger');
                }

            }

        ?>

        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <style>

                body{
        background-color: #084D6E !important;
        }

        label{
                    color:aliceblue;
                }
                h1{
                    color:aliceblue;
                }

        .btn{
            margin-top: 8px;
        }


            </style>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <title>Cadastro de CD's</title>
        </head>
        <body>
            <div class="container">
                <h1 class="text-center">Cadastro de CD's e DVD's</h1>

                <form action="" method="POST" >

                <div class="row">
                    <div class="col">
                        <label>Título</label>
                        <input type="text" class="form-control" placeholder="Escolha seu CD/DVD" name="titulo">

                    </div>
                    <div class="col">
                        <label>Disponibilidade</label>
                        <input type="date" class="form-control" name="disponibilidade">


                    </div>
                
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Preço</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" placeholder="0,00" name="preco">
                            </div>

                        </div>

                            <div class="col">
                                <label>Direção</label>
                                <input type="text" class="form-control" name="direcao">
                                </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <label>Data de lançamento</label>
                                <input type="date" class="form-control" name="data_lancamento">
                            </div>
                            <div class="col">
                                <label>Genêro</label>
                                <input type="text" class="form-control" place-holder="Informe o genêro" name="genero">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-dark" name="submit">
                            </div>
                        </div>
                        </form>
            </div>
            <script src="js/bootstrap.min.js"></script>
        </body>
        </html>