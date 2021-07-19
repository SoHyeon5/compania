<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <title>compania</title>
        <style>
            @import url(css/login.css);
        </style>    
        <script src="js/jquery.js"></script>
        <script src='http://code.jquery.com/jquery-3.3.1.js'></script>
        <script src="js/header_tapmenu.js"></script>
        <script type="text/javascript" src="./js/login.js"></script>
    </head>

    <body>
        <?php include "header.php";?>

        <section id="section_login">
            <div id="login_back">
                <div id="login_smallbox">
                    <p class="tx-login">회원 로그인<p>
                    <form  name="login_form" method="post" action="login.php">
                    <ul class="login-mn">
                        <li><input type="text" name="id" placeholder="아이디"></li>
                        <li><input type="password" id="pass" name="pass" placeholder="비밀번호"></li>
                    </ul>
                    </form>                   
                    <div class="login-ckbox">
                        <form name="login-ckbox" method="post" action="login.php">
                            <label><input type="checkbox" id="check" name="check" value="check">아이디 저장</label>
                        </form>
                    </div>
                    <div class="login-btn">
                        <a href="#"><p onclick="check_input()">로그인</p></a>
                    </div>
                    
                    <div class="login_idsc">
                        <ul class="login_idsc_tx">
                            <li><a href="id-search_index.php">아이디 찾기</a></li>
                            <li><span>|</span></li>
                            <li><a href="pass-search_index.php">비밀번호 찾기</a></li>
                            <li><span>|</span></li>
                            <li><a href="join_index.php">회원가입</a></li>
                    </div>
       
                    <div id="fast-login">
                        
                        <p>간편 로그인</p>
                        <a href="#"><img src="images/login-naver.jpg"></a>
                        <a href="#"><img src="images/login-facebook.jpg"></a>
                        <a href="#"><img src="images/login-kakao.jpg"></a>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </body>
</html>