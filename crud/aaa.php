<?php 
   require_once('config.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User registration | PHP</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
   </head>
   <body>
      <div>
         <?php
            if(isset($_POST['create'])){
            $firstname      = $_POST['firstname'];
            $lastname       = $_POST['lastname'];
            $email          = $_POST['email'];
            $phonenumber    = $_POST['phonenumber'];
            $passwor        = $_POST['passwor'];
            
            $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, phonenumber, passwor) VALUES (:firstname, :lastname, :email, :phonenumber, :passwor)");
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phonenumber', $phonenumber);
            $stmt->bindParam(':passwor', $passwor);
            $stmt->execute();
            header('Location:index.php');
            }
            ?>
      </div>
      <div>
         <form action="registration.php" method="POST">
            <div class="container">
               <div class="row">
                  <div>
                     <div class="col-sem-3">
                        <h1>Registration</h1>
                        <p>Fill up the form with correct values</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>Firts Name</b></label>
                        <input class="form-control" type="text" name="firstname" required>
                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastname" required>
                        <label for="email"><b>Email</b></label>
                        <input class="form-control" type="email" name="email" required>
                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control" type="text" name="phonenumber" required>
                        <label for="passwor"><b>Password</b></label>
                        <input class="form-control" type="password" name="passwor" required>
                        <hr class="mb-3">
                        <center>
                           <table>
                             <tr>
                                <th><input class="btn btn-primary" type="submit" name="create" value="Sing Up"></th>
                                <th><a class="form-control" href="index.php">Consultar</a></th>
                             <tr>
                           </table>
                        </center> 
                        
               
                        

                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </body>
</html>