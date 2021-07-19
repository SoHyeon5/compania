<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <title>compania</title>
        <style>
            @import url(css/qna-mobile.css);
        </style>    
        <script src="js/jquery.js"></script>
        <script src='http://code.jquery.com/jquery-3.3.1.js'></script>
        <script src="js/header_tapmenu.js"></script>
        <script src="js/QnA_oftenTap.js"></script>
        <script src="js/QnA_11tap.js"></script>
    </head>

    <body>

       <?php include "header.php";?>
    
        <section id="qna">
            <h3>자주 묻는 질문</h3>

            <div class="often-search">
                <p><span>카테고리 분류를 선택 해 주세요.</span></p>
                    <form action="search_qna.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="주문/결제">
                        <input type="submit" value="주문/결제">
                    </form>
                    <form action="search_qna.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="배송">
                        <input type="submit" value="배송">
                    </form>
                    <form action="search_qna.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="취소/반품/교환">
                        <input type="submit" value="취소/반품/교환">
                    </form>
                <p>찾으시는 질문이 없다면 <a href="Qnaone_index.php">1 : 1 질문</a>을 이용해 주세요.</span></p>
            </div>

            <ul id="qna_list">
            <li class="list-h">
               <p class="col1">번호</p>
               <p class="col2">카테고리</p>
               <p class="col3">제목</p>
               <p class="col4">작성자</p>
               <p class="col5">작성일</p>
               <p class="col6">조회</p>
            </li>
            <?php
                if (isset($_GET["page"]))
                    $page = $_GET["page"];
                else
                    $page = 1;

                $con = mysqli_connect("localhost", "user2", "12345", "compania");
                $sql = "select * from qna order by num desc";
                $result = mysqli_query($con, $sql);
                $total_record = mysqli_num_rows($result); // 전체 글 수

                $scale = 10;

                // 전체 페이지 수($total_page) 계산 
                if ($total_record % $scale == 0)     
                    $total_page = floor($total_record/$scale);      
                else
                    $total_page = floor($total_record/$scale) + 1; 
            
                // 표시할 페이지($page)에 따라 $start 계산  
                $start = ($page - 1) * $scale;      

                $number = $total_record - $start;

            for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
            {
                mysqli_data_seek($result, $i);
                // 가져올 레코드로 위치(포인터) 이동
                $row = mysqli_fetch_array($result);
                // 하나의 레코드 가져오기
                $num         = $row["num"];
                $id          = $row["id"];
                $name        = $row["name"];
                $category    = $row["category"];
                $subject     = $row["subject"];
                $regist_day  = $row["regist_day"];
                $hit         = $row["hit"];
            ?>
            <li class="list-t">
               <p class="col1"><?=$number?></p>
               <p class="col2"><?=$category?></p>
               <p class="col3"><a href="QnA_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></p>
               <p class="col4"><?=$name?></p>
               <p class="col5"><?=$regist_day?></p>
               <p class="col6"><?=$hit?></p>
            </li>   
            <?php
                $number--;
            }
                mysqli_close($con);

            ?>
        </ul> <!--QnA_list-->
        <ul id="page_num">    
            <?php
                if ($total_page>=2 && $page >= 2)   
                {
                    $new_page = $page-1;
                    echo "<li><a href='QnA_index.php?page=$new_page'>◀ 이전</a> </li>";
                }      
                else 
                    echo "<li>&nbsp;</li>";

                // 게시판 목록 하단에 페이지 링크 번호 출력
                for ($i=1; $i<=$total_page; $i++)
                {
                    if ($page == $i)     // 현재 페이지 번호 링크 안함
                    {
                        echo "<li><b> $i </b></li>";
                    }
                    else
                    {
                        echo "<li><a href='QnA_index.php?page=$i'> $i </a><li>";
                    }
                }
                if ($total_page>=2 && $page != $total_page)      
                {
                    $new_page = $page+1;   
                    echo "<li> <a href='QnA_index.php?page=$new_page'>다음 ▶</a> </li>";
                }
                else 
                    echo "<li>&nbsp;</li>";
            ?>
        </ul> <!-- page -->          
                </div>  <!--often box-->
            </div>
        </section>

        <?php include "footer.php";?>

    </body>
</html>