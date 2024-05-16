<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Exibir Usuários</title>
</head>
<body>
    <header>
    <h1> Exibir Usuários </h1>
    </header>
    <main>
        <br>
        <a href="index.html"><button>Voltar</button></a>

        <br>
    </main>



<?php
        //variaveis de arquivo
        $arqPath = "Usuarios.txt";

        if($arqPessoa = fopen($arqPath, "r") or die ("Arquivo não encontrado!")){
            while(!feof($arqPessoa)){
                $line = fgets($arqPessoa);
                $coluna = explode(";", $line); 
                echo $coluna[0]." | ". $coluna[1]." | ".$coluna[2]."<br>";

    }
    fclose($arqPessoa);
}



?>

    <footer>Criado por Larissa Paiva 1920478300039 - 2022.1 - Faeterj-Rio</footer>
</body>
</html>