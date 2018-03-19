<?php
function connectdb(){
	echo'zhook!!!';
$host="localhost";
$db_name="db_compiler";
$user_name="compiler";
$pass="compiler_1234";
$link = mysqli_connect($host, $user_name, $pass, $db_name) 
    or die("Ошибка " . mysqli_error($link));

return $link;
}


?>
