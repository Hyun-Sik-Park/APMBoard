<html>
    <head>
        <meta http-equiv="Content-type" content="text/html"; charset=UTF-8 />
        <title>공지사항</title>
        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
        td{
        font-family: 'Nanum Gothic', sans-serif;
        }
    </style>
    </head>
    <body>
    <?php 
    include("./lib/db_connect.php");
    $connect= dbconn();
    $member= member();
    ?>
        <table border='0' width='100%' height='100%' align='center' cellspacing='0' cellpadding='0'>
            <tr>
            <td width='100%' height='100%' align='center'>
            <table border='0' width='100%' height='100%' align='center' cellspacing='0' cellpadding='0'>
            <tr>
            <td width='100%' height='80' align='center' bgcolor='#764300'>
            <!-- <font color='#FFFFF'><strong>공지사항</strong></font> -->
            <h1 style="font-family: 'Yellowtail', cursive;">PracticeBoard</h1>
            </td>

            <tr>
            <td width='100%' height='50' align='right'>
            <?php if($member[user_id]){
                echo $member[name]."(<b>".$member[user_id]."</b>)님 환영합니다.";
            }else{?>
            <button class="btn btn-outline-dark"><a href="./member/join.php" style="text-decoration:none; color:black;"><strong>회원가입</strong></a></button> 
            <button class="btn btn-outline-dark"><a href="./member/login.php" style="text-decoration:none; color:black;"><strong>로그인</strong></a></button>
            <?php } ?>
            &nbsp; &nbsp; 

            <?php if($member[user_id]){?>    
            <button class="btn btn-outline-dark"><a href="./member/logout.php" style="text-decoration:none; color:black;"><strong>로그아웃</strong></a></button>
            <?php }?>
            
            </td>

            <tr>
            <td width="100%" height="30" align="left" valign="center" bgcolor="#452403">
            &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="./board/list.php"><font color="FFFFFF">문의사항</font></a>

            <tr>
            <td width="100%" height="500" align="center" bgcolor="#FFFFFF">메인화면</td>
            </tr>
            </table>
            </td>
            </tr>
        </table>
    </body>
</html>