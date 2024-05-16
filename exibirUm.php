<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Exibir Usuário</title>
</head>
<body>
    <header>
        <h1> Exibir Usuários </h1>
    </header>
    <main>
        <form action="exibirUm.php" method="POST">
            <label for="buscar">
                Buscar matrícula:
                <input type="text" name="buscar">
            </label>
            <br>
            <input type="submit" value="Buscar">
                  
            <br>
            <br>
        </form>
        <a href="index.html"><button>Voltar</button></a>
    </main>


<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $buscar = $_POST["buscar"];
        //variaveis de arquivo
        $arqPath = "Usuarios.txt";
        
        if($arqPessoa = fopen($arqPath, "r") or die ("Arquivo não encontrado!")){
            while(!feof($arqPessoa)){
                $line = fgets($arqPessoa);
                $coluna = explode(";", $line); 

                if($coluna[0] == $buscar){
                    echo $line."<br>";
                }
            }
               
            fclose($arqPessoa);
        }
    }
?>



    <footer>Criado por Larissa Paiva 1920478300039 - 2022.1 - Faeterj-Rio</footer>
</body>
</html>
