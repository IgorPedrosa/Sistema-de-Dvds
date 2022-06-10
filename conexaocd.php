    <?php

    $endereco="localhost";
    $usuario="root";
    $senha="";
    $bd="sistema_cds";
    $conexao=mysqli_connect($endereco, $usuario, $senha, $bd);

    if($conexao){
    return $conexao;
    }else {
    echo "<h1 style='color:red'>Error</h1>";
    }
    function mensagem($mensagem, $tipo){
        echo "<div class='alert alert' $tipo mensagem'role='alert'>$mensagem</div>";
    }

    ?>