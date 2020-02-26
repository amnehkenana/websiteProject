<?php
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Phone=$_POST["Phone"];
$Password=$_POST["Password"];

$servername="localhost";
$usrname="root";
$password="10121995";
$dbname="dbweb";

$conn= new mysqli($servername,$usrname,$password,$dbname);

if($conn->connect_error)
	echo " '<h1>connection failed</h1> ' ";
else {
	
	$sql="SELECT * FROM userinfo WHERE  Email='$Email' AND Password='$Password' ";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
	
		$table="<table align='center'><tr>
	<th>Id</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Password</th></tr>";
	
		
		while($row=$result->fetch_assoc())
		{
			$table=$table."<tr>
			<td>".$row["Id"]."</td>
			<td>".$row["Name"]."</td>
			<td>".$row["Email"]."</td>
			<td>".$row["Phone"]."</td>
			<td>".$row["Password"]."</td></tr>";
		}
		$table=$table."</table>";
		echo $table;
		}
		
		else {
		echo " '<h1> NO Data Found  :(</h1>' " ;
		}

		
		$conn->close;
	}
?>

<html>
<head>
<style>
	table{
text-align:center;width:60%;height:20%;
border-collapse:collapse;

margin-top:13%;
font-size:20px;
font-family:vendara;
background-color: #f1dced;
opacity: 0.9;
}

th{
	color:#371832;
}
td{
	color:#823876;
}
th, td {
    border-bottom: 1px solid #ddd;
}
body{
	background-image: url("pic2.jpg");
	background-size:cover;
	background-position:center;
}

	 text-shadow: 1px 1px 2px black, 0 0 25px rgb(194,117,1), 0 0 5px darkblue;
}
</style>
<body >
</body>
</head>
</html>