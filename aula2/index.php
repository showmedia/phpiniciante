<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php

    //inclusão de arquivo do navegador
      include 'nav.php';  
/*     
    require 'nav.php';  */ 
    ?>

   <section>
   <div>
        <?php 
          //conteúdo da página
            echo 'Olá Mundo!';
        ?>
    </div>
   </section>

  

    <?php
        //inclusão de arquivo do footer
        include 'footer.php';
    ?>

 

    
</body>
</html>