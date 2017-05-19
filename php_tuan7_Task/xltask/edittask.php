<?php 
$id=$_GET['id'];
$taskname=$_GET['name'];

$cmd="update tasks set task='$taskname' where id='$id'";
$db=new PDO('mysql:host=localhost;dbname=angularcode_task','root','');
$result=$db->exec($cmd);
echo $json_response = json_encode($result);
?>