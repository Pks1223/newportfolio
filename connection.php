<?php
if (isset($_POST['name'])){
 
 $_SERVER = "localhost";
 $_username = "root";
 $_password = "root";
 $_databasename = "db";
//Connecting to database code.
 $connection = mysqli_connect("127.0.0.1", $_username, $_password,$_databasename);
 if ($connection) {
    echo("connection successful");
 }
 else {
      die("Connection failed to database." . mysqli_connect_error());
 }
 echo ("success connecting to the database.");
 
 //Your form input details 
 $name = $_POST['name'];
 $gmail = $_POST['gmail'];
 $message = $_POST['message'];
 
 $sql = "INSERT INTO `db`.`dbtable` ('name', 'email', 'message', 'date_time') VALUES ('$name','$gmail', '$message' , current_timestamp());";
 //echo $sql;  //For see output of input values.
 if ($connection->query($sql) == true) {
  //echo("Successfully inserted");
 }
 else {
  echo("ERROR: $sql <br> $connection->error");
 }
 $connection->close();
}
?>