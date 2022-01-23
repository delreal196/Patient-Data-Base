<?php

$username = $_POST['username'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];

if(!empty($username) || !empty($age) || !empty($gender) || !empty($status) || !empty($email) || !empty($phonenum)){
     $host = "localhost";
     $dbUsername = "root";
     $dbPassword = "";
     $dbname = "patientlogin";
     
     $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
     
     if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error()); 
     }else{
         $SELECT = "SELECT email FROM users WHERE email = ? LIMIT 5"; 
         $INSERT = "INSERT INTO users (name, age, gender, status, email,phone) VALUES(?,?,?,?,?,?)";
         
         $stmt = $conn->prepare($SELECT);
         $stmt ->bind_param("s",$email);
         $stmt->execute();
         $stmt->bind_result($email);
         $stmt->store_result();
         $rnum= $stmt->num_rows;
         
         if($rnum==0){
             $stmt->close();
             
             $stmt = $conn->prepare($INSERT);
             $stmt->bind_param("sisssi",$username,$age,$gender,$status,
                     $email,$phonenum);
             $stmt->execute();
             echo "New patient added!";
         } else {
             
         }
         $stmt->close();
         $conn->close();
     }
} else {
    echo "All fields are required";
    die();
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="database.css">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>COVID-19 Status</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root","", "patientlogin");
            if($conn-> connect_error){
                die();
            }
            $sql = "SELECT name, age, gender, status,email,phone FROM users";
            $result = $conn ->query($sql);
            if($result->num_rows >0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>"
                            .$row["gender"]."</td><td>".$row["status"]."</td><td>"
                            .$row["email"]."</td><td>".$row["phone"]."</td></tr>";
                }
                echo "</table>";
                
            }
            else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
        <br>
        <a href="registration.php" id="database"><div id="button">back</div></a>
       
    </body>
</html>
