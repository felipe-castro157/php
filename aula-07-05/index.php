<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica de Progamação</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <h2>array: definiçao explicita</h2>
 <pre>
  <?php
         $var [0]= "desenvolvimento";
         $var [1]= "web";
         $var [2]= "II";

         echo "[for]:";
         for ($a=0; $a<count ($var); $a++){
            echo "$var[$a]";
         }

         $var1 = array("felipe", "livia", "pedro", "luna", "leticia", "amanda", "joao", "bianca");
         for ($a=0; $a<count ($var1); $a++){
            echo "<br>$var1[$a]";
         }
       ?>
    </pre>
    <h2>array: definiçao explicita - exemplo 2</h2>
    <pre>
    <?php
        

         $var = array(1, 2, 3, 4);

         for ($a=0; $a<count ($var1); $a++){
            echo "<br>$var1[$a]";
         }
       ?>
       </pre>
         
       <pre>
          <?php

         $var = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
         
         echo count ($var);   

         for ($i=0; $i<=8;  $i++){
            echo "<br>$var[$i] ";
         }

       ?>

       </pre>

       <pre>
          <?php

         $var1 = array("felipe", "livia", "pedro", "luna", "leticia", "amanda", "joao", "bianca"); 

         for ($i=0; $i<(count ($var1));  $i++){
         }

       ?>

       </pre>

       <pre>
          <?php

         $var = array("felipe"=>9.9 , "leticia"=>5 , "luna"=>9 ); 

         foreach ($var as $chave => $valor){
            if ($valor>6){
            echo "alunos aprovados";
            echo "o aluno: $chave <br>";
            echo "obteve a nota : $valor <br>";
          } else if($valor<6 && $valor >= 4){
            echo "alunos recuperacao";
            echo "o aluno: $chave <br>";
            echo "obteve a nota : $valor <br>";
          } else {
            echo "alunos recuperacao";
            echo "o aluno: $chave <br>";
          }
         }

       ?>

       </pre>
       
</body>
</html>