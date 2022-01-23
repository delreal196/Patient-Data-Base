
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="patientinfo.css">
        <title></title>
    </head>
    <body><center>
        <div id="login_bin">
            <img id="logo" src="pics/ucm.png">
            <h1 id="title">PATIENT<br> REGISTRATION</h1><br>
        <div id="form">
            <table>
        <form action="insert.php" method="POST">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="username" required id="username" ></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age" required id="username" ></td>
            </tr>
            <tr>
                <td>Sex: </td>
                <td><input type="radio" name="gender" value="m" required>Male
                    <input type="radio" name="gender" value="f" required>Female</td>
            </tr>
            <tr>
                <td>COVID-19 Status:</td>
            <td><input type="radio" name="status" value="Positive"required >Positive
                <input type="radio" name="status" value="Negative"required >Negative
            </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"required id="username"></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="phonenum"required id="username"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
                
            </tr>
        </form>
                </table>
            <h2>- - - - - - - - - - - - - - - - - - - - - - </h2>
            <a href="patientdatabase.php" id="database"><div id="button">Database</div></a>
            <a href="index.php" id="database"><div id="button">Log Out</div></a> 
            
        </div>
        </div> 
    </center>
    </body>
</html>
