<?= require_once("Dependencias.php");
    require_once("Dados.php");
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Marmitas Dona Rita</title>
</head>
<body>
   <header id="cabecalho">
      <h1>Seja bem vindo!</h1>
      <h2>Venha fazer parte das pessoas que compram as marmitas da dona Rita<h2>
         <small>A melhor marmita da região!</small>
   </header>
   <br><br><br>
   <h3>Cardápio</h3>
   <br><br>

   
   <div id="Principal">
      <div id="Marmitas">
         <img src="salada.jpg" alt="">
         <h4><?php echo $marmitas[0]["NOME"]; ?></h4>
         <hr>
            <h5> Tamanho: <?php echo $marmitas[0]["TAMANHO"]; ?></h5>
            <h5> Preço: <?php echo $marmitas[0]["PRECO"]; ?></h5>
            <button class="btn btn-default text-dark bg-white" value="<?= $marmitas[0]["ID"] ?>"><a href="MarmitaSalada.php">Ver mais</a></button>
      </div>
      
      
      <div id="Marmitas">
      <img src="frango.jpg" alt="">
      <h4><?php echo $marmitas[1]["NOME"]; ?></h4>
      <hr>
         <h5> Tamanho: <?php echo $marmitas[1]["TAMANHO"]; ?></h5>
         <h5> Preço: <?php echo $marmitas[1]["PRECO"]; ?></h5>
         <button class="btn btn-default text-dark bg-white" value="<?= $marmitas[1]["ID"] ?>"><a href="MarmitaFrango.php">Ver mais</a></button>
      </div>

      <div id="Marmitas">
      <img src="carne.jpg" alt="">
      <h4><?php echo $marmitas[2]["NOME"]; ?></h4>
      <hr>
         <h5> Tamanho: <?php echo $marmitas[2]["TAMANHO"]; ?></h5>
         <h5> Preço: <?php echo $marmitas[2]["PRECO"]; ?></h5>
         <button class="btn btn-default text-dark bg-white" value="<?= $marmitas[2]["ID"] ?>"><a href="MarmitaCarne.php">Ver mais</a></button>
      </div>

      <div id="Marmitas">
         <img src="linguica.jpg" alt="">
         <h4><?php echo $marmitas[3]["NOME"]; ?></h4>
         <hr>
         <h5> Tamanho: <?php echo $marmitas[3]["TAMANHO"]; ?></h5>
         <h5> Preço: <?php echo $marmitas[3]["PRECO"]; ?></h5>
         <button class="btn btn-default text-dark bg-white" value="<?= $marmitas[3]["ID"] ?>"><a href="MarmitaLinguica.php">Ver mais</a></button>
      </div>

      <div id="Marmitas">
      <img src="natural.jpg" alt="">
      <h4><?php echo $marmitas[4]["NOME"]; ?></h4>
      <hr>
         <h5> Tamanho: <?php echo $marmitas[4]["TAMANHO"]; ?></h5>
         <h5> Preço: <?php echo $marmitas[4]["PRECO"]; ?></h5>
         <button class="btn btn-default text-dark bg-white" value="<?= $marmitas[4]["ID"] ?>"><a href="MarmitaNatural.php">Ver mais</a></button>
      </div>

      <div id="Marmitas">
      <img src="tudao.jpg" alt="">
      <h4><?php echo $marmitas[5]["NOME"]; ?></h4>
      <hr>
         <h5> Tamanho: <?php echo $marmitas[5]["TAMANHO"]; ?></h5>
         <h5> Preço: <?php echo $marmitas[5]["PRECO"]; ?></h5>
         <button class="btn btn-default text-dark bg-white" value="<?= $marmitas[5]["ID"] ?>"><a href="MarmitaTudao.php">Ver mais</a></button>
      </div>
      
      <div id="Marmitas">
         <img src="elvis.jpg" alt="">
         <h4><?php echo $marmitas[6]["NOME"]; ?></h4>
         <hr>
         <h5> Tamanho: <?php echo $marmitas[6]["TAMANHO"]; ?></h5>
         <h5> Preço: <?php echo $marmitas[6]["PRECO"]; ?></h5>
         <button class="btn btn-default text-dark bg-white" value="<?= $marmitas[6]["ID"] ?>"><a href="MarmitaElvis.php">Ver mais</a></button>
      </div>

      <div id="Marmitas">
      <img src="completa.jpg" alt="">
      <h4><?php echo $marmitas[7]["NOME"]; ?></h4>
      <hr>
         <h5> Tamanho: <?php echo $marmitas[7]["TAMANHO"]; ?></h5>
         <h5> Preço: <?php echo $marmitas[7]["PRECO"]; ?></h5>
         <button class="btn btn-default text-dark bg-white" value="<?= $marmitas[7]["ID"] ?>"><a href="MarmitaCompleta.php">Ver mais</a></button>
      </div>
   </div>
   <br>
   <table class="table table-striped table-hover table-dark">
   <thead>
      <tr>
         <th>Contatos</th>
         <th>E-mail</th>
      </tr>
   </thead>
   <tbody class="text-white">
      <tr>
         <td>(55) 5555-5555</td>
         <td>Rita2022@gmail.com</td>
      </tr>
   </tbody>
   </table>

   
   <footer id="Rodape">
      <p>© Copyright 2022 | Maycon Silva Oliveira</p>
   </footer>
</body>
</html>