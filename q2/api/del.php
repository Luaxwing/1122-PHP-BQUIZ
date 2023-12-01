<?php
include_once "../db.php";

if(isset($_GET['id']))
{
// 刪除題目
    $Que->del($_GET['id']);
// 刪除底下該類群項目
    $Que->del(['subject_id'=>$_GET['id']]);
}


header("location:../admin.php");