<?php
include_once "../db.php";
// 選項
$opt=$Que->find($_POST['opt']);
$opt['count']=$opt['count']+1;
// 題目
$subject=$Que->find($opt['subject_id']);
$subject['count']=$subject['count']+1;


// $subject['sh']=0;




$Que->save($opt);
$Que->save($subject);

header("location:../result.php?id={$subject['id']}");



