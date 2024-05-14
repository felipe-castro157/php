<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays com laços</title>
    <link rel="stylesheet" href="../aula-07-05/styles.css">
</head>
<body>
    <h1> Array-laços</h1>
    
    <h2> Array: definiçao Explicita (sem chave):
    </h2>

    <pre>
    <?php
      $var = array(1,2,3,4);

      echo "impressao 1 por 1";
      echo $var[0];
      echo $var[1];
      echo $var[2];
      echo $var[3];
      
      ?>
    </pre>

    <h2>impressao com for:</h2>

    <pre></pre>
    <?php
    $var1 = array("lipera","jakson","arthur","bianca");
    
    foreach($var1 as $dados){
    echo $dados;
    echo "<br>";    
    }
    ?>

    
</body>
</html>