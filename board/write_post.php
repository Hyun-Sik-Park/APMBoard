<?php header("content-type:text/html; charset=UTF-8");

include("../lib/db_connect.php");
$connect = dbconn();


$id = $_POST[id];
$user_id = $_POST[user_id];
$name = $_POST[name];
$nick_name = $_POST[nick_name];
$subject = $_POST[subject];
$story = $_POST[story];

// if(!$subject)Error("제목을 입력해주세요.");
// if(!$story)Error("내용을 입력해주세요.");

$reg=date("YmdHis", time());
$ip=getenv("REMOTE_ADDR");



//쿼리전송
$query="insert into bbs1(id,user_id,name,nick_name,subject,story,reg,ip) 
        values('$id','$user_id','$name','$nick_name','$subject','$story','$reg','$ip')";
mysql_query("set names utf8", $connect);
mysql_query($query, $connect);
mysql_close();
?>

<script>
window.alert('쿼리 전송 성공');
location.href="../index.php";
</script>