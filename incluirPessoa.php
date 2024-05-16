<?php
            
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $mat = $_POST["matricula"];
        $nome = $_POST["nome"];
        $funcao = $_POST["funcao"];
    
        
        //variaveis de arquivo
        $arqPath = "Usuarios.txt";
        $lTitulo = "Matrícula; Nome; Função";
        $lCont = "\n".$mat."; ".$nome."; ". $funcao;

        if(!file_exists($arqPath)){
            $arqProd = fopen($arqPessoa, "w");
            fwrite($arqPessoa, $lTitulo);
            fwrite($arqPessoa, $lCont);
            fclose($arqPessoa);
        }else{
            $arqPessoa = fopen($arqPath, "a");
            fwrite($arqPessoa, $lCont);
            fclose($arqPessoa);
        }
    }
?>



<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Incluir Usuários</title>
</head>
<body>
    <header>
        <h1>Usuários</h1>
    </header>
    <main>
        <form action="incluirPessoa.php" method="POST">
            <label for="matricula">
                Matrícula:
                <input type="text" name="matricula">
            </label>
            <label for="nome">
                Nome:
                <input type="text" name="nome">
            </label>
            <label for="funcao">
                Função:
                <input type="text" name="funcao">
            </label>
            <br>
            <input class="button" type="submit" value="Cadastrar">
        </form>
        <a href="index.html"><button>Voltar</button>

    </main>
    <footer>
        <span>Criado por Larissa Paiva 1920478300039 - 2022.1 - Faeterj-Rio</span>
    </footer>
</body>
</html>
