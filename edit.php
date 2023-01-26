<?php
require_once('config.php');
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EDIT USER</title>

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

    <div>

      <?php

      $id = $_GET['updateid'];



      if (isset($_POST['create'])) {


        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];

        $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',phonenumber='$phonenumber' WHERE id='$id'";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber]);

        if ($result) {
          echo '<script type="text/javascript"> alert("Succesfully saved")</script>';
        }else {
          echo '<script type="text/javascript"> alert("There were errors while saving the data")</script>';
        }

      }



       ?>

    </div>


    <div>

      <form action="edit.php?updateid=<?php echo $id; ?>" method="post">

        <center>

        <div class="container">
          <h1>EDIT</h1>


          <input type="text" name="firstname" placeholder="First Name" required><br>


          <input type="text" name="lastname" placeholder="Last Name" required><br>


          <input type="text" name="email" placeholder="Email Address" required><br>


          <input type="text" name="phonenumber" placeholder="Phone Number" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required><br>

          <input type="submit" name="create" placeholder="Enter Email" value="EDIT">
        </div>

      </center>

      </form>

    </div>
  </body>
</html>
