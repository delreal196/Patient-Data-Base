
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
