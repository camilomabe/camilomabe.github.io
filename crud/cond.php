<?php 
   require_once('config.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
      table {
  width:80%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
         #t01 tr:nth-child(even) {
         background-color: #eee;
         }
         #t01 tr:nth-child(odd) {
         background-color: #fff;
         }
         #t01 th {
         background-color: black;
         color: white;
         }
      </style>
   </head>
   <body>
      <?php
         // Create connection
         $conn = new mysqli($servername, $username, $password, $db);
         // Check connection
         if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
         }
         $sql = "SELECT * FROM users";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
           // output data of each row
           echo "<table id='t01'>
           <tr>
             <th>Id</th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Email</th>
             <th>Telefono</th>
             <th>Password</th>
             <th>Eliminar</th>
             <th>Borrar</th>
           </tr>";
           while($row = $result->fetch_assoc()) {
             echo  "
             <tr>
             <td>".$row["id"]."</td>
             <td>". $row["firstname"]."</td>
             <td>".$row["lastname"]."</td>
             <td>".$row["email"]."</td>
             <td>".$row["phonenumber"]."</td>
             <td>".$row["passwor"]."</td>
             <td>Delete</td>
             <td>Modify</td>
             <tr>";
           }
         } else {
           echo "0 results";
         }
         echo '</table>';
         $conn->close();
         ?>
   </body>
</html>