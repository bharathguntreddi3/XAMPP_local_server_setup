<?php     
session_start();    
if(!isset($_SESSION["sess_user"])){    
    header("location:login.php");    
} else {    
?>    
<!doctype html>    
<html>    
<head>    
<title>Welcome</title>    
    <style>     
        body{    
                
    margin-top: 110px;    
    margin-bottom: 110px;    
    margin-right: 160px;    
    margin-left: 90px;    
    background-color: lightcyan;    
    color: palevioletred;    
    font-family: verdana;    
    font-size: 100%    
        
        }    
            h2 {    
    color: darkred;    
    font-family: indigo;    
    font-size: 100%;    
}    
        h1 {    
    color: darkred;    
    font-family: indigo;    
    font-size: 100%;    
}    
                
            
    </style>    
</head>    
<body>    
    <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP IN XAMPP</h1></center>    
        
<h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>    
<p>    
WE DID IT. SUCCESSFULLY CREATED REGISTRATION AND LOGIN FORM USING PHP IN XAMPP    
</p>    
</body>    
</html>    
<?php    
}    
?>    