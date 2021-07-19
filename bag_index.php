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
        
        <style>
            @import url(css/bag.css);

        </style>


    </head>
    <body>
            <?php include "header.php";?>

        <section id="bag">
            <div>
                <h3>장바구니</he>
            </div>   

            <div id="bag-box">
                <div id="bag-box_top">
                    <input type="check" name="">
                    <p>전체선택</p>
                    <button>선택 삭제</button>
                </div>

                <div id="bag-box_mid">
                    <div class="bag-1">
                        <input type="check" name=""><p>선택</p>
                        <div class="bagpro-1">
                            <img>
                            <div>
                                <p class="proname">상품이름</p>
                                <p class="event">행사내용</p>
                                <p class="origin">원가</p>
                                <p class="price">할인가</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <?php include "footer.php";?>

    </body>
</html>