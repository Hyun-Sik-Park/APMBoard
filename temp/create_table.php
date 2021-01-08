<?php
header("content-type:text/html; charset=UTF-8");

    include("../lib/db_connect.php");
    $connect=dbconn();

$sql="CREATE TABLE bbs1
    (no int not null auto_increment,
    PRIMARY KEY(no),
    id char(15),
    user_id char(15),
    name char(15),
    nick_name char(15),
    pw char(30),
    subject char(150),
    story text,
    hit int,
    reg char(20),
    ip char(20)
    )";




//$sql="alter table bbs1 drop column level"; // 필드 삭제
//$sql="drop table bbs1"; // 테이블 삭제
//$sql="alter table member add level int default '3' not null"; //필드명과 타입 추가하기
//$sql="alter table bbs1 change level level2 varchar(20)" // 필드명과 타입을 변경
//$sql="alter table bbs1 modify level2 int"; // 필드의 타입만 변경
//$sql="alter table bbs1 rename bbs2"; // 테이블 이름 변경
mysql_query($sql,$connect);
if(!$sql)die("테이블 생성 실패" .mysql_error());

if($sql)echo "정상적으로 생성 되었습니다.";
?>