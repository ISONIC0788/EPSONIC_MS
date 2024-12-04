<!DOCTYPE html>
<?php
    require 'connect.php';
?>
<html lang = "eng">
    <head>
        <meta charset = "UTF-8" />
        <style>
            #content{
                background-color: #ffeecc;
                width:280px;
                height:110px;
                margin: 100px auto;
                padding:10px;
                border-radius:2px;
                -webkit-box-shadow:0px 0px 30px 3px #000;
            }
        </style>
    </head>
<body>
    <center><h2>Creating a Simple Login using Ajax/MySQLi Prepared Statement</h2></center>
    <div id = "content">    
        <form   method = "POST">
            <table> 
                <tr>
                    <td><label>Username:</label></td>
                    <td><input type = "text" name='username' id = "username"></td>
                </tr>   
                <tr>    
                    <td><label>Password:</label></td>
                    <td><input type = "password" name='password' id =  "password"></td>
                </tr>
                <tr>
                    <td colspan = "2"><br /></td>
                </tr>
                <tr>
                    <td colspan = "2"><button type = "submit" style = "width:100%;" id = "login">Login</button></td>
                </tr>
                <tr>
                    <td colspan = "2"><div id = "result"></div></td>
                </tr>
            </table>
        </form>
    </div>
</body> 
<script src = "jquery-3.1.1.js"></script>
<script src = "login.js"></script>
</html>