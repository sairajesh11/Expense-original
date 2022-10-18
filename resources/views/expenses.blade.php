<?php
session_start();
mysql_connect("mysqlworkato.cehldl5ab55n.us-west-1.rds.amazonaws.com","workato","W0rkat0d8");
mysql_select_db("workato");
if($_SESSION["user"]==true)
{
echo "welcome"." ".$_SESSION["user"];
}
else
{
     header('location:index.php');
}

?>
<a href="logout.php">Logout</a>

<?php
$user=$_SESSION["user"];
echo $user;
$query=mysql_query("select * from user");

if(isset($_REQUEST["submit"]))
{
       $title=$_REQUEST["title"];
       $content=$_REQUEST['content'];
       mysql_query("insert into post(title,content)value('$title','$content')");
}
?>