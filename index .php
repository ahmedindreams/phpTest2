<?php


$string = "foo"."\n"."bar";
echo nl2br($string);

// md5()	Calculates the MD5 hash of a string
// str_split()	Splits a string into an array
// trim()	Removes whitespace or other characters from both sides of a string

echo $_SERVER['HTTP_HOST'];

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

        $numbers = array( 12,45 ,10,25);

        //  $numbers[0] = 12;
        //  $numbers[1] = 45;
        //  $numbers[2] = 10;
        //  $numbers[3] = 25;
  
    echo array_sum($numbers);

    $average = array_sum($numbers)/count($numbers);
    echo $average;

   echo rsort($numbers);
   

   $txt = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);

   foreach($txt as $key => $value)
   {
     echo $key." =>". $value;
   }
   echo nl2br("\n") ;
   echo asort($txt);
   foreach($txt as $key => $value)
   {
     echo $key." =>". $value;
   }
   echo nl2br("\n") ;
   echo ksort($txt);
   foreach($txt as $key => $value)
   {
     echo $key." =>". $value;
   }
   echo nl2br("\n") ;
   echo arsort($txt);
   foreach($txt as $key => $value)
   {
     echo $key." =>". $value;
   }
   echo nl2br("\n") ;
   echo krsort($txt);
   foreach($txt as $key => $value)
   {
     echo $key." =>". $value;
   }
   
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
    
</body>
</html>