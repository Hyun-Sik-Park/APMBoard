<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>게시글 보기</title>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <style>
        td{
        font-family: 'Nanum Gothic', sans-serif;
        }
        a{
        text-decoration:none;
        color:white;
        padding:10px;
        }
    </style>
<?php
    include("../lib/db_connect.php");
    $connect=dbconn();
    $member=member();

    if(!$member[user_id])Error("로그인 후 이용해주세요");

    $no=$_GET[no];
    $id=$_GET[id]; 
?>
</head>
<body>
  <TABLE border="0" cellspacing="0" cellpadding="0" width="100%" height="100%" align="center" valign="top">
    <TR>
    <TD width="70%" height="100%" align="left" valign="middle" bgcolor="#ffffff">
    <table border="0" width="90%" height="100%" bgcolor="#ffffff" align="center" cellspacing="0" cellpadding="0">
    <tr>
    <td width="100%" height="70" align="center" valign="middle" bgcolor="#764300" style="color:white;">
    게시판 글보기
    </td>

    <?php
        $query = "select * from bbs1 where no='$no' and id='$id' ";
        mysql_query("set names utf8");
        $result = mysql_query($query, $connect);
        $data = mysql_fetch_array($result);
    ?>

    <tr>
    <td width="100%" height="10" align="center" valign="middle">
    &nbsp;
    </td>

    <tr>
    <td width="100%" height="15" align="left" valign="middle">
    <li>이 름: <?=$data[name]?> (<?=$data[user_id]?>) <?php if($data[nick_name]){?> &nbsp; &nbsp;닉네임: <?php echo $data[nick_name]; }?>
    </td>

    <tr>
    <td width="100%" height="25" align="left" valign="middle">
    <li>글제목: <?=$data[subject]?>
    </td>

    <tr>
    <td width="100%" height="300" align="left" valign="top" bgcolor="FFFFFF">
    <hr size="0.1" width="98%" color="#764300" />
    <?=$data[story]?>
    </td>

    <tr>
    <td width="100%" height="100%" align="center" valign="middle">
    &nbsp;
    </td> 

    <tr>
    <td width="100%" height="20" align="center" valign="middle" bgcolor="#764300">
    <a href="list.php">글목록</a> &nbsp; &nbsp; 
    <a href="edit.php?no=<?=$data[no]?>&id=<?=$data[id]?>">글수정</a> &nbsp; &nbsp; 
    <a href="del.php?no=<?=$data[no]?>&id=<?=$data[id]?>" onclick="return confirm('정말 삭제하시겠습니까?');">삭 제</a>
    </td>

    <tr>
    <td width="100%" height="50" align="center" valign="middle">
    &nbsp;
    </td> 

    </tr>
    </table>
    </TD>

    <TR>
    <TD width="100%" height="100%" align="center" valign="top">&nbsp;</TD>
    </TR>
    </TABLE>

</body>
</html>