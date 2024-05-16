<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Produtos</title>
</head>
<body>
    <header>
        <h1>Produtos</h1>
    </header>
    <main>
        <form action="alterarPessoa.php" method="POST">
            <label for="buscar">
                Buscar matrícula:
                <input type="text" name="buscar">
            </label>
            <br>

            <label for="matricula">
                Matrícula:
                <input type="text" name="matricula">
            </label>
            <label for="mome">
                Nome:
                <input type="text" name="nome">
            </label>
            <label for="funcao">
                Função:
                <input type="text" name="funcao">
            </label>
            <br>
            <input type="submit" value="Alterar">
        </form>
        <a href="index.html"><button>Voltar</button>

    </main>
    <footer>
        <span>Criado por Larissa Paiva 1920478300039 - 2022.1 - Faeterj-Rio</span>
    </footer>
</body>
</html>




<?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $mat = $_POST["matricula"];
            $nome = $_POST["nome"];
            $funcao = $_POST["funcao"];
            $buscar = $_POST["buscar"];
        

        //variaveis de arquivo
        $arqPath = fopen ("Usuarios.txt","r");
        $arqAux = fopen("PessoaSaida.txt", "w");

        while(!feof($arqPath)){
            $linha = fgets($arqPath);
            $coluna = explode(";", $linha);
            
            if($coluna[0] == $buscar){
                $linha = $mat."; ".$nome."; ".$funcao;
            }
            fwrite($arqAux, $linha);
            
        }
        fclose($arqPath);
        fclose($arqAux);



        $arqPath = fopen ("Usuarios.txt","w");
        $arqAux = fopen ("PessoaSaida.txt", "r");
        while(!feof($arqAux)){
            $linha = fgets($arqAux);
            fwrite($arqPath, $linha);
            
        }
        
        fclose($arqAux);
        unlink('C:\wamp64\www\3DAW - Larissa\AV1\PessoaSaida.txt');
        fclose($arqPath);

        
   // header('Location: exibirProduto.php');
    }
        
        
  
?>
