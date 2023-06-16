<?php
    session_start();
    include_once('dbconn.php');
    $logged = false; 
    if(isset($_SESSION['email'])) {
        $name = $_SESSION['name'];
        $logged = true;
    }
?>   
<!doctype html>
<!--------------------------------
      FILE: membership.html
      멤버십 페이지
      23.06.07
-->
<html>
<head>
    <title>membership</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="membership.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-sclae=1.0" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/39996071eb.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="membership.css">
</head>
<body>
            <nav class="navigation">
                <div class="navb">
                    <div class="logo">
                        <a href="index.php"><img src="image/logo.png" alt="Wwave coffee"></a>
                    </div>
                    <ul id="main-menu" class="main-menu">
                        <li><a href="#">Wwave story</a>
                            <ul id="sub-menu" class="main-menu">
                                <li><a href="brand.php" aria-label="subemnu">브랜드</a></li>
                                <li><a href="campaign.php" aria-label="subemnu">캠페인</a></li>
                                <li><a href="store.php" aria-label="subemnu">매장찾기</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu</a>
                            <ul id="sub-menu">
                                <li><a href="drinks.php" aria-label="subemnu">커피</a></li>
                                <li><a href="foods.php" aria-label="subemnu">푸드</a></li>
                                <li><a href="product.php" aria-label="subemnu">상품</a></li>
                            </ul>
                        </li>
                        <li><a href="membership.php">Wwave membership</a>
                            <ul id="sub-menu">
                                <li><a href="membership.php" aria-label="subemnu">멤버십 소개</a></li>
                            </ul>
                        </li>
                        <li><a href="notice.php">FAQ</a>
                            <ul id="sub-menu">
                                <li><a href="notice.php" aria-label="subemnu">공지사항</a></li>
                                <li><a href="event.php" aria-label="subemnu">이벤트</a></li>
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
                    <ul class="navbar__toggleBtn">
                        <li><i id="toggleBtn" class="fa-sharp fa-solid fa-bars"></i></li>
                      </ul>
                </div>
            </nav>
    <div class="container">
        <!--멤버십 소개-->
            <h1>멤버십 소개</h1>
            <p>웨이브커피만의 특별한 헤택</p>
            <!--등급별 혜택 안내-->
            <div class="level_info">
                <div class="title">
                    <h4>스탬프가 적립될수록 등급이 올라갑니다.</h4>
                </div>
                <div class="cotn">
                    <div class="info_box">
                        <div class="tit_wrap">
                            <div class="txt_area">
                                <h3>WELCOME</h3>
                                <p>회원 신규 가입 시</p>
                            </div>
                            <div class="img_area">
                                <img src="image/Group 13.png">
                            </div>
                        </div>
                        <div class="benefit_area">
                            <p class="tit">
                                <img src="image/group 15.png">
                                멤버스 전용 이벤트 참여
                            </p>
                            <p class="txt">
                                - 회원가입 프로모션은 별도로 진행됩니다.
                            </p>
                        </div>
                    </div>
                    <div class="info_box">
                        <div class="tit_wrap">
                            <div class="txt_area">
                                <h3>SILVER</h3>
                                <p>스탬프 5개 이상 적립 시</p>
                            </div>
                            <div class="img_area">
                                <img src="image/Group 12.png">
                            </div>
                        </div>
                        <div class="benefit_area">
                            <p class="tit">
                                <img src="image/group 15.png">
                                개인컵 할인 10%
                            </p>
                            <p class="tit">
                                <img src="image/group 15.png">
                                SILVER 쿠폰팩 증정 (월 1번)
                            </p>
                        </div>
                    </div>
                    <div class="info_box">
                        <div class="tit_wrap">
                            <div class="txt_area">
                                <h3>GOLD</h3>
                                <p>스탬프 20개 이상 적립 시</p>
                            </div>
                            <div class="img_area">
                                <img src="image/Vector.png">
                            </div>
                        </div>
                        <div class="benefit_area">
                            <p class="tit">
                                <img src="image/group 15.png">
                                GOLD 쿠폰팩 증정 (연 1회)
                            </p>
                            <p class="tit">
                                <img src="image/group 15.png">
                                멤버스 적립시마다 스탬프 발행
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!--등급별 혜택 안내-->
            <!--이용안내-->
            <div class="guide_sec">
                <h2 class="tit">이용안내</h2>
                    <div class="guide_wrap">
                        <div class="gg">
                            <div class="g_img">
                                <img src="image/Group 16.png">
                            </div>
                            <div class="g_box">
                                <div class="g-tit">
                                    <p>스탬프 적립기준</p>
                                </div>
                                <div class="sub-txt">
                                    <p>매장 제조음료 1잔당<br>스탬프 1개가 적립됩니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gg">
                            <div class="g_img">
                                <img src="image/Group 17.png">
                            </div>
                            <div class="g_box">
                                <div class="g-tit">
                                    <p>스탬프 유효기간</p>
                                </div>
                                <div class="sub-txt">
                                    <p>스탬프 유효기간은 스탬프별<br>1년입니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gg">
                            <div class="g_img">
                                <img src="image/Group 18.png">
                            </div>
                            <div class="g_box">
                                <div class="g-tit">
                                    <p>등급상승</p>
                                </div>
                                <div class="sub-txt">
                                    <p>승급조건 충족 시 익일부터<br>적용됩니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gg">
                            <div class="g_img">
                                <img src="image/Group 19.png">
                            </div>
                            <div class="g_box">
                                <div class="g-tit">
                                    <p>등급기간</p>
                                </div>
                                <div class="sub-txt">
                                    <p>승급조건 충족 시 익일부터<br>적용됩니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!--이용안내-->
            <!--반응형 웹 스크립트-->
            <script>
        document.getElementById('toggleBtn').addEventListener('click', function () {
        var menu = document.getElementById('main-menu');
        menu.classList.toggle('show');
        });
        </script>
        <!--반응형 웹 스크립트-->
</body>
<footer>
    <p><br>대표이사 : 김정민 교수님.</p>
    <p>사업자등록번호 : 000-00-000000 주식회사 Wwave 대표이사 : 김정민교수님 TEL : 1234-5678 개인정보 책임자 : 김정민교수님 </p>
    <p> &copy; 2023 Wwave Coffee.com All Rights Reserved.</p> <br>
</footer>
</html>
