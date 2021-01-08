<?php
header("content-type:text/html; charset=UTF-8");
    include("../lib/db_connect.php");
    $connect=dbconn();
    $member=member();

    if(!$member[user_id])Error("로그인 후 이용해 주세요.");

    $subject = $_POST[subject];
    $story = $_POST[story];
    $id = $_POST[id];
    $no = $_POST[no];

    if(!$subject)Error("제목을 입력해 주세요.");
    if(!$story)Error("내용을 입력해 주세요.");
    
    $query="update bbs1 set 
            subject='$subject',
            story='$story'
            where id='$id' and no='$no'";
    mysql_query("set names utf8", $connect);
    mysql_query($query, $connect);

    mysql_close();
?>

<script>
    window.alert("수정되었습니다.");
    location.href="./view.php?no=<?=$no?>&id=<?=$id?>";
</script>