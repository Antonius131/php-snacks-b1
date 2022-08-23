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


   <h1>Paragraph</h1>
   <?php 
      $paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan in nisl nisi scelerisque eu ultrices vitae. Nunc consequat interdum varius sit amet. Facilisis gravida neque convallis a. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Ornare suspendisse sed nisi lacus. Nisl nunc mi ipsum faucibus vitae. Malesuada fames ac turpis egestas integer eget. Neque volutpat ac tincidunt vitae semper quis lectus nulla at. Cursus mattis molestie a iaculis at erat pellentesque. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. Proin sagittis nisl rhoncus mattis rhoncus urna. Pretium nibh ipsum consequat nisl vel pretium. Cras adipiscing enim eu turpis egestas pretium aenean pharetra. Porta nibh venenatis cras sed. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Ac ut consequat semper viverra nam libero. Cras tincidunt lobortis feugiat vivamus at augue eget arcu dictum.";

      $splittedParagraph = explode(".", $paragraph);
   ?>

   <?php for ($i=0; $i < count($splittedParagraph); $i++) { ?>
      <p>
         <?php
            echo $splittedParagraph[$i];
         ?>
      </p>
   <?php } ?>
</body>
</html>