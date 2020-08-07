<html>
<body>
<?php

$hostname = "localhost";
$username = "user_site";
$password = "JxSLRkdutW";
$db = "foodie";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>

<table border="1" align="center">
<tr>
  <td>user name</td>
  <td>user email</td>
  <td>Message</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "SELECT * FROM user")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['user_name']}</td>
    <td>{$row['user_email']}</td>
    <td>{$row['user_message']}</td>
   </tr>\n";

}

?>
</table>
</body>
</html>
