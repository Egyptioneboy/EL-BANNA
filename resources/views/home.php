<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" 
  content="width=device-width, USER-scalable=00,initial-scale=1.0, minimum-scale=1.0"> 
  <meta 
       http-equiv="X-UA-Compatible"
       content="ie=edge"
  >
  <title>books</title>
</head>
<body>
<?php
foreach ($books as $book){
    echo"<h1>".$book['title']."</h1>";
    echo"<p>".$book['description']."</p>";
}

?>
</body>
</html>