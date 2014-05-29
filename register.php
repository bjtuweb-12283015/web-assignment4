<html>
<meta charset="utf-8" />
<body>
 <style type="text/css">
    body{
    	background-color: #C9C;
        padding-top:200px;
        padding-left:400px;
        }
   </style>

<p><strong>注册信息提示界面</strong></p>
<?php
$username = $_POST["name"];
$password = $_POST["password"];
$con = mysql_connect("localhost","root","");
mysql_select_db("my_db", $con);
$result = mysql_query("SELECT * FROM users");
$int=0;
$int1=0;
 
while($row = mysql_fetch_array($result))
{
if ($username== $row['username'])
{
   $int=1;
   
   echo "</br>";

}
 
if ($username== "")
  {
  	$int1=1;
    echo "Please input the username!";
    break;
   }
}


if($int==0)
{
   
   echo "You have seccessfully registed!";
}
if($int==1&&$int1!=1)
{
echo "The username have already registed!";
}

$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db" ,$con);
$sql="INSERT INTO users (username, password)
VALUES
('$_POST[name]','$_POST[password]')";
?>


<?php
mysql_query($sql,$con);
mysql_close($con);

?>
<br>

<br>
<br>
<a href="logout.php"><strong>返回主界面</strong></a>
<br>
<br>
<a href="denglu.php"><strong>跳转到登陆界面</strong></a>
<br>
<br>
<a href="zhuce.php"><strong>返回注册界面</strrong></a>
<html>



