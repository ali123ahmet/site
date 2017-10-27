<html>
<?php
$container = array("name"=>'Ali Ahmet',"module"=>'Programming in PHP',"grade"=>'MERIT');
session_start();
foreach($container as $key => $value){
    echo $key . ' : ' . $value .'<br>';
    $_SESSION[$key] = $value; 
}

?>
</html>