<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Numbers</title>
</head>
<body>
   <h1>Numbers Array</h1>
   <?php 
      $numbers = [];
      
      while (count($numbers) < 15) {
         $randomNumber = rand(1,100);

         if (!in_array($randomNumber, $numbers)) {
            $numbers[] = $randomNumber;
         }
      }

      var_dump($numbers);
   ?>
</body>
</html>