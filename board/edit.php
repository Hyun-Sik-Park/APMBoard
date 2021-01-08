<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>게시글 수정</title>
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
    <td style="color:white;" width="100%" height="70" align="center" valign="middle" bgcolor="#764300">
    게시판 글 수정
    </td>

    <tr>
    <td width="100%" height="10" align="center" valign="middle">
    &nbsp;
    </td>

    <?php
        $query="select * from bbs1 where no='$no' and id='$id'";
        mysql_query("set names utf8");
        $result= mysql_query($query, $connect);
        $data= mysql_fetch_array($result);

        $no=$_GET[no];
        $id=$_GET[id];
    ?>

    <tr>
    <form name="edit" action="edit_post.php" method="post">
    <input type="hidden" name="id" value="<?=$data[id]?>">
    <input type="hidden" name="no" value="<?=$data[no]?>">
    <td width="100%" height="15" colspan="2" align="left" valign="middle">
    <li>이 름: <?=$data[name]?> (<?=$data[user_id]?>) <?php if($data[nick_name]){?> &nbsp; &nbsp;닉네임: <?php echo $data[nick_name]; }?>
    </td>

    <tr>
    <td width="100%" height="25" colspan="2" align="left" valign="middle">
    <li>글 제 목: <input type="text" name="subject" value="<?=$data[subject]?>" style="width:60%; height:25px;">
    </td>

    <tr>
    <td width="100%" height="300" colspan="2" align="center" valign="middle" bgcolor="FFFFFF">
    <textarea name="story" style="width:95%; height:300px;">
    <?=nl2br($data[story])?>
    </textarea>
    </td>

    <tr>
    <td width="50%" height="40" align="center" valign="middle" bgcolor="#764300">
    <input type="submit" value="완료"> &nbsp; &nbsp;
    <button><a href="view.php?no=<?=$data[no]?>&id=<?=$data[id]?>" style="color:black;">취소</a></button>
    </td> 

    

    </form>

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