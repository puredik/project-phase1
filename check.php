<?php 

$name = $_POST['EmpName'];
$pass = $_POST['EmpPass'];


echo "this is checkpage";

if($name == "lee" && $pass == "123"){
    echo "GOOD"." ".$name;

}
else{
    echo "BAD";
}


?>