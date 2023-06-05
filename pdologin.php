<?php    
$server="localhost";
$uname="root";
$pwd="";
$db="task";

	$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];

	$query="select * from login where uname=:uname;";
	$stmt=$con->prepare($query);
	$stmt->bindparam(":uname",$uname);
	$stmt->execute();

	if($row=$stmt->fetchall())
	{
		foreach($row as $key=>$value)
		{
			$pss=$value[2];
		}
		if($pss==$pwd)
		{
		echo "<script>alert('login successfully');</script>";
		}
		else
		{
		echo "<script>alert('invalid password');</script>";
		}

	}
	else
{
	echo "<script>alert('invalid username');</script>";
}

?>



