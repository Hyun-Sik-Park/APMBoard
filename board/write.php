<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>게시판 글쓰기</title>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <style>
        td{
        font-family: 'Nanum Gothic', sans-serif;
        }
       
    </style>
<?php
    include("../lib/db_connect.php");
    $connect=dbconn();
    $member = member();
    if(!$member[user_id])Error("로그인 후 이용해 주세요.");
?>
</head>
<body>
    <TABLE border="0" cellspacing="0" cellpadding="0" width="100%" height="100%" align="center" valign="top">
        <TR>
        <TD width="100%" height="70" align="left" valign="middle" bgcolor="#764300">
            <table border="0" width="90%" height="70" bgcolor="#764300" align="center" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="100%" height="70" align="center" valign="middle" style="color:white;">
                    게시판 글쓰기
                    </td>
                </tr>
            </table>
        </TD>

    <TR>    
    <TD width="100%" height="100%" align="center" valign="top">
        <table border="0" width="75%" height="100%" bgcolor="FFFFF" align="center" cellspacing="0" cellpadding="0">
            <tr>
                <td width="100%" height="10" colspan="2" bgcolor="FFFFF">&nbsp;</td>
            <tr>
                <!-- <td width="100%" height="30" colspan="2" bgcolor="FFFFF" align="center"> = 자유게시판 글쓰기 =</td> -->
            
            <form action="write_post.php" name="write" method="POST" enctype='multipart/form-data'>
                <input type="hidden" name="id" value="bbs1">
            
            <tr>
                <td width="20%" height="30" align="right" valign="middle">
                    <li>아이디
                </td>
                
                <td width="80%" height="30" bgcolor="FFFFF" align="left" valign="middle">
                    &nbsp; <input type="text" name="user_id" size="15" value="<?= $member[user_id] ?>" readonly="readonly">
                </td>

            <tr>
                <td width="20%" height="30" align="right" valign="middle">
                    <li>이름
                </td>
                
                <td width="80%" height="30" bgcolor="FFFFF" align="left" valign="middle">
                    &nbsp; <input type="text" name="name" size="15" value="<?= $member[name] ?>" readonly="readonly">
                    &nbsp; &nbsp; &nbsp;
                닉네임:<input type="text" name="nick_name" size="15" value="<?= $member[nick_name] ?>" readonly="readonly">
                </td>

            <tr>
                <td width="20%" height="30" align="right" valign="middle">
                    <li>제목
                </td>
                
                <td width="80%" height="30" bgcolor="FFFFF" align="left" valign="middle">
                    &nbsp; <input type="text" name="subject" style="width:500px; height:30px;">
                </td>

            <tr>
                <td width="100%" height="420" align="center" valign="middle" colspan="2">
                    <textarea name="story" style="width:80%; height:400px;"></textarea>
                </td>    
            
            <tr> 
                <td width="100%" height="30" bgcolor="EDEDED" colspan="2" align="center" valign="middle">
                <input type="submit" value="글게시">
                </td>
            </form>

        <tr>
            <td width="100%" height="100%" colspan="2" bgcolor="FFFFF">&nbsp;</td>
        </tr>
        </table>
        </TD>     
        <TR>
        <TD width="100%" height="100%" align="center" valign="top">&nbsp;</td>           
        </TR>
        </TABLE>
</body>
</html>