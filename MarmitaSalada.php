<?= require_once("Dependencias.php");
    require_once("Dados.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<header id="cabecalho">
      <h1>Marmita com Salada</h1>
      <hr>
      <h2>A melhor marmita da região!</h2>
   </header>

   <br><br><br>

   <h3>Dados da marmita</h3>
   
   <br><br>
<div id="container">
   <div id="PrincipalM">
      <div id="Alinhar">
         <img id="salada" src="salada.jpg" alt="">
         <br>
         <h4><?php echo $marmitas[0]["NOME"]; ?></h4>
         </div>
      <hr>
         <h5> Tamanho: <?php echo $marmitas[0]["TAMANHO"]; ?></h5>
         <h5> Preço: <?php echo $marmitas[0]["PRECO"]; ?></h5>
         <h5> ingredientes: <?php echo $marmitas[0]["INGREDIENTES"]; ?></h5>
         <a class="btn btn-success" href="index.php">Voltar</a>
   </div>
</div>


<br><br><br>
   <footer id="Rodape">
      <p>© Copyright 2022 | Maycon Silva Oliveira</p>
   </footer>
</body>
</html>