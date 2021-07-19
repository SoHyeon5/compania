<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <title>콤파니아</title>

            
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/header_tapmenu.js"></script>
        <script src="js/header_sliderbanner.js"></script>
        <link rel="stylesheet" href="css/jquery.bxslider.min.css">
        <script src="js/product_form(new).js"></script>
        <style>
            @import url(css/section_mn.css);
            @import url(css/header.css);
                
            #gallery_wrap{
                margin: 0 auto;
                width: 1400px;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include "header.php";?>
        </header>

        <section id="product_form">

            <div id="product_box">
                <h3 id="product_title">상품 등록</h3>
                <form  name="product_form" method="post" action="product_insert.php" enctype="multipart/form-data">
                     <ul id="product_form">
                        <li>
                            <span class="col1">상품 명 : </span>
                            <span class="col2"><input name="name" type="text"></span>
                        </li>
                        <li>
                            <span class="col1">가격 : </span>
                            <span class="col2"><input name="price" type="text"></span>
                        </li>
                        <div>카테고리
                            <select name = "animal">
                            <option value="">동물 분류</option>
                            <option value="강아지">강아지</option>
                            <option value="고양이">고양이</option>
                            <option value="새">새</option>
                            <option value="설치류">설치류</option>
                            <option value="파충류">파충류</option>
                            </select>
                            <select name = "category">
                            <option value="">카테고리 분류</option>
                            <option value="푸드">푸드</option>
                            <option value="외출용품">외출용품</option>
                            <option value="리빙">리빙</option>
                            <option value="미용/목욕">미용/목욕</option>
                            <option value="위생/배변">위생/배변</option>
                            </select>
                        </div>
        
                        <li>
                            <span class="col1">제품 소개 : </span>
                            <span class="col2"><textarea name="introduce"></textarea></span>
                        </li>	    	
                        <li id="text_area">	
                            <span class="col1">제품 정보 : </span>
                            <span class="col2">
                                <textarea name="information"></textarea>
                            </span>
                        </li>
                        <li>
                            <span class="col1"> 첨부 파일</span>
                            <span class="col2"><input type="file" name="upfile"></span>
                        </li>
                        </ul>
                    <ul class="buttons">
                        <li><button type="button" onclick="check_input()">완료</button></li>
                        <li><button type="button" onclick="location.href='product_list.php'">목록</button></li>
                    </ul>
                </form>
            </div> 
      
        </section>

        <footer>
            <?php include "footer.php";?>
        </footer>
    </body>
</html>