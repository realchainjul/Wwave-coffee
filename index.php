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
<!-- code 0606-->
<html>
    <head>
        <title>Wwave coffee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/39996071eb.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <!--상단 메뉴바-->
        <nav class="navigation">
            <div class="navb">
            <?php
            if(!$logged) {
            ?>
                <div class="logo">
                    <a href="index.html"><img src="image/logo.png" alt="Wwave coffee"></a>
                </div>
                <ul id="main-menu"  class="main-menu">
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
                    <li><a href="signin.html">Log in</a></li>

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
                <?php } else { ?>
                <div class="navb">
                <div class="logo">
                    <a href="index.php"><img src="image/logo.png" alt="Wwave coffee"></a>
                </div>
                <ul id="main-menu"  class="main-menu">
                    <li><a href="#">Wwave story</a>
                        <ul id="sub-menu">
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
                <?php } ?>
            </div>
        </nav>
        <!--상단 메뉴바-->
        <!--본문-->

        <!--배너-->
        <section>
            <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active" ></button>
                    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2"></button>     
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/event_02.jpg" alt="" class="d-block" style="width:100%; height:1200px" >
                        <div class="carousel-caption">
                            <div class="menu_btn">
                            <a href="#">메뉴 더보기</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/002.png" alt="" class="d-block" style="width:100%; height:1200px">
                    </div>
                    <div class="carousel-item">
                        <img src="image/001.png" alt="" class="d-block" style="width:100%; height:1200px">
                    </div>
                </div>
            </div>
        </section>
        <!--배너-->
        <!--섹션2-->
        <section>
            <div class="section_2">
                <div class="sec2_img">
                    <img src="image/store-001.png">
                </div>
                <div class="sec2_txt">
                    <h1><strong>Wwave</strong></h1><br>
                    <span style="font-size: 18px">한라산 국립공원 내 1,450m 지역에서 내린 빗물이 스며들어<br>
                        천연 정수기 역할을 하는 화산암반층을 천천히 거쳐<br>
                        비로소 깨끗한 물을 이용한 커피를 4500원의 합리적인 가격으로 제공합니다.
                    </span><br>
                    <span style="font-size: 14px">좋은 품질의 재료를, 합리적인 가격으로 제공하여<br>
                           좋은 품질의 음료를 저렴한 가격으로 만나보실 수 있습니다.
                    </span><br>
                    <br><a href="#">브랜드 소개</a>
                </div>
            </div>
        </section>
        <!--섹션2-->
        <!--섹션3-->
        <section >
            <div class="main">
                <h1>EVENT</h1>
                <div class="contents">
                  <div class="cont">
                    <ul>
                      <li>
                        <a href="event_signature.php">
                          <div class="box">
                            <div class="img">
                              <img src="image/event_03.jpg">
                            </div>
                            <div class="txt">
                              <div class="txt_wrap">
                                Wwave 시그니처 커피 발매
                              </div>
                              <div class="txt_date">
                                2023.06.03
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="event_swim.php">
                          <div class="box">
                            <div class="img">
                              <img src="image/swim_01.png">
                            </div>
                            <div class="txt">
                              <div class="txt_wrap">
                                Wwave swimming event
                              </div>
                              <div class="txt_date">
                                2023.06.03
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="event_mem.php">
                          <div class="box">
                            <div class="img">
                              <img src="image/텀블러_01.png">
                            </div>
                            <div class="txt">
                              <div class="txt_wrap">
                                Join Wwave membership
                              </div>
                              <div class="txt_date">
                                2023.06.03
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div  class="event">
                    <a href="event.php">이벤트 더보기</a>
                  </div>
                </div>
            </div>
        </section>
        <!--섹션3-->
    <!--본문-->
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