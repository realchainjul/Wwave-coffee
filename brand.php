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
<!-- code 0524-->
<html>
    <head>
        <title>brand</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/39996071eb.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <style>
        article {
        background-color: white;
        }

        button {
            border: none;
            margin-bottom: 10px;
            padding: 10px 25px;
            background-color: #ddd; 
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: paleturquoise;
            color: white;
        }

        footer {
            background-color: rgb(53, 54, 54);
            font-size: 10px;
            color: rgb(101, 104, 103);
            text-align: center;
            font-weight: bold;
        }
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        /*body 초기화*/
        body {
            margin: 0;
            padding: 0;
            background-color: #d9d9d9;
        }
        .navb {
            width: 1500px;
            display: flex;
            justify-content: space-between;
        }
        nav {
        width: 100%;
        height: 48px;
        display: flex;
        justify-content: space-evenly;
        background: rgb(255, 255, 255);
        position: fixed;
        z-index: 99999;
        }
        nav > a {
        font-size: 26px;
        text-decoration: none;
        text-align: center;
        pointer-events: none;
        color: black;
        font-weight: bold;
        }
        .logo {
        margin-top: 7px;

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
        font-size: 0.85rem;
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

        section {
        column-width: 15em;
        background: #dadadf;
        padding: 2em 12em;
        }
        .navbar_link > li {
        margin-top: 12px;
        float: left;
        padding: 11px;
        margin-top: 0;
        }
        .navbar__toggleBtn {
        display: none;
        }
        .container mt-3 {
        background-color: wheat;
        }
        .carousel-caption{
        color: black;
        }
        /* brand style */
       .brand {
            padding-top:130px;
            text-decoration-line: none;
            width: 1100px;
            margin: auto;
            padding-bottom: 70px;
       }
       .brand > h1  {
            font-size: 38px;
            font-weight: bold;
            padding-bottom: 10px;
            text-align: center;  
        }
        
        .brand > h4 {
            text-align: center;
        }
        .brand > p {
            font-size: 20px;
            font-weight: 400;
            padding-bottom: 10px;
            text-align: center;  
        }
        .contents {
            margin: auto;
            border-top: 3px solid #52ace7b0;
            border-bottom: 3px solid #52ace7b0;
            height: auto;
            margin-bottom: 32px;
            
            padding-bottom: 30px;   
        }
        .contents > .contents_top {
            padding-bottom: 10px;
            padding-top: 20px;
            text-align: center;
        }
        .c_img {
            max-width: 100%;
            height: 350px;
            float: left;
        }
        /*반응형*/
  @media (max-width: 1500px) {
    .logo {
      text-align: left;
      margin-right: auto;
      padding-left: 50px;
  }
  .navb ul#main-menu li{
    float: none;
  }
  .main-menu {
      display: none;
      position: fixed;
      top: 55px;
      left: 0;
      width: 100%;
      background: #fff;
      z-index: 999;
      align-items: center;
  }

  .main-menu.show {
      display: block;
  }

  .main-menu li {
      text-align: center;
  }

  .main-menu li a {
      display: block;
      padding: 14px 36px;
  }

  .main-menu #sub-menu {
      display: none;
  }

  .main-menu li:hover #sub-menu {
      display: block;
      position: static;
      background-color: transparent;
      transition-duration: 0.4s;
  }
  .navbar_link {
      display: none;
      text-align: center;
  }

  .navbar__toggleBtn {
      display: block;
      padding-right: 60px;
      padding-top: 10px;
      
  }

  .navbar__toggleBtn li {
      margin-top: 5px;
  }
}
        </style>

        <!-- 이미지 반응형 웹 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://mattstow.com/experiment/responsive-image-maps/jquery.rwdImageMaps.min.js"></script>

        <script>
            $(document).ready(function(e) {
                $('img[usemap]').rwdImageMaps();
            });
        </script>
    </head>
    
    
    <body>
    
    <nav class="navigation">
        <div class="navb">
            <div class="logo">
                <a href="index.php"><img src="image/logo.png" alt="Wwave coffee"></a>
            </div>
            <ul id="main-menu" class="main-menu">
                <li><a href="brand.php">Wwave story</a>
                    <ul id="sub-menu">
                    <li><a href="brand.php" aria-label="subemnu">브랜드</a></li>
                    <li><a href="campaign.php" aria-label="subemnu">캠페인</a></li>
                    <li><a href="store.php" aria-label="subemnu">매장찾기</a></li>
                </ul>
                </li>
                <li><a href="drink.php">Menu</a>
                <ul id="sub-menu">
                    <li><a href="drink.php" aria-label="subemnu">커피</a></li>
                    <li><a href="food.php" aria-label="subemnu">푸드</a></li>
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
        <article>
            <div class="brand">
                <h1>Brand Wwave</h1>
                <h4>"인간의 정신에 커피를 불어넣고 마음을 더욱 풍요롭게 한다."</h4>
                <p>이를 위해 한분의 고객, 한잔에 음료에 최선을 다합니다.</p>
                
                <div class="contents">
                    <div class="contents_top">
                        <div class="c_img">
                            <img src="./img/cafe.jpg" style="width: 350px; height: 350px;">
                        </div>
                        <div class="c_txt">
                        <p style="font-weight: bold;">"음료 이야기"</p>
                        <p>한라산 국립공원 내 1,450m 지역에서 내린 빗물이 스며들어<br>천연 정수기 역할을 하는 화산암반층을 천천히 거쳐<br>깨끗한 물을 이용한 커피를 제공합니다.</p>
                        <p style="font-weight: bold;">“커피 이상의 특별한 경험을 소개합니다.”</p>
                        <p>세계인들의 생활 속에 스며들어 전 세계의 커피 문화를 선도하고 있는<br>Wwave가 일상을 풍요롭게 하는 제3의 공간으로서<br>국내에서도 지역사회 속에서 고객과 함께하며 새로운 커피문화를 정착시키고 있습니다.</p>
                        <p>웨이브 커피는 2000년 제주도 1호점을 시작으로 모든 매장을 직영하며,<br>지역사회 속에서 일상을 풍요롭게 하는 특별한 Wwave coffee 경험을 전달하면서<br> 업계를 선도하는 기업으로 성장해 오고 있습니다.</p></div>
                    </div>
                </div>
            </div>
        </article>
        <script>
            document.getElementById('toggleBtn').addEventListener('click', function () {
            var menu = document.getElementById('main-menu');
            menu.classList.toggle('show');
            });
        </script>
    </body>
    <footer>
        <p><br>대표이사 : 김정민 교수님.</p> <br>
		<p>사업자등록번호 : 000-00-000000 주식회사 Wwave 대표이사 : 김정민교수님 TEL : 1234-5678 개인정보 책임자 : 김정민교수님 </p><br>
		<p> &copy; 2023 Wwave Coffee.com All Rights Reserved.</p> <br>
    </footer>
</html>