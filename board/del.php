<?php
header("content-type:text/html; charset=UTF-8");
    include("../lib/db_connect.php");
    $connect=dbconn();
    $member=member();

    if(!$member[user_id])Error("로그인 후 이용해 주세요.");
    
    $no=$_GET[no];
    $id=$_GET[id];

    $query="delete from bbs1 where no='$no' and id='$id' and user_id='$member[user_id]' ";
    mysql_query($query, $connect);
?>

<script>
    window.alert("삭제되었습니다.");
    location.href="./list.php";
</script>
