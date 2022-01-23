<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="indexcss.css">
    </head>
    
    <body>
        
        <div  id="login_bin">
            
            <img id="logo" src="pics/942.png"> 
            <h1 id="title">UCHICAGO<br>
                MEDICINE<br>
                COIVD-19<br>
                RESPONSE</h1>
                
            <form id="form" action="registration.php.html">
                    <input type="text" name="username" id="username" class="login-form-field" placeholder="ID"><br>
                    <input type="password" name="password" id="password" class="login-form-field" placeholder="Password"><br>
                    <button type="button" onclick="login()">Login</button>
                </form>
            
        </div>
        <script src="login.js"></script>  
    </body>
</html>
