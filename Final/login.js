var people = [
    {
        username: "groupb", 
        password: "sxumacs2020"
    }
];

function login() {
    var username = document.getElementById("username").value
    var password = document.getElementById("password").value
    
    for(i = 0; i < people.length; i++){
        if(username = people[i].username && password == people[i].password){
            window.location.replace("registration.php");
        }
    }
}/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


