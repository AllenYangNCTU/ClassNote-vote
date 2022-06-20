<?php
include_once "base.php";
// 建議先檢一下分類名稱是否有重複
save('types',['name'=>$_POST['name']]);

header("location:../back.php");

?>