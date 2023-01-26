<?php
require_once('config.php');

    ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>ADMING PAGE</title>

        <style media="screen">

        table{
          border-collapse: collapse;
          margin: 25px 0;
          font-size: 0.9em;
          min-width: 400px;
        }
        table th{
          background-color: lightblue;
          color: white;
          text-align: left;
          font-weight: bold;
          padding: 12px 15px;
        }
        table td{
          padding: 12px 15px;
        }
        table tbody tr{
          border-bottom: 1px solid #dddddd;
        }
        table tbody tr:nth-of-type(even){
          background-color: #f3f3f3;
        }
        table tbody tr:nth-of-type(odd){
          background-color: white;
        }

        table tbody tr:last-of-type {
          border-bottom: 2px solid lightblue;
        }

        body{
          background-color: #A5C6AE;
        }
        input{
          width: 20%;
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
          <h1>Admin Page</h1>
          <form action="adminpage.php" method="POST">
            <input type="text"  placeholder="Search title" class="form-control" name="title">
            <button type="submit" class="btn btn-primary">Filter</button>

          </form>

          <br>
         <table>

           <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Surname</th>
             <th>Email</th>
             <th>Phone Number</th>
             <th>Delete</th>
             <th>Edit</th>
           </tr>

         <?php

         if (isset($_POST['title'])) {
           $title = '%' . $_POST['title'] . '%';
           $sql1 = "select * from users where id like \"" . $title ."\" or firstname like \"". $title ."\" or lastname like \"". $title ."\"or email like \"". $title ."\"";
           $result1 = $db->query($sql1);
           while ($row = $result1->fetch()) {
               $id = $row['id']
             ?>


             <tr>
               <td style="text-align: center;"><?php echo $row['id']; ?></td>
               <td style="text-align: center;"><?php echo $row['firstname']; ?></td>
               <td style="text-align: center;"><?php echo $row['lastname']; ?></td>
               <td style="text-align: center;"><?php echo $row['email']; ?></td>
               <td style="text-align: center;"><?php echo $row['phonenumber']; ?></td>
               <td><button><a href="adminpage.php?deleteid=<?php echo $id; ?>">Delete</button></td>
               <td><button><a href="edit.php?updateid=<?php echo $id; ?>">Edit</button></td>
             </tr>


         <?php }
        } else{

          $sql = "SELECT * FROM users";
          $result = $db->query($sql);
          while ($row = $result->fetch()) {
            $id = $row['id']?>
             <tr>
               <td style="text-align: center;"><?php echo $row['id']; ?></td>
               <td style="text-align: center;"><?php echo $row['firstname']; ?></td>
               <td style="text-align: center;"><?php echo $row['lastname']; ?></td>
               <td style="text-align: center;"><?php echo $row['email']; ?></td>
               <td style="text-align: center;"><?php echo $row['phonenumber']; ?></td>
               <td><button><a href="adminpage.php?deleteid=<?php echo $id; ?>">Delete</button></td>
               <td><button><a href="edit.php?updateid=<?php echo $id; ?>">Edit</button></td>
             </tr>

           <?php }
         }?>

         <?php if (isset($_GET['deleteid'])) {
           $id = $_GET['deleteid'];

           $sql="delete from users where id=$id";
           $stmtinsert = $db->prepare($sql);
           $result = $stmtinsert->execute([$id]);


           if ($result) {
             echo '<script type="text/javascript"> alert("Succesfully deleted")</script>';
           }
           else {
             echo '<script type="text/javascript"> alert("There were errors")</script>';
           }
         } ?>








         </table>
        </center>


      </body>
    </html>
