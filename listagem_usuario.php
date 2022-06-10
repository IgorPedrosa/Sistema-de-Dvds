<?php

include_once("conexao.php") ;

$sql = "SELECT * FROM usuario";

$dados = mysqli_query ($conexao, $sql);

?>
  
  <!DOCTYPE html>
    <html lang="pt-BR">
    <head>

    <style>

    h1{
        color: black;
    }

    body {
    background-color: #e3f2fd !important;
    }

    .botao {
    margin-top: 16px !important;
    }


    th{
        text-align: center !important;
    }

    </style>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>Sistema de Loja de CDs</title>
        <a href="icon"></a>
    </head>
    <body>

        <div class="container">

            <a href="http://localhost/" class="btn btn-light botao ONCLICK = windows.history.back();" >
            <i class="bi bi-arrow-left-square-fill"></i>
        </a>

    <h1 class="text-center .margin-h1">Listagem de Usuários</h1>

    <nav class="navbar">
  <div class="container-fluid" style="background-color: #e3f2fd">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Procurar</button>
    </form>
  </div>
</nav>

    <table class="table table-info table-hover table-striped table-bordered bordar-tabela" >

    <thead>

    <tr  class="table  table-dark table-striped ">

        <th>nome</th>
        <th>cpf</th>
        <th>email</th>
        <th>telefone</th>
        <th>senha</th>
        <th>confirme senha</th>
        <th>Ações</th>

    </tr>

    </thead>
    <tbody  class="table  table-dark table-striped text-center">

    <?php

while ( $linha = mysqli_fetch_assoc($dados) ) {
    
    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $email = $linha['email'];
    $telefone = $linha['telefone'];
    $senha = $linha['senha'];
    $confirmeSenha = $linha['confirme_senha'];

    echo "<tr>
    <td>$nome</td>
    <td>$cpf</td>
    <td>$email</td>
    <td>$telefone</td>
    <td>$senha</td>
    <td>$confirmeSenha</td>
    <td>
    <i class='bi-pencil'></i>  
    <a href'#'class data-bs-toggle='modal' data-bs-target='#exampleModal' onclick=" obterDados($codigo, $nome)"> <i class='bi-trash' ></i>  </a>  
    </td>
    </tr>";
}

?>
    <tr class="text-center">

    <td>Igor</td>
    <td>055.444.523-12</td>
    <td>Igor@gmail.com</td>
    <td>998456123</td>
    <td>123abc</td>
    <td>123abc</td>
    <td>
        <i class='bi-pencil'></i>
	    <i class='bi-trash' ></i>
    </td>

    </tr>

    <tr class="text-center">

        <td>Alison</td>
        <td>055.444.523-12</td>
        <td>Alison@gmail.com</td>
        <td>998456123</td>
        <td>123abc</td>
        <td>123abc</td>
        <td>
        <i class='bi-pencil'></i>
	    <i class='bi-trash' ></i>
        </td>

    </tr>

    <tr class="text-center">

        <td>Larissa</td>
        <td>055.444.523-12</td>
        <td>Larissa@gmail.com</td>
        <td>998456123</td>
        <td>123abc</td>
        <td>123abc</td>
        <td>
        <i class='bi-pencil'></i>
	    <i class='bi-trash' ></i>
        </td>

    </tr>

    <tr class="text-center">

        <td>Levi</td>
        <td>055.444.523-12</td>
        <td>Levi@gmail.com</td>
        <td>998456123</td>
        <td>123abc</td>
        <td>123abc</td>
        <td>
        <i class='bi-pencil'></i>
	    <i class='bi-trash' ></i>
        </td>
    </tr>

    <tr class="text-center">

        <td>Luana</td>
        <td>055.444.523-12</td>
        <td>Luana@gmail.com</td>
        <td>998456123</td>
        <td>123abc</td>
        <td>123abc</td>
        <td>
        <i class='bi-pencil'></i>
	    <i class='bi-trash' ></i>
        </td>

    </tr>

    </tbody>

    </table>   

    </div>
<!-- Modal criado -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Exclusão de Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="excluir.php"></form>
      <div class="modal-body">
        <p>Deseja excluir esse usuário ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <input type="text" name="codigo" id="codigo_pessoal" value="">
        <input type="submit" class="btn btn-danger" value="Sim">
      </div>
    </div>
  </div>  
</div>
        <script src="js/bootstrap.min.js">

          function obterDados(codigo, nome) {
                    document.getElementById('codigo_pessoal').value = codigo;
                    document.getElementById('nome_pessoa').innerHTML = nome; 
          }
        </script>
    </body>
    </html>S