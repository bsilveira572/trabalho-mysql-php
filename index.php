<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <?php
        require_once('conexao.php');
        $conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
        $dados = array('cod_livro' => '01', 'nome_livro' => 'livro exemplo 01', 'desc_livro'=> 'Livro de exemplo');
        $select = $conexao->insert('livros', $dados);
        if ($select == true) {
            echo('inserido');
        }
    ?>
</body>
</html>