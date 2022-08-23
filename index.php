<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Matches</title>
</head>
<body>
   <?php 
      $matches = [
         [
            'home' => 'Detroit Pistons',
            'away' => 'Golden State Warriors',
            'home points' => '88',
            'away points' => '121'
         ],
         [
            'home' => 'Los Angeles Lakers',
            'away' => 'Chicago Bulls',
            'home points' => '79',
            'away points' => '99'
         ],
         [
            'home' => 'New York Knicks',
            'away' => 'Cleveland Cavaliers',
            'home points' => '88',
            'away points' => '121'
         ],
         [
            'home' => 'San Antonio Spurs',
            'away' => 'Boston Celtics',
            'home points' => '88',
            'away points' => '121'
         ],
         [
            'home' => 'Miami Heat',
            'away' => 'Dallas Mavericks',
            'home points' => '88',
            'away points' => '121'
         ],
      ]
   ?>

   <h1>Matches</h1>

   <ul>
      <?php for($i=0; $i<count($matches); $i++) { ?>
         <li>
            <?php echo 
                     $matches[$i]['home'] . 
                     " - " . 
                     $matches[$i]['away'] . 
                     ": " .
                     $matches[$i]['home points'] .
                     " - " .
                     $matches[$i]['away points']
            ?>
         </li>
      <?php } ?>
   </ul>



   <hr>



   <h1>Access Form</h1>
   <form action="index.php" method="GET">
      <input type="text" name="name" placeholder="name">
      <input type="email" name="email" placeholder="email">
      <input type="text" name="age" placeholder="age">
      <button type="submit">submit</button>
   </form>

   <?php 
      $name = $_GET['name'];
      $email = $_GET['email'];
      $age = $_GET['age'];

      if ( (strlen($name) > 3) && ((strpos($email, ".")) && (strpos($email, "."))) && (is_numeric($age)) ) {
         echo "Accesso riuscito";
      } else {
         echo "Accesso negato";
      }
   ?>


   <hr>


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