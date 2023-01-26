<?php
require_once('config.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>UNSUBSCRIBE</title>

    <style media="screen">
      body{
        background-color: #A5C6AE;
      }
      input{
        width: 40%;
        height: 5%;
        border: 1px;
        border-radius: 05px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px grey;

      }
    </style>
  </head>
  <body>

    <center>

      <h1>UNSUBSCRIBE</h1>

      <form action="delete.php" method="POST">
        <input type="text" name="email" placeholder="Enter Email" required><br>
        <input type="submit" name="delete" value="Unsubscribe"><br>
      </form>
    </center>

  </body>
</html>

<?php
//$connection = mysqli_connect("localhost","root","");
//$db = mysqli_select_db($connection, 'useraccounts');

if (isset($_POST['delete'])) {
  $email = $_POST['email'];

  $sql = "delete from users where email = \"" . $_POST['email'] ."\"";

  //$sql = "DELETE FROM 'users' WHERE email=$email ";
  //$querey_run = mysqli_query($connection, $sql);

  $stmtinsert = $db->prepare($sql);
  $result = $stmtinsert->execute([$email]);


  if ($result) {
    echo '<script type="text/javascript"> alert("Succesfully unsubcribred")</script>';
  }else {
    echo '<script type="text/javascript"> alert("There were errors")</script>';
  }

}










 ?>
