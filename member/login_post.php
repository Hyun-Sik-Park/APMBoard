<?php
header("content-type:text/html; charset=UTF-8"); ob_start;
    include("../lib/db_connect.php");
    $connect=dbconn();

    $user_id = $_POST[user_id];
    $pws = $_POST[pw];

    $pw = md5($pws);

    $query = "select * from member where user_id = '$user_id'";
    mysql_query("set names utf8",$connect);
    $result = mysql_query($query, $connect);
    $member = mysql_fetch_array($result);

    if(!$user_id){
        Error("아이디를 입력하세요.");
    }else if(!$member[user_id]){
        Error("존재하지 않는 회원 아이디입니다.");
    }

    if(!$pw){
        Error("비밀번호를 입력하세요.");
    }else if($member[pw] != $pw){
        Error("비밀번호가 같지 않습니다.");
    }

    //setcookie("쿠키이름","저장내용",time()+60*60*24,"/");
    if($member[user_id] and $member[pw] == $pw){
    $tmp=$member[user_id]."//".$member[pw]; 
    setcookie("COOKIES",$tmp,time()+60*60*24,"/");
    }
?>

<script>
    window.alert("로그인 되었습니다.");
    location.href="../index.php";
</script>

