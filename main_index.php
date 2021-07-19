<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>콤파니아</title>

            
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/header_sliderbanner.js"></script>
        <script src="js/header_tapmenu.js"></script>
        <link rel="stylesheet" href="css/jquery.bxslider.min.css">

        
        

       <!-- <script>
            function txChangeColor(element){
                element.style.color="black";
            }
        </script>-->


        <style>
            @import url(css/main.css);
            @media all and (min-width:1024px) and (max-width:2048px)/*(max-width:420px)*/{
                #gallery_wrap{
                    margin: 0 auto;
                    text-align:center;
                    width: 70%;
                }
            }
            @media all and (min-width:768px) and (max-width:1023px)/*(max-width:420px)*/{
                #gallery_wrap{
                    margin: 0 auto;
                    text-align:center;
                    width: 100%;
                }
            }
            @media all and (min-width:320px) and (max-width:767px)/*(max-width:420px)*/{
                #gallery_wrap{
                    margin: 0 auto;
                    text-align:center;
                    width: 100%;
                }
            
            }

        </style>


    </head>
    <body>
            <?php include "header.php";?>

            <div id="gallery_wrap">
                <ul class="slide_gallery">
                    <li><img class="banner1" src="images/mn-banner1.png" alt="mn-banner1"></li>
                    <li><img class="banner2" src="images/mn-banner2.png" alt="mn-banner2"></li>
                    <li><img class="banner3" src="images/mn-banner3.png" alt="mn-banner3"></li>
                </ul>
            </div>

        <section id="main-product">
        <!--추가 11.17 -->
            <div class="pro-event">
                <p class="eventname">행사중인 상품</p>
                
                <div class="pro-1">
                    <img class="pro_img" src="images/pro1.png">
                    <p class="pro_name">미주리 육지거북 사료</p>
                    <p class="pro_intro">균형 잡힌 영양의 마약 육지거북 사료</p>
                    <p class="pro_price">28,500원</p>
                    <p class="pro_dis">23,500원</p>
                </div>
                <div class="pro-1">
                    <img class="pro_img" src="images/pro2.png">
                    <p class="pro_name">비타폴 이코노믹 1.2kg</p>
                    <p class="pro_intro">햄스터 기본 사료!</p>
                    <p class="pro_price">7,900원</p>
                    <p class="pro_dis">5,900원</p>

                </div>
                <div class="pro-1">
                    <img class="pro_img" src="images/pro3.png">
                    <p class="pro_name">슈퍼 사일런트 코르크 휠</p>
                    <p class="pro_intro">저소음 자연주의 챗바퀴</p>
                    <p class="pro_price">38,500원</p>
                    <p class="pro_dis">28,500원</p>
                </div>
                <div class="pro-1">
                    <img class="pro_img" src="images/pro4.png">
                    <p class="pro_name">캣가든 네츄럴 고양이 캣잎</p>
                    <p class="pro_intro">100% 북미산 고산지대 재배</p>
                    <p class="pro_price">19,900원</p>
                    <p class="pro_dis">13,900원</p>
                </div>
                <form action="search_product_list.php" method="post">
                    <input type="hidden" name="condition" value="event">
                    <input type="hidden" name="search" value="행사중인 상품">
                    <input type="submit" value="더 보러가기">
                </form>
            </div>
            <div class="pro-event">
                <p class="eventname">지금 뜨는 상품들</p>

                <div class="pro-1">
                    <img class="pro_img" src="images/pro5.png">
                    <p class="pro_name">베리앤펫 파닥 피쉬</p>
                    <p class="pro_intro">3 모션 파닥 피쉬</p>
                    <p class="pro_price">15,000원</p>
                    <p class="pro_dis">12,000원</p>
                </div>
                <div class="pro-1">
                    <img class="pro_img" src="images/pro6.png">
                    <p class="pro_name">[견사돌] 치아 건강 간식</p>
                    <p class="pro_intro">구강관리 지금 바로 시작하세요</p>
                    <p class="pro_price">24,800원</p>
                    <p class="pro_dis">24,800원</p>
                </div>
                <div class="pro-1">
                    <img class="pro_img" src="images/pro7.png">
                    <p class="pro_name">가리가리 스크래쳐 월 플러스</p>
                    <p class="pro_intro">안락하고 편안한 쉼터, 고양이의 휴식</p>
                    <p class="pro_price">30,000원</p>
                    <p class="pro_dis">22,000원</p>
                    
                </div>
                <div class="pro-1">
                    <img class="pro_img" src="images/pro8.png">
                    <p class="pro_name">네어핏 에어 X자 하네스</p>
                    <p class="pro_intro">나도편하고, 아이도편한 산책</p>
                    <p class="pro_price">18,900원</p>
                    <p class="pro_dis">18,900원</p>
                </div>
                <form action="search_product_list.php" method="post">
                    <input type="hidden" name="condition" value="event">
                    <input type="hidden" name="search" value="지금 뜨는 상품들">
                    <input type="submit" value="더 보러가기">
                </form>
            </div>

            <div class="sc-banner">
                <img src="images/sectionbanner.png">
            </div>

            <div class="pro-event">
                <p class="eventname">이 상품은 어때요?</p>

                <div class="pro-1">
                    <img class="pro_img" src="images/pro9.png">
                    <p class="pro_name">행복케넬 매직도어 7가지 사이즈</p>
                    <p class="pro_intro">다양한 사이즈 구비 완료</p>
                    <p class="pro_dis">13,300원</p>
                    <p class="pro_price">280,000원</p>
                </div>
                <div class="pro-1">
                    <img class="pro_img" src="images/pro10.png">
                    <p class="pro_name">[슈퍼주] 새 모이 간식</p>
                    <p class="pro_intro">기본 모이</p>
                    <p class="pro_price">3,380원</p>
                    <p class="pro_dis">3,380원</p>
                </div>
                <div class="pro-1">
                    <img class="pro_img" src="images/pro11.png">
                    <p class="pro_name">[앵무새 간식] 영양국수 4종</p>
                    <p class="pro_intro">천연색소 사용</p>
                    <p class="pro_price">3,450원</p>
                    <p class="pro_dis">3,450원</p>
                </div>
                <div class="pro-1">
                    <img class="pro_img" src="images/pro12.png">
                    <p class="pro_name">리프패럿 새장 날림장</p>
                    <p class="pro_intro">다양한 사이즈 구비 완료</p>
                    <p class="pro_price">10,200원</p>
                    <p class="pro_dis">10,200원</p>
                </div>
                <form action="search_product_list.php" method="post"><!--추가 11.16-->
                    <input type="hidden" name="condition" value="event">
                    <input type="hidden" name="search" value="이 상품은 어때요?">
                    <input type="submit" value="더 보러가기">
                </form>
            </div>
        </section>

            <?php include "footer.php";?>

    </body>
</html>