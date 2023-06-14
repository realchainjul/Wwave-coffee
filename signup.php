<?php
# 회원가입 처리 PHP 파일
# 1) 데이터베이스 연결
# 2) 회원가입 데이터 읽어오기
# 3) INSERT SQL 명령문 작성하기 
# 4) SQL 실행하고 결과 확인하기
include_once('dbconn.php'); 
$email = $_POST['email']; #post = html보면 method가 post다
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$telno = $_POST['telno'];
$regdate = date('Y/m/d');
$stamp = 1;
$sql = "insert into member
     values('$email','$name','$pwd','$telno','$regdate',$stamp )";
if($conn->query($sql))  {
    echo "<script>alert('Wwave coffee 회원가입 성공')</script>";
    echo "<script>location.replace('index.php')</script>";
}
else {
   echo "<script>alert('회원가입에 오류가 있습니다')</script>";
   echo "<script>location.replace('signup.html')</script>";
}
?>