
<?php
$Name= $_POST["Name"];
$Email= $_POST["Email"];
$Phone= $_POST["Phone"];
$Password= $_POST["Password"];


$servername="localhost";
$username="root";
$password="10121995";
$name_Data="dbweb";

$connect = new mysqli($servername,$username,$password,$name_Data);

if($connect->connect_error){
die("Not Conect Data Base :(".$connect->connect_error);
}
else{
	echo" '<h1> All Good Connect   :)</h1> ' "."<br>";
$sql="INSERT INTO userinfo (Name , Email ,Phone, Password  )VALUES('$Name','$Email', '$Phone','$Password' )";

if($connect ->multi_query($sql)==TRUE){
echo " '<h1>Data INSERT  :)</h1>' ";
}

else{
	echo " Error :" .$sql. "<br>" .$connect -> error;
}
$connect->close;
}
?>
<html>
<head>
<style>
}
body{
	background:url("912edff52dd748e4cd748e17d9e934d7.jpg") no-repeat ;
	background-size:cover;
	background-position:center;
}
h1
{
	color:white;
	
	text-align:center;
	margin-top:20%;
	font-family:courier;
	
	 text-shadow: 1px 1px 2px black, 0 0 25px rgb(194,117,1), 0 0 5px darkblue;
}
</style>
</head>
<body>
</body>
</html>
