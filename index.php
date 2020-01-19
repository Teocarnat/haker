 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Wevdev</title>
</head>
<body>
   <form  action="index.php" method="get">
     Email:<input type="email" name="name" id="text" placeholder="Enter your email!!">
      <br>
      Password:<input type="password" placeholder="Enter your password!" name="pass">
     <br>
     <input type="submit" value="Submit" id="submit">
   </form>
   <br>
   <br>
    Your email is: <?php echo $_GET["name"];
    ?>
    <p>Look up to nav-bar to see *********!</p>
 </body>
</html>
