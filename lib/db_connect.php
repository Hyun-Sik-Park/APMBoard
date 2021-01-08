<?php
    function dbconn(){
        $host_name="localhost";
        $db_user_id="phs9595";
        $db_name="phs9595";
        $db_pw="qwert12345";
        
        $connect = mysql_connect($host_name,$db_user_id,$db_pw);
        mysql_query("set names utf8",$connect);
        mysql_select_db($db_name,$connect);

        if(!$connect)die("연결에 실패했습니다.".mysql_error());
        return $connect;
    }

    //에러메세지 출력
    function Error($msg){
        echo "<script> window.alert('$msg'); history.back(1); </script>";
        exit; //위에 에러 메세지만 띄운다.
    }

    function member(){
        global $connect;
        $temps=$_COOKIE["COOKIES"];
        $cookies = explode("//",$temps);

    ///////회원정보///////
    $query = "select * from member where user_id = '$cookies[0]'";  //cookies[0] ->아이디 cookies[1] -> 비밀번호
    $result = mysql_query($query,$connect);
    $member = mysql_fetch_array($result);
    return $member;
    }
?>