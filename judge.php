<html>
<body>
 <style type="text/css">
    body{
    	background-color: #C9C;
        padding-top:200px;
        padding-left:400px;
        }
   </style>

<meta charset="utf-8" />
<p><strong>登陆信息提示页面</strong></p>
   <?php
$username = $_POST["name"];
$password = $_POST["password"];
$con = mysql_connect("localhost","root","");
mysql_select_db("my_db", $con);
$result = mysql_query("SELECT * FROM users");

 $int1=0;
 $int2=0;
 $int3=0;
 $int4=0;

while($row = mysql_fetch_array($result))
{	
	if ($username== $row['username'] &&$password== $row['password'])
	{
         $int1=1;
          break;
	}
	if ($username=="")
	{
         $int2=1;	
         break;
	}
	if($username== $row['username'] &&$password!= $row['password'])
	{
		$int3=1;
         break;
	}
   if($username!= $row['username'])
   	 {
   	 	$int4=1;
   } 
 }


if ($int1==1)
{
	echo "Welcome to this website!";
}
if($int2==1)
{
	 echo "you should input your usernme first!";
}
if($int3==1)
{
	echo "The password is wrong!";
}
if($int4==1&&$int1!=1)
{
	echo "The username is not exist!";
}
?>


<br>
<br>
<br>
<br>
<br>
<a href="logout.php"><strong>返回主界面</strong></a></div>
<br>
<br>
<a href="login.html"><strong>进入个人中心</strong></a>
<br>
<br>
<a href="denglu.php"><strong>返回登陆界面</strong></a>
<br>
<br>
</style>
</html>