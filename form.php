<html>
  <head>
    <title>form</title>
  </head>
  <body>
    <form action="" method="POST">
    <input type="text" name="name" placeholder="enter your name"><br>
    <input type="email" name="email"  placeholder="enter your  mail"><br>
    <input type="submit">
</form>
  </body>
  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo  "welcome" .$name ."your email id is ". $email;
    }
?>
</html>
