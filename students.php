<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
      $students = [
         [
            'name' => 'Matteo',
            'last name' => 'Salvini',
            'grades' => [
               'matematica' => '2',
               'storia' => '0',
               'chimica' => '10'
            ]
         ],
         [
            'name' => 'Luigi',
            'last name' => 'Marattin',
            'grades' => [
               'matematica' => '8',
               'storia' => '6',
               'chimica' => '2'
            ]
         ],
         [
            'name' => 'Carlo',
            'last name' => 'Calenda',
            'grades' => [
               'matematica' => '9',
               'storia' => '9',
               'chimica' => '6'
            ]
         ]
      ];

      var_dump($students);
   ?>

   <h1>Studenti</h1>
   <ul>
      <?php for ($i=0; $i<count($students); $i++) { ?>
         <li>
            <?php echo 
                  $students[$i]['name'] . 
                  " " . 
                  $students[$i]['last name'] . 
                  ": " . 
                  (round((array_sum($students[$i]['grades']) / 3), 1))
            ?>
         </li>
      <?php } ?>
   </ul>
</body>
</html>