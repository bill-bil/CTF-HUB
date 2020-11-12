<?php
header('Content-type:text/html;charset=utf-8');
$dbuser ='root';
$dbpass ='root';
$dbname ="users";
$host = 'localhost';
@error_reporting(0);
@$con = mysql_connect($host,$dbuser,$dbpass);

// 检测连接
if (!$con)
{
    echo "Failed to connect to MySQL: " . mysql_error();
}


@mysql_select_db($dbname,$con) or die ( "Unable to connect to the database: $dbname");
// take the variables
if(isset($_POST['username']))
{
    $id=@$_POST['username'];;
// connectivity
    $sql="SELECT * FROM users WHERE u_name='$id'";
    $result=mysql_query($sql);
    $row = mysql_fetch_array($result);
    if($row)
    {
        echo "<font size='5' color= '#99FF00'>";
        echo '你的用户名为:'. $row['u_name'];
        echo "<br>";
        echo '密码为:' .$row['u_pwd'];
        echo "</font>";
    }
    else
    {
        echo '<font color= "#FFFF00">';
        print_r(mysql_error());
        echo "</font>";
    }
}
?>