<?php
session_start();   # 이 페이지에서 세션 데이터 처리를 하고자 한다. = 로그인하고 시작화면에 로그인, 회원가입 글 없어지고 자기 프로필 나오는 것 
#1. DB 연결하기
#2. 로그인 데이터 읽어오기
#3. SELECT SQL 구문 작성하기
#4. SQL 실행하고 확인하기
include_once('dbconn.php');
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$sql = "select * from member where  
     email = '$email'and pwd = '$pwd'"; # *이거 말고도 email이라 적어서 바로 뽑아올 수 있다
    #이메일과 패스워드가 맞는지 확이하는 것 
$recordset = $conn->query($sql);
#var_dump($recordset);
if(isset($recordset) && $recordset->num_rows == 1) {
    $row = $recordset->fetch_assoc(); # 테이블에서 검색된 레코드 하나를 연관배열로 반환 
    $name = $row['name']; #컬럼명이 키이므로 컬럼명으로 값을 읽어옴  uname이 아니라 name인 이유는 db확인해보면 u가 아닌 name이다
    #세션 데이터 생성
    $_SESSION['email'] = $email; #uid = email
    $_SESSION['name'] = $name;
    echo "<script>alert('로그인 성공하였습니다.')</script>"; 
    echo "<script>location.replace('index.php')</script>";
}
else {
    echo "<script>alert('아이디 또는 패스워드가 일치하지 않습니다.')</script>"; 
    echo "<script>location.replace('signin.html')</script>";
}
?>