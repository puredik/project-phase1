<?php

session_start();
if(isset($_SESSION['username'])){
    
echo "<h2>".$_SESSION['username']."</h2>";
echo
"<h5> <a href=\"\">My profile</a> </h5>
<p> <a href=\"\"> My activity </a></p>
";               
}
else{
    echo "username is not set";
    require('profileDefault.php');
}
?>
                