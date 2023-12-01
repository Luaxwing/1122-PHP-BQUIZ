<?php
include_once "../db.php";
// 選項
$subject=$Que->find($_GET['id']);

($subject['sh']==1)?$subject['sh']=0:$subject['sh']=1;




// echo $subject['sh'];

$Que->save($subject);

header("location:../admin.php");
