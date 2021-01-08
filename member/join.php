<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>회원가입</title>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <style>
        td{
        font-family: 'Nanum Gothic', sans-serif;
        }
    </style>
</head>
<body>
    <table border="0" cellspacing="0" cellpadding="0" width= "100%" height="100%" align="center" valign="top">
        <tr>
            <td width="100%" height="70" align="center" valign="middle" bgcolor="#764300">
                &nbsp; &nbsp; 
                <h1 style="font-family: 'Yellowtail', cursive;">PracticeBoard</h1>
                <a href="../index.php" style="text-decoration:none; color:black;"><strong>[홈으로]</strong></a>
            </td>

            <tr>
            <td width="100%" height="100%" align="center" valign="top">
                <table border="0" width="750" height="100%" bgcolor="FFFFFF" align="center" cellspacing="0" cellpadding="0">
                    <tr>
                    
                    <form action="./join_post.php" name="member" method="post">
                        <td height="30" bgcolor="EEEEEE" align="left">
                            <strong>[ 회 원 가 입 ]</strong> 
                        
                            
                                <input type="hidden" name="id" value="test">
                                    <li>회원아이디: <input type="text" name="user_id" size="10">
                                    <br><br>
                                    <li>이름: <input type="text" name="name" size="10"> &nbsp; &nbsp; &nbsp; 닉네임: <input type="text" name="nick_name" size="10">
                                    <br><br>
                                    <li>생년월일: <input type="text" name="birth" size="10"> &nbsp; &nbsp; &nbsp;
                                        성별: <input type="radio" name="sex" value="male">남자 &nbsp; &nbsp; <input type="radio" name="sex" value="female">여자
                                    <br><br>
                                    <li>연락처: <input type="text" name="tel" size="10"> &nbsp; &nbsp; 이메일: <input type="text" name="email" size="10">
                                    <br><br>
                                    <li>비밀번호: <input type="password" name="pw" size="10">
                                    <br><br>
                                    <li>주소: <input type="text" name="addr_1" size="15"> &nbsp; &nbsp; 상세주소:<input type="text" name="addr_2" size="15">
                                    <br><br>
                                    <input type="submit" value="가입하기">
                        </td>
                    </form>
                    
                        

                        <tr>
                            <td height="100%" bgcolor="EEEEEE" align="center"> &nbsp;</td>
                        </tr>    
                </table>
            </td>
        </tr>
    </table>
</body>
</html>