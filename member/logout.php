<?php 
header("content-type:text/html; charset=UTF-8");
    setcookie("COOKIES","",0,"/"); //쿠키 지우기
?>

<script>
    window.alert("로그아웃 되었습니다.");
    location.href="../index.php";
</script>