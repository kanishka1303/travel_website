<?php
$insert = false;
if(isset($_POST['name'])){
    // set connection variables
   $server= "localhost";
   $username= "root";
   $password= "";
    
   //create a database connection
   $con = mysqli_connect($server, $username, $password);

//check for connection success
   if(!$con){
    die("connection to this data base failed due to".mysqli_connect_error());
    }
   // echo "success connecting to the db";

   //collect post variables
   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $desc = $_POST['desc'];
    
   $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
   //echo $sql;

   //Execute the query
   if($con->query($sql) == true){
   // echo "Successfully inserted";

   //Flag for successfil insertion
   $insert= true;
  }else{
    echo "ERROR: $sql <br> $conn->error";
  }
  //Close the database connection 
  $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.webp" alt="MANIT Bhopal">
    <div class="container">
        <h1>Welcome to MANIT Bhopal NYC Trip Form</h1>
        <p>Enter your details and submit this form to confirm your 
            participation in the trip</p>
            <?php
            if($insert == true){
            echo "<p class='submitMsg'>Thanks for submitting. We are happy to see you joining us for the NYC trip  </p>";
            }
            ?>
      <form action="index.php" method="post">
         <input type="text" name="name" id="name" placeholder="Enter your name"> 
         <input type="text" name="age" id="age" placeholder="Enter your age"> 
         <input type="text" name="gender" id="gender" placeholder="Enter your gender"> 
         <input type="email" name="email" id="email" placeholder="Enter your email">
         <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
         <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter and other information here"></textarea>
          <button class="btn">Submit</button>
          


      </form>

    </div>
    <script src="index.js"></script>
   
</body>
</html>