<?php

$servername = "localhost";
$username = "id17614562_eschoolsl2";
$dbname = "id17614562_eschoolsl1";
$password = "Student@1234";

$con = mysqli_connect($servername, $username, $password ,$dbname);

if ($con) {
 //echo "Connected successfully";
}
else
{
  echo"Connection failed: ".mysqli_connect_error($con);
}

?>