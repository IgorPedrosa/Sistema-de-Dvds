               
               <?php

               include_once('conexao.php');
               
               if ( isset($_POST['submit'])) {
               
                   $nome = $_POST ['nome'];
                   $cpf = $_POST ['cpf'];
                   $email = $_POST ['email'];
                   $telefone = $_POST ['telefone'];
                   $senha = $_POST ['senha'];
                   $confirme_senha = $_POST ['confirme_senha'];
                   
                   $sql = "INSERT INTO usuario
                       (nome, cpf, email, telefone, senha, confirme_senha)
                       VALUES
                       ('$nome', '$cpf', '$email', '$telefone', '$senha', '$confirme_senha')";
                   
                       $resultado = mysqli_query ($conexao, $sql);
               
                   if ($resultado) {
                       mensagem ("$nome cadastrado com sucesso!", "sucess");
                   }
                   else {
                       mensagem ("não foi possível cadastrar o produto $nome", 'danger');
                   }
               }
               
               ?>
               <!DOCTYPE html>
               <html lang="pt-BR">
               <head>
                   <style>
               
               label{
               color: white;
               }
               h1{
               color: white;
               }
               body{
               background-color: #084D6E !important;
                   }
               .btn {
                   margin-top: 8px;
                   }
                   </style>
                   <meta charset="UTF-8" />
                   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                   <link rel="stylesheet" href="css/bootstrap.min.css"> 
                   <title>Sistema de Loja de CDs</title>
               </head>
               <body>
               <form action="" method="POST">
                   <div class="container">
               
               <h1 class="text-center">CADASTRO DE USUÁRIO</h1>
               
                   <div>
                   <div class="row">
                       <div class="col">
                       <label>Nome Completo</label>
               <input type="text" class="form-control" placeholder="Informe seu nome" name="nome"/>
                   </div>
                       <div class="col">
                       <label>CPF</label>
                       <input type="text" class="form-control" placeholder="Informe seu CPF" name="cpf">
                       </div>
               
                   </div>
               
                   <div class="row">
                       <div class="col">
                       <label>Email</label>
                       <input type="text" class="form-control" placeholder="Informe seu Email" name="email"/>
                       </div>
                       <div class="col">
                           <label>Telefone</label>
                           <input type="text" class="form-control" placeholder="Informe o número de telefone" name="telefone">
                       </div>
               
                   </div>
               
               <div class="row">
               <div class="col">
               <label>Senha</label>
               <input type="text" class="form-control" placeholder="Digite sua senha" name="senha">
               
               </div>
               
               <div class="col">
                   <label>Confirme a Senha</label>
                   <input type="text" class="form-control" placeholder="Confirme sua senha" name="confirme_senha">
                   
               </div>
               
                   <div class="row">
                       <div class="col">
                       <input type="submit" class="btn btn-danger" value="Cadastrar" name="submit">
               
                       </div>
                   </div>
               
                   </div>
               </div>
               </form>
                   <script src="js/bootstrap.min.js"></script>
               </body>
               </html>