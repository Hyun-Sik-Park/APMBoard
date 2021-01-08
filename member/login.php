<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>로그인 페이지</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <style>
        td{
        font-family: 'Nanum Gothic', sans-serif;
        }
    </style>   
</head>
<body>
    <table border="0" width="100%" height="100%" align="center" cellspacing="0" cellpadding="0" bgcolor="#EEEEEE">
    <tr>
            <td width="100%" height="70" align="center" valign="middle" bgcolor="#764300">
                &nbsp; &nbsp; 
                <h1 style="font-family: 'Yellowtail', cursive;">PracticeBoard</h1>
                <a href="../index.php" style="text-decoration:none; color:black;"><strong>[홈으로]</strong></a>
            </td>
       
        <tr>
            <td width="100%" height="80" align="center">
            <strong>[로그인 화면]</strong>
            </td>
        
        <tr>
        <form action="./login_post.php" name="login" method="POST">
            <td width="100%" height="200" align="center">
            <li>아이디 &nbsp; : <input type="text" name="user_id" size="10">
            <br>
            <li>비밀번호: <input type="password" name="pw" size="15">
            </td>

        <tr>
        <td width="100%" height="30" align="center">
        <input type="submit" value="로그인">
        </td>
        </form>

        <tr>
        <td width="100%" height="100%" align="center">&nbsp;</td>    

        </tr>

    </table>
</body>
</html>