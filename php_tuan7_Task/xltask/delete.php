<?php 
$id=$_GET['id'];

$cmd="delete from tasks where id='$id'";
$db=new PDO('mysql:host=localhost;dbname=angularcode_task','root','');
$result=$db->exec($cmd);
echo $json_response = json_encode($result);
?>