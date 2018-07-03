<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
    <body>
        <?php
            require_once 'conexao.php';
            $conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
            $dados = array('cod_livro' => 01, 'nome_livro' => 'livro exemplo 03', 'desc_livro' => 'Livro de exemplo');
            $insert = $conexao->update('livro', 'id_livro', 1, $dados);
            if($insert == true){
                echo 'alterado';
            }
        ?>
    </body>
</html>