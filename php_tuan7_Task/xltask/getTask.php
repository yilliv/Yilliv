<?php 
$db=new PDO('mysql:host=localhost;dbname=angularcode_task','root','');
$sql="select * from tasks";
$result=$db->query($sql);
$arr = array();
 while ($r=$result->fetch(PDO::FETCH_ASSOC))
 {
    $arr[] = $r;	
}
echo $json_response = json_encode($arr);
?>