<?php
    session_start();
    include_once('dbconn.php');
    $logged = false; 
    if(isset($_SESSION['email'])) {
        $name = $_SESSION['name'];
        $logged = true;
    }
?> 
<!DOCTYPE html>
<!-- code 0610-->
<html>
    <head>
        <title>Wwave coffee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/39996071eb.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <style>
        footer {
              background-color: rgb(53, 54, 54);
              font-size: 14px;
              color: rgb(101, 104, 103);
              text-align: center;
              font-weight: bold;
              }
              footer > p {
                line-height: 2em;
              }
        .navb {
            width: 1800px;
            display: flex;
            justify-content: space-between;
        }
        nav {
            width: 100%;
            height: 55px;
            display: flex;
            justify-content: space-evenly;
            background: rgb(255, 255, 255);
            position: fixed;
            z-index: 99999;
        }
        nav > a {
            text-decoration: none;
            text-align: center;
            pointer-events: none;
            color: black;
            font-weight: bold;
        }
        .logo {
            margin-top: 12.5px;
        }

        ul, li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #main-menu > li {
            float: left;
        }

        #main-menu > li > a {
            font-size: 18px;
            color: rgba(0, 0, 0, 0.85);
            text-align: center;
            text-decoration: none;
            letter-spacing: 0.05em;
            display: block;
            padding: 14px 36px;
            font-weight: bold;
        }
        #main-menu > li:hover {
            background-color: #52ace7b0;
            transition-duration: 0.5s;
        }
        #sub-menu {
            opacity: 0;
            visibility: hidden;
            transition: all 0.15s ease-in;
            text-align: center;
        }

        #sub-menu > li {
            padding: 16px 18px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);;
        }

        #sub-menu > li >  a {
            color: rgb(49, 49, 49);
            text-decoration: none;
            font-weight: bold;
        }

        #main-menu > li:hover #sub-menu {
            opacity: 1;
            visibility: visible;
            transition-duration: 0.2s;
        }

        #sub-menu > li >  a:hover {
            text-decoration: underline;
        }
        .navbar_link > li {
            margin-top: 15px;
            float: left;
            padding: 15px;
            margin-top: 0;
        }
        .navbar__toggleBtn {
            display: none;
        }
        /*회원정보 수정*/
        .signmodify {
            padding-top:130px;
            width: 600px;
            margin:auto;
        }
        .signmodify > h1 {
            font-size: 38px;
            font-weight: 700;
            padding-bottom: 10PX;
            text-align: center;
        }
        .container {
            padding-top: 50px;
            padding-bottom: 130px;
            height: 600px;;
        }
        .signdel > a {
            color: rgba(139, 131, 131, 0.87);
        }
        </style>
    </head>
    <body>
        <!--상단 메뉴바-->
        <nav role="navigation">
            <div class="navb">
                <div class="logo">
                    <a href="index.php"><img src="logo.png" alt="Wwave coffee"></a>
                </div>
                <ul id="main-menu">
                    <li><a href="#">Wwave story</a>
                        <ul id="sub-menu">
                            <li><a href="brand.html" aria-label="subemnu">브랜드</a></li>
                            <li><a href="campaign.html" aria-label="subemnu">캠페인</a></li>
                            <li><a href="store.html" aria-label="subemnu">매장찾기</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu</a>
                        <ul id="sub-menu">
                            <li><a href="drinks.html" aria-label="subemnu">커피</a></li>
                            <li><a href="foods.html" aria-label="subemnu">푸드</a></li>
                            <li><a href="product.html" aria-label="subemnu">상품</a></li>
                        </ul>
                    </li>
                    <li><a href="membership.html">Wwave membership</a>
                        <ul id="sub-menu">
                            <li><a href="membership.html" aria-label="subemnu">멤버십 소개</a></li>
                        </ul>
                    </li>
                    <li><a href="notice.html">FAQ</a>
                        <ul id="sub-menu">
                            <li><a href="notice.html" aria-label="subemnu">공지사항</a></li>
                            <li><a href="event.html" aria-label="subemnu">이벤트</a></li>
                        </ul>
                    </li>
                    <li><a href="mypage.php"><?=$name?>님</a>
                        <ul id="sub-menu">
                            <li><a href="mypage.php" aria-label="subemnu">내 정보</a></li>
                            <li><a href="signout.php" aria-label="subemnu">로그아웃</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar_link">
                    <li><i class="fa-brands fa-square-instagram"></i></li>
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                </ul>
            </div>
        </nav>
        <!--회원정보 수정-->
        <div class="signmodify">
            <h1>회원정보 수정</h1><br>
            <hr>
            <?php
            include_once('dbconn.php');
            $email = $_SESSION['email'];
            $sql = "select * from member where email = '$email'";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
                $row = $result->fetch_row();
            }   
             ?>
            <div class="container">
                <form action="signmodproc.php" method="post">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">이메일 아이디<strong style="color:#0044ff;">*</strong></label>
                        <input type="email" id="form2Example1" class="form-control" name="email"  value="<?= $row[0] ?>" readonly/>
                    </div>
                    <!-- 이름 -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">이름<strong style="color:#0044ff;">*</strong></label>
                        <input type="uname" id="form2Example1" class="form-control" name="name" value ="<?= $row[1] ?>"/>
                    </div>

                    <!-- 비밀번호 -->
                    <div class="passwordreset mb-4">
                        <a href="passwordreset.php"> 비밀번호 변경  ></a>
                    </div>

                    <!-- 전화번호 -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">휴대폰<strong style="color:#0044ff;">*</strong></label>
                        <input type="telno" id="form2Example1" class="form-control" name="telno" value ="<?= $row[3] ?>"/>
                    </div>

                    <!-- submit -->
                    <div style="text-align: center; margin-top: 40px;">
                    <button type="submit" class="btn btn-primary mb-3">확인</button>
                    </div>

                    <!--회원탈퇴-->
                    <div class="signdel" style="text-align: center; margin-top: 40px;">
                        <a href="signdel.php">회원탈퇴</a>
                    </div>
                </form>
            </div>
        </div>

    </body>
    <footer>
        <p><br>대표이사 : 김정민 교수님.</p>
		<p>사업자등록번호 : 000-00-000000 주식회사 Wwave 대표이사 : 김정민교수님 TEL : 1234-5678 개인정보 책임자 : 김정민교수님 </p>
		<p> &copy; 2023 Wwave Coffee.com All Rights Reserved.</p> <br>
    </footer>
</html>