<style>
    @import url(css/header-mobile.css);
    @import url(css/header-tablet.css);
    @import url(css/header-webtest.css);

    @import url('https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Gothic+A1:700');

    header,section, button, input, a, li, p{
        font-family:'Gothic A1', sans-serif;
    }

</style>

<script src="js/jquery.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/header_sliderbanner.js"></script>
<script src="js/header_tapmenu.js"></script>
<script>
    $(function(){
            $(".mob-btn_open").on("click", function() {
                $("#mobiletap").show(500);
                $(".mob-btn_open").hide();
                $(".mob-btn_close").show();
            });
            $(".mob-btn_close").on("click", function(){
                $("#mobiletap").hide(500);
                $(".mob-btn_close").hide();
                $(".mob-btn_open").show();
            });
        })
    $(function(){
        $(".mob-searchtap_open").on("click", function(){
            $("#mob-searchBar").slideToggle(1000, "linear");  
        });
    })
    $(function(){
        $(".topbanner_x").on("click", function(){
            $("#topbanner").hide();
            $(".topbanner_x").hide();
        })
    })
</script>


<header>
    <div id="topbanner_box">
        <div id="topbanner">
            <p>지인 초대하고 최대 50% 할인쿠폰 발급받아가기~! </p>
        </div>
    </div>

    <div id="mobiletap">        
        <div id="mob-info">    
            <?php
                session_start();
                if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
                else $userid = "";
                if (isset($_SESSION["username"])) $username = $_SESSION["username"];
                else $username = "";
                if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
                else $userlevel = "";
            ?>
                
            <?php
                if(!$userid) {
            ?> 
                <ul class="mob-bf"> <!--로그인 전-->
                    <li>
                        <a href="login_index.php" class="bf-login">로그인</a>
                    </li>
                    <li>
                        <a href="join_index.php" class="bf-join">회원가입</a>
                    </li>
                </ul>
            <?php
                } else {
                        $logged = $username."(".$userid.")님";
            ?>
                    <ul class="mob-af"><!--로그인 후-->
                        <li class="mob-myinfo"><a href="mypage_index.php">마이페이지</a></li><!--수정 11.18-->
                    </ul>            

            
        </div>

        <div id="mob-my">
            <ul>
                <img class="mob-myimg" src="images/member.png"></img>
                <li class="mob-myname"><?=$logged?></li>
                <li class="mob-welcome">반갑습니다</li>
                <li class="mob-logout"><a href="logout.php">로그아웃</a></li>
            </ul>
            <?php
                }
            ?>
            <?php
            if($userlevel==1) {
            ?>
                <p class="mob-adminmode"><a href="admin.php">관리자모드</a></p>
            <?php
                }
            ?>
            
        </div>
        

        <div id="mob-menu"><!-- mob-menu 수정 11.18 -->
            <ul class="mob-menu-text"><p>품종별</p>
                <li>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="강아지">
                        <input class="inputtx" type="submit" value="강아지">
                    </form>
                </li>
                <li>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="고양이">
                        <input class="inputtx" type="submit" value="고양이">
                    </form>
                </li>
                <li>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="조류">
                        <input class="inputtx" type="submit" value="조류">
                    </form>
                </li>
                <li>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="설치류">
                        <input class="inputtx" type="submit" value="설치류">
                    </form>
                </li>
                <li>
                    <form acdtion="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="파충류">
                        <input class="inputtx" type="submit" value="파충류">
                    </form>
                </li>
            </ul>

            <ul class="mob-menu-text"><p>품목별</p>
                <li>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="푸드">
                        <input class="inputtx" type="submit" value="푸드">
                    </form>

                    <ul class="mob-menu-text_s">
                        <li>
                            <form action="search_product_list.php" method="post">
                                <input type="hidden" name="condition" value="category_f">
                                <input type="hidden" name="search" value="사료">
                                <input class="inputtx_s" type="submit" value="사료">
                            </form>
                        </li>
                        <li>   
                            <form action="search_product_list.php" method="post">
                                <input type="hidden" name="condition" value="category_f">
                                <input type="hidden" name="search" value="간식">
                                <input class="inputtx_s" type="submit" value="간식">
                            </form>
                        </li>   
                        <li>
                            <form action="search_product_list.php" method="post">
                                <input type="hidden" name="condition" value="category">
                                <input type="hidden" name="search" value="영양제">
                                <input class="inputtx_s" type="submit" value="영양제">
                            </from>
                        </li>   
                    </ul>
                </li>

                <li class="living"><!-- 수정 11.18 -->
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="리빙">
                        <input class="inputtx" type="submit" value="리빙">
                    </form>
                </li>
                <li>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="장난감">
                        <input class="inputtx" type="submit" value="장난감">                        
                    </form>
                </li>
                <li>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="미용/목욕">
                        <input class="inputtx" type="submit" value="미용/목욕">
                    </form>
                </li>
                <li>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="위생/배변">
                        <input class="inputtx" type="submit" value="위생/배변">
                    </form>
                </li>
            </ul>
            <ul class="mob-menu-text"> <!-- 수정 11.18-->
                <p class="lastmenu"><a style="color:red" href="QnA_index.php">Q & A</a></p>
            </ul>
        </div>    
    </div>

    <div id="mn-tap">
        <p class="mob-btn_open"><img src="images/menutap.png"></p>
        <p class="mob-btn_close"><img src="images/menutap.png"></p>
    </div>
    
    <div id="mn-top">
        <div id="mn-logo">
            <a href="main_index.php"><img class="compania_logo" src="images/compania_logo.png"></a>
            
            <button class="mob-searchtap_open"></button>
            <div id="mob-searchBar"><!--수정 추가 11.18-->
                <form action="search_product_list.php" method="post">
                    <input type="hidden" name="condition" value="name">
                    <input class="input_Search" type="text" name="search" placeholder="   찾으시는 상품명을 입력하세요">
                    <button type="submit" class="btn_Search"><img src="images/searchbtn.png"></button>
                </form>
            </div>            
        </div>
        
        
        <div id="mn-info">
            <?php
                if(!$userid) {
            ?> 
                        <ul id="bef-info"> <!--로그인 전-->
                            <li class="element-text">
                                <a href="login_index.php" class="login">로그인</a>
                            </li>
                            <li class="element-text">
                                <a href="join_index.php" class="join">회원가입</a>
                            </li>
                        </ul>
            <?php
                } if($userlevel==9) {
                            $logged = $username."(".$userid.") [Level:".$userlevel."] 님 반갑습니다!";
            ?>    
                        <ul id="aft-info"><!--로그인 후-->
                            <li class="element-text"><a href="logout.php" class="logout">로그아웃</a></li>
                            <li class="element-text"><a href="mypage_index.php" class="mypage">마이페이지</a></li>
                        </ul>
                        <ul id="aft-block">
                            <li class = "web-element-text_welcome"><?=$logged?> </li>
                        </ul>

                <?php
                    } if($userlevel==1) {
                            $logged = $username."(".$userid.") [Level:".$userlevel."] 님 반갑습니다!";
                ?>          
                        <ul id="aft-admin">
                            <li class="element-text"><a href="logout.php" class="logout">로그아웃</a></li>
                            <li class="element-text"><a href="admin.php" class="myinfo">관리자모드</a></li>
                        </ul>
                        <ul id="aft-block">
                            <li class = "web-element-text_welcome"><?=$logged?> </li>
                        </ul>
                <?php
                    }
                ?>
        </div>

       
        <div id="mn-searchBar"><!--수정 11.18-->
            <form action="search_product_list.php" method="post">
                <input type="hidden" name="condition" value="name">
                <input class="input_Search" type="text" name="search" placeholder="   찾으시는 상품명을 입력하세요">
                <button type="submit" class="btn_Search"><img src="images/searchbtn.png"></button>
            </form>
        </div>
    </div>
    <div id="mn-menu">
           <!--
            <div class="menu-cycle_hover">
                <p><button><img class="cycle-img_hover" src="images/cycle_dog_hover.jpg"></button></p>
                <p><button><img class="cycle-img_hover" src="images/cycle_dog_hover.jpg"></button></p>
                <p><button><img class="cycle-img_hover" src="images/cycle_dog_hover.jpg"></button></p>
                <p><button><img class="cycle-img_hover" src="images/cycle_dog_hover.jpg"></button></p>
                <p><button><img class="cycle-img_hover" src="images/cycle_dog_hover.jpg"></button></p>
            </div>
            -->
            <div class="menu-cycle">
                <div>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="강아지">
                        <button type="submit" value="강아지"><img src="images/cycle_dog.png"></button>
                    </form>
                </div>
                <div>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="고양이">
                        <button type="submit" value="고양이"><img src="images/cycle_cat.png"></button>
                    </form>
                </div>
                <div>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="조류">
                        <button type="submit" value="조류"><img src="images/cycle_bird.png"></button>
                    </form>
                </div>
                <div>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="설치류">
                        <button type="submit" value="설치류"><img src="images/cycle_ham.png"></button>
                    </form>
                </div>
                <div>
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="animal">
                        <input type="hidden" name="search" value="파충류">
                        <button type="submit" value="파충류"><img src="images/cycle_camel.png"></button>
                    </form>
                </div>
            </div>

            <div id="menu-text">
                <ul class="menu-element-text"><!--추가-->
                    <li><a href="product_list.php"><span style="font-weight: bolder;">전체보기</span></a></li>
                    <li>
                        <form action="search_product_list.php" method="post">
                            <input type="hidden" name="condition" value="category">
                            <input type="hidden" name="search" value="푸드">
                            <input type="submit" value="푸드">
                        </form>
                        
                        <ul class="menu-element-text_s">
                            <form action="search_product_list.php" method="post">
                                <input type="hidden" name="condition" value="category_f">
                                <input type="hidden" name="search" value="사료">
                                <input type="submit" value="사료">
                            </form>
                            <form action="search_product_list.php" method="post">
                                <input type="hidden" name="condition" value="category_f">
                                <input type="hidden" name="search" value="간식">
                                <input type="submit" value="간식">
                            </form>
                            <form action="search_product_list.php" method="post">
                                <input type="hidden" name="condition" value="category">
                                <input type="hidden" name="search" value="영양제">
                                <input type="submit" value="영양제">
                            </from>
                        </ul>
                    </li>
                    <li class="living">
                        <form action="search_product_list.php" method="post">
                            <input type="hidden" name="condition" value="category">
                            <input type="hidden" name="search" value="리빙">
                            <input type="submit" value="리빙">
                        </form>
                    </li>
                    <li>
                        <form action="search_product_list.php" method="post">
                            <input type="hidden" name="condition" value="category">
                            <input type="hidden" name="search" value="장난감">
                            <input type="submit" value="장난감">
                        </form>
                    </li>
                    <li>
                        <form action="search_product_list.php" method="post">
                            <input type="hidden" name="condition" value="category">
                            <input type="hidden" name="search" value="미용/목욕">
                            <input type="submit" value="미용/목욕">
                        </form>
                    </li>
                    <li>
                        <form action="search_product_list.php" method="post">
                            <input type="hidden" name="condition" value="category">
                            <input type="hidden" name="search" value="위생/배변">
                            <input type="submit" value="위생/배변">
                        </form>
                    </li>
                    <li><a href="QnA_index.php"><span style="color: red;">Q & A</span></a></li>
                </ul>
            </div>

            
            <!-- <div id="menu-box">
                <ul class="menu-box-ham">
                    <li class="txbox" href="#">#햄스터</li>
                    <li class="txbox" href="#">#토끼</li>
                </ul>
                <ul class="menu-box-camel">
                    <li class="txbox" href="#">#카멜레온</li>
                    <li class="txbox" href="#">#뱀</li>
                </ul>
            </div> -->
    </div>
</header>