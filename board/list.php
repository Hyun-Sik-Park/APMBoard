<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<style>
    td{
        font-family: 'Nanum Gothic', sans-serif;
    }
</style>

<?php
    include("../lib/db_connect.php");
    $connect=dbconn();
    $member=member();
?>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>게시판</title>
</head>
<body>
    <TABLE border="0" cellspacing="0" cellpadding="0" width="100%" height="100%" align="center" valign="top">
    <tr>
    <td width="100%" height="70" algin="left" valign="middle" bgcolor="#764300">
    
    <table border="0" widht="90%" height="70" bgcolor="#764300" align="center" cellspacing="0" cellpadding="0">
    <tr>
        <td width="100%" height="70" align="left" valign="middle">
        <h1 style="font-family: 'Yellowtail', cursive; ">
        <a href="../../index.php" style="text-decoration:none; color:black;">PracticeBoard</a></h1>
        </td>
    
    <tr>
        <td widht="100%" height="100%" align="left" valign="middle">&nbsp;</td>
        </tr>
    </table>
    </td>

    <TR>
    <TD width="100%" height="100%" align="center" valign="top">
    <table border="0" width="75%" height="100%" bgcolor="#764300" align="center" cellspacing="0" cellpadding="0">
    <tr>
        <td width="100%" height="10" colspan="5" bgcolor="FFFFF">&nbsp;</td>
    <tr>
        <td width="100%" height="30" colspan="5" class="font_td1" bgcolor="FFFFF">==문의사항==</td>
    <tr>
        <td style="color:white;" class="font_tr2" width="5%" height="30" align="center" valign="middle">no</td>
        <td style="color:white;" class="font_tr2" width="15%" height="30" align="center" valign="middle">이름</td>
        <td style="color:white;" class="font_tr2" width="40%" height="30" align="center" valign="middle">제목</td>
        <td style="color:white;" class="font_tr2" width="15%" height="30" align="center" valign="middle">날짜</td>
        <td style="color:white;" class="font_tr2" width="10%" height="30" align="center" valign="middle">조회수</td>

    <?php
        $query= "select * from bbs1 where id='bbs1' order by no desc";
        $result= mysql_query($query, $connect);
        $cnt= 1;
        while($data = mysql_fetch_array($result)){
  
    ?>

    <tr>
        <td height="25" align="center" bgcolor="EFEEEC"><?=$cnt?></td>
        <td height="25" align="center" bgcolor="EFEEEC"><?=$data[name]?></td>
        <td height="25" align="center" bgcolor="EFEEEC"><a href="./view.php?no=<?=$data[no]?>&id=<?=$data[id]?>" style="text-decoration:none;"><?=$data[subject]?></a></td>
        <td height="25" align="center" bgcolor="EFEEEC"><?=$data[reg]?></td>
        <td height="25" align="center" bgcolor="EFEEEC"><?=$data[hit]?></td>        
    <? 
    $cnt++;
    } ?>
    <tr>
        <!-- <td height="100%" colspan="5" bgcolor="FFFFF">-----------</td> -->
    
    <tr>
        <td height="100%" align="right" colspan="5" bgcolor="FFFFF">
        <button class="btn btn-outline-dark"><a href="./write.php" style="text-decoration:none; color:black;">글쓰기</a></td></button>
    </tr>
    </table>
    </TD>



    <TR>
    <td width="100%" height="100%" align="center" valign="top">&nbsp;</td>
    </TR>
    </TABLE>
</body>
</html>