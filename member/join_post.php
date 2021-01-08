<?php
header("content_type:text/html; charset=UTF-8");
    include("../lib/db_connect.php");
    $connect = dbconn();

$id = $_POST[id];
$user_id = $_POST[user_id];
$name = $_POST[name];
$nick_name = $_POST[nick_name];
$birth = $_POST[birth];
$sex = $_POST[sex];
$tel = $_POST[tel];
$email = $_POST[email];
$pws = $_POST[pw];
$addr_1 = $_POST[addr_1];
$addr_2 = $_POST[addr_2];
$reg = date("YmdHis", time());
$ip = getenv("REMOTE_ADDR");
$pw = md5($pws); //비밀번호 암호화

if(!$user_id)Error("write id.");
if(!$name)Error("write name.");
if(!$birth)Error("write birthday.");
if(!$sex)Error("choose your jender.");
if(!$tel)Error("write phonenumber.");
if(!$email)Error("write email.");
if(!$pw)Error("write password.");
if(!$addr_1)Error("write address.");



$query = "insert into member(id,user_id,name,nick_name,birth,sex,tel,email,pw,addr_1,addr_2,reg,ip)
        values('$id','$user_id','$name','$nick_name','$birth','$sex','$tel','$email','$pw','$addr_1','$addr_2','$reg','$ip')";

        mysql_query("set names utf8",$connect);
        mysql_query($query,$connect);
        mysql_close();
        
?>
<script>
    window.alert("Join Completed.");
    location.href = "../index.php";
</script>
