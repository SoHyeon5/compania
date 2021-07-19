<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
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
            @import url(css/mypage.css);
        </style>


    </head>
    <body>
        <?php include "header.php";?>
        
        <section id="mypage">
            <h3>마이페이지</h3>

            <div class="mypage-total">
                <div id="mypage-top">
                    <div class="my-img">
                        <img src="images/member.png"><!--기본이미지-->
                    </div>
                    <div class="my-btn">
                        <button class="my-modify">수정</button>
                    </div>
                </div>

                <div id="mypage-bottom">
                    <div class="my-box">
                        <p>아이디</p>
                        <p><?=$userid?></p>
                    </div>
                    <div class="my-box">
                        <p>이름</p>
                        <p><?=$userid?></p>
                    </div>

                    <form  name="admin_QnAone_form" method="post"action="mypage_modify.php">
                    <div class="my-box">
                        <p>비밀번호</p>
                        <input name="pass" type="text">
                        <button class="my-modify" type="post">수정</button>
                    </div>
                    </form>

                    <form  name="admin_QnAone_form" method="post"action="mypage_modify.php">
                    <div class="my-box">
                        <p>휴대전화</p>
                        <input name="tel" type="text">
                        <button class="my-modify" type="post">수정</button>
                    </div>
                    </form>
                    
                    <form  name="admin_QnAone_form" method="post"action="mypage_modify.php">
                    <div class="my-box">
                        <p>반려동물 이름</p>
                        <input name="animal_name" type="text">
                        <button class="my-modify" type="post">수정</button>
                    </div>
                    </form>

                    <form  name="admin_QnAone_form" method="post"action="mypage_modify.php">
                    <div class="my-box">
                        <p>반려동물 종</p>
                        <input name="animal_sort" type="text">
                        <button class="my-modify" type="post">수정</button>
                    </div>
                    </form>
                </div>
            </div>
        </section>

            <?php include "footer.php";?>

    </body>
</html>