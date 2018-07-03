<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select</title>
</head>
<body>
    <?php
        require_once ('conexao.php');
        $conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
        $select = $conexao->select('livro');
        foreach ($select as $livro) {
            echo '================'.'</br>';
            echo 'Id = '.$livro['id_livro'].'</br>';
            echo 'Codigo = '.$livro['cod_livro'].'</br>';
            echo 'Nome = '.$livro['nome_livro'].'</br>';
            echo 'Descrição = '.$livro['desc_livro'].'</br>';
            echo '================'.'</br>';
        }
    ?>
</body>
</html>