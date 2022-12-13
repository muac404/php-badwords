<?php 
$badWords = $_GET=["ipsum"];
$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit lorem ipsum dolor sit amet consectetur adipisicing elit";
// var_dump($badWords);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Badwords</title>
  </head>
  <body>
    <p><?php echo $paragrafo; ?></p>
    <h3>Lunghezza del paragrafo: <?php echo strlen($paragrafo)?> caratteri </h3>
  </body>
</html>
