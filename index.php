<?php

if(isset($_POST['name'])){
$server ="localhost";
$username ="root";
$password = "";
 
  $con =mysqli_connect($server,$username,$password);

 if(!$con){
    die("connection to this database failed.mysqli_connect()");

 }
//  echo "Thanks for submitting";
 @$name  =$_POST['name'];
 @$dept =$_POST['dept'];
 @$degree =$_POST['degree'];
 @$gender =$_POST['gender'];
 @$phonenum =$_POST['phonenum'];
 @$email =$_POST['email'];
 @$queries =$_POST['queries'];
 $sql = "INSERT INTO`us_tripform`. `tripus` ( `name`, `dept`, `degree`, `gender`, `phone num`, `email`, `queries`, `date`) VALUES ('$name', '$dept', '$degree', '$gender', '$phonenum', '$email', '$queries', current_timestamp());";
 
 if($con->query($sql)== true){
  $insert = true;

 }
 else{
  echo"eroor:$sql <br> $con->error";

 }
 $con->close();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="download__3_-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <title>GNDU Trip form</title>
</head>
<body><img  class="img"  src="gndy3.jpg" alt="gndu" >
    <div class="container">
        <h1>Welcome to GNDU,Amritsar Us Trip form </h1>
        <p>Enter your detail to conform your submission
            <br><b>Warning: All information should be right & couples are not allowed</b>
        </p>
        <?php
        // if($insert == true){


        //  echo "<p id='thanks'>Thanks for submitting your form We are happy to see you for joining us trip</p>";}
            ?>
<!-- get method is not secure method -->

        <form action="index.php" method="post">
        <input type="text" id="name " name="name" placeholder="Enter your name ">
        <input type="text" id="Departmentname" name="dept" placeholder="Department Name ">
        <input type="text" id="Degree" name="degree" placeholder="Enter your Degree ">
        <input type="text" id="Gender" name="gender" placeholder="Gender ">
        <input type="text" id="Phonenumber" name="phonenum" placeholder="Phone number ">
        <input type="text" id="E-mail" name="email" placeholder="Enter your E-mail ">
        <textarea name="queries" id="more" cols="30" rows="10" placeholder="Ask any queries"></textarea>
         <button class="btn">Submit</buttton>
         <!-- <button class="btn">Reset</button> -->
        
         </form>
        

    </div>

</body>
<script src="script.js"></script>

</html>