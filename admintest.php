<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>compania</title>

        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/header_sliderbanner.js"></script>
        <script src="js/header_tapmenu.js"></script>
        <link rel="stylesheet" href="css/jquery.bxslider.min.css">

        <style>
            @import url(css/admin-mobile.css);
            @import url(css/admin-tablet.css);
            @import url(css/admin-web.css);
        </style>

        <script> 
            //회원관리 div    
            $(function(){
                    $(".admin-open1").on("click", function( ) {
                        $("#member_list").slideToggle(0, "linear");
                        $(".admin-open1").hide();
                        $(".admin-close1").show();
                    });
                })
                $(function(){
                    $(".admin-close1").on("click", function( ) {
                        $("#member_list").slideToggle(0, "linear");
                        $(".admin-close1").hide();
                        $(".admin-open1").show();
                    });
                })
            //상품관리 div
            $(function(){
                    $(".admin-open2").on("click", function( ) {
                        $("#adminbox2").slideToggle(0, "linear");
                        $(".admin-open2").hide();
                        $(".admin-close2").show();
                    });
                })
                $(function(){
                    $(".admin-close2").on("click", function( ) {
                        $("#adminbox2").slideToggle(0, "linear");
                        $(".admin-close2").hide();
                        $(".admin-open2").show();
                    });
                })
            //1:1문의 div
            $(function(){
                    $(".admin-open3").on("click", function( ) {
                        $("#adminbox3").slideToggle(0, "linear");
                        $(".admin-open3").hide();
                        $(".admin-close3").show();
                    });
                })
                $(function(){
                    $(".admin-close3").on("click", function( ) {
                        $("#adminbox3").slideToggle(0, "linear");
                        $(".admin-close3").hide();
                        $(".admin-open3").show();
                    });
                })
            //어쩌구
            $(function(){
                    $(".admin-open4").on("click", function( ) {
                        $("#adminbox4").slideToggle(0, "linear");
                        $(".admin-open4").hide();
                        $(".admin-close4").show();
                    });
                })
                $(function(){
                    $(".admin-close4").on("click", function( ) {
                        $("#adminbox4").slideToggle(0, "linear");
                        $(".admin-close4").hide();
                        $(".admin-open4").show();
                    });
                })
        </script>

    </head>
        <body> 
        
            <?php include "header.php";?>
       
        <section>
            <div id="admin_box">
                <div id="admin-member">
                    <div id="admin-title">
                        <h3>관리자 모드 > 회원 관리</h3>
                        <button class="admin-open1">열기</button>
                        <button class="admin-close1">닫기</button>
                    </div>

                    <ul id="member_list">
                        <li class="list-table">
                            <p class="col1">번호</p>
                            <p class="col2">아이디</p>
                            <p class="col3">이름</p>
                            <p class="col4">레벨</p>
                            <p class="col6">가입일</p>
                        </li>
                            
                            <?php
                            $con = mysqli_connect("localhost", "user2", "12345", "compania");
                            $sql = "select * from members order by num desc";
                            $result = mysqli_query($con, $sql);
                            $total_record = mysqli_num_rows($result); // 전체 회원 수

                            $number = $total_record;

                            while ($row = mysqli_fetch_array($result))
                            {
                                $num         = $row["num"];
                                $id          = $row["id"];
                                $name        = $row["name"];
                                $level       = $row["level"];
                                $regist_day  = $row["regist_day"];
                            ?>
                
                        <li class="list-table">
                            <form method="post" action="admin_member_update.php?num=<?=$num?>">                            
                                <p class="col1"><?=$number?></p>
                                <p class="col2"><?=$id?></p>
                                <p class="col3"><?=$name?></p>
                                <p class="col4"><input type="text" name="level" value="<?=$level?>"></p>
                                <p class="col6"><?=$regist_day?></p>
                                <span class="col7"><button type="submit">수정</button></span>
                                <span class="col8"><button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>'">삭제</button></span>
                            </form>
                        </li>   
                                    
                        <?php
                            $number--;
                            }
                        ?>
                    </ul>
                </div><!--admin memeber-->

                <div id="admin-product">
                    <div id="admin-title">
                        <h3>관리자 모드 > 상품 관리</h3>
                        <button class="admin-open2">열기</button>
                        <button class="admin-close2">닫기</button>
                    </div>
                    
                    <div id="adminbox2">

                            <form method="post" action="admin_product_delete.php">
                                <ul id="board_list"> 
                                    <?php
                                        if (isset($_GET["page"]))
                                            $page = $_GET["page"];
                                        else
                                            $page = 1;

                                            $con = mysqli_connect("localhost", "user2", "12345", "compania");
                                            $sql = "select * from product order by num desc";
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
                                                $animal      = $row["animal"];
                                                $category    = $row["category"];
                                                $name        = $row["name"];
                                                $price       = $row["price"];
                                            ?>
                                    <div>
                                        <li class="board-one">
                                            <p class="num"><?=$num?></p>
                                            <p class="pro_animal"><?=$animal?></p>
                                            <p class="pro_category"><?=$category?></p>
                                            <span class="pro_name"><a href="admin_product_view.php?num=<?=$num?>&page=<?=$page?>"><?=$name?></a></span>
                                            <p class="pro_price"><?=$price?></p>
                                        </li>   
                                        <li>
                                            <span class="col1"><input type="checkbox" name="item[]" value="<?=$num?>"></span>
                                        </li>
                                    </div>
    
                                    <?php
                                            $number--;      
                                        }
                                        mysqli_close($con);
                                    ?>
                                </ul><!--#boader_list-->
                            

                                <ul id="page_num">    
                                    <?php
                                        if ($total_page>=2 && $page >= 2)   
                                        {
                                            $new_page = $page-1;
                                            echo "<li><a href='product_list.php?page=$new_page'>◀ 이전</a> </li>";
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
                                                echo "<li><a href='product_list.php?page=$i'> $i </a><li>";
                                            }
                                            }
                                            if ($total_page>=2 && $page != $total_page)      
                                            {
                                            $new_page = $page+1;   
                                            echo "<li> <a href='product_list.php?page=$new_page'>다음 ▶</a> </li>";
                                        }
                                        else 
                                            echo "<li>&nbsp;</li>";
                                    ?>
                                </ul> <!-- page -->       
                        

                                <div class="buttons1">    
                                    <button class="pro-del" type="submit">선택된 상품 삭제</button>
                                </div>    
                            </form>
                            <form method="post" action="product_form.php">
                                <div class="buttons2">    
                                            <?php 
                                                if($userid) {
                                            ?>
                                                    <button class="pro-upload" onclick="location.href='product_form.php'">상품 등록 바로가기</button>
                                            <?php
                                            } else {
                                            ?>
                                                        <a href="javascript:alert('로그인 후 이용해 주세요!')"><button>상품 등록</button></a>
                                            <?php
                                            }
                                            ?>
                                        
                                </div>
                            </form>
                    </div><!--adminbox2-->
                </div><!--admin-product-->

                <div id="admin-one">
                    <div id="admin-title">
                        <h3>관리자 모드 > 1 : 1 게시판 관리</h3>
                        <button class="admin-open3">열기</button>
                        <button class="admin-close3">닫기</button>
                    </div>
                    
                    <div id="adminbox3">
                        <form method="post" action="admin_QnAone_delete.php">
                            <ul id="member_list">
                                <li class="list-table">
                                    <p class="col1">번호</p>
                                    <p class="col2">작성자</p>
                                    <p class="col3">제목</p>
                                    <p class="col4">작성일</p>
                                </li>
                                    
                                        <?php
                                            if (isset($_GET["page"]))
                                                $page = $_GET["page"];
                                            else
                                                $page = 1;

                                            $con = mysqli_connect("localhost", "user2", "12345", "compania");
                                            $sql = "select * from qnaone order by num desc";
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
                                                $title       = $row["title"];
                                                $regist_day  = $row["regist_day"];
                                        ?>
                        
                                <li class="list-table">
                                        <p class="col1"><?=$number?></p>
                                        <p class="col2"><?=$id?></p>
                                        <p class="col3"><a href="admin_QnAone_view.php?num=<?=$num?>&page=<?=$page?>"><?=$title?></a></p>
                                        <p class="col4"><?=$regist_day?></p>                                
                                </li>
                                <li class="one-check">
                                    <span class="col1"><input type="checkbox" name="qnaone[]" value="<?=$num?>"></span>
                                </li>
                            <?php
                                $number--;
                                    }
                                mysqli_close($con);
                            ?>
                            </ul>
                        </div><!--admin-one-->

                        <div>
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
                                </ul> 
                            </div><!--page-->     
                            <div class="buttons1">    
                                <button class="listdel" type="submit">선택된 글 삭제</button>
                            </div>  
                        </form>
                    </div><!--adminbox3-->


                    <div id="admin-qna">
                        <div id="admin-title">
                            <h3>관리자 모드 > QnA 자주 묻는 질문 관리</h3>
                            <button class="admin-open4">열기</button>
                            <button class="admin-close4">닫기</button>
                        </div>
                    
                    <div id="adminbox4">
                        <form method="post" action="admin_QnAone_delete.php">
                            <ul id="member_list">
                                <li class="list-table">
                                    <p class="col1">번호</p>
                                    <p class="col2">작성자</p>
                                    <p class="col3">제목</p>
                                    <p class="col4">작성일</p>
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
                                            $name          = $row["name"];
                                            $subject       = $row["subject"];
                                            $regist_day  = $row["regist_day"];
                                    ?>

                                <li class="list-table">
                                        <p class="col1"><?=$num?></p>
                                        <p class="col2"><?=$name?></p>
                                        <p class="col3"><?=$subject?></p>
                                        <p class="col4"><?=$regist_day?></p>                               
                                </li>
                                <li class="one-check">
                                    <span class="col1"><input type="checkbox" name="qna[]" value="<?=$num?>"></span>
                                </li>
                            <?php
                                $number--;
                                    }
                                mysqli_close($con);
                            ?>
                            </ul>
                        </div><!--admin-qna-->

                        <div>
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
                                </ul> 
                            </div><!--page-->     
                            <div class="buttons1">    
                                <button class="listdel" type="submit">선택된 글 삭제</button>
                            </div>
                            <div class="buttons3">
                                <button class="pro-upload" onclick="location.href='admin_QnA_form.php'">질문 등록 바로가기</button>                    
                            </div>  
                        </form>
                    </div><!--adminbox4-->

            </div><!--adminbox 전체선택-->
        </section> 

        <?php include "footer.php";?>

    </body>
</html>