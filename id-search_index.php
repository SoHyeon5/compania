<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <title>compania</title>
        <style>
            @import url(css/id-search_mobile.css);
        </style>    
        <script src="js/jquery.js"></script>
        <script src='http://code.jquery.com/jquery-3.3.1.js'></script>
        <script src="js/header_tapmenu.js"></script>
        <script type="text/javascript" src="./js/login.js"></script>

    </head>

    <body>
        <?php include "header.php";?>

        <section id="id-search">
            <h3>아이디 찾기</h3>
            <div id="search_box">
                <div class="search-top">
                    <ul>
                        <li class="ck_email">이메일</li>
                        <li class="ck_num"><a href="id-search2_index.php">휴대폰 번호</a></li>
                    </ul>
                </div>
                <div class="search-mid">
                    <form action="search_member_id.php" method="post"><!--수정 추가 11.19-->
                        <div class="search-email">
                            <ul>
                                <li class="search-h">> 이름</li>
                                <li class="search-t"> <input type="textarea"></li>
                            </ul>
                            <ul>
                                <li class="search-h">> 이메일로 찾기</li>
                                <li class="search-t">
                                    <input type="hidden" name="condition" value="email">
                                    <input type="text" name="search" placeholder=" 가입한 이메일로 입력해주세요">
                                </li>
                            </ul>
                        </div>
                </div>
                <div id="search-bottom">
                    <button class="search_id">아이디 찾기</button>
                    
                </form>

                    <button class="search_pass"><a href="pass-search_index.php">비밀번호 찾기</a></button>
                </div>
            </div>
        </section>

        <footer>
            <?php include "footer.php"?>
        </footer>
    </body>
</html>