<?php
  echo "exemplo-01-<br>";
  $var=array(2,5,7,9,11);
   echo "$var[0] <br>";
   echo "$var[1] <br>";
   echo "$var[2] <br>";
   echo "$var[3] <br>";
   echo "$var[4] <br>";

   echo "exemplo-02-<br>";

 $var1=array("lipe","dias","tunega");
   echo "$var1[0] <br>";
   echo "$var1[1] <br>";
   echo "$var1[2] <br>";

   echo "exemplo-03-<br>";

 $var2=array("windows",10,2024,"v1.2021");
   echo "$var2[0] <br>";
   echo "$var2[1] <br>";
   echo "$var2[2] <br>";
   
   echo "exemplo-04-<br>";

 $var3=array("arthur"=>30,"luna"=>20,"yasmin"=>18);
   echo "$var3[arthur] <br>";
   echo "$var3[luna] <br>";
   echo "$var3[yasmin] <br>";

   echo "exemplo-05<br>";

 $num=array(2=>7,3=>8,9=>5); 
   $num[1]=4;
   echo "$num[2] <br>";
   echo "$num[3] <br>";
   echo "$num[9] <br>";
   echo "$num[1] <br>";
   $num[8]=40;
   echo "$num[8] <br>";
   echo "$num[9] <br>";

   echo "exemplo função count <br>";

   $num=array("x",3,1,4,5,6,7,"duda");
   $int=count($num  );
   echo "a resposta é " .$int;
   

?>