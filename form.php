<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form</title>
</head>
<body>
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
</body>
</html>