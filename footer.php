<style>
    @import url(css/footer-tablet.css);
    @import url(css/footer-mobile.css);
    @import url(css/footer-web.css);

    a{
        color:rgba(30,60,89);
        text-decoration:none;
    }
</style>

<footer>
    <div id="ft-box">
        <div id="ft-menu">
            <ul class="ft-big">
                <li class="ft-menu"><span>PRODUCT</span></li>
                <li class="ft-menu">
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="푸드">
                        <input class="foottx" type="submit" value="푸드">
                    </form>
                </li>
                <li class="ft-menu">
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="리빙">
                        <input class="foottx" type="submit" value="리빙">
                    </form>
                </li>
                <li class="ft-menu">
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="장난감">
                        <input class="foottx" type="submit" value="장난감">                        
                    </form>
                </li>
                <li class="ft-menu">
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="미용/목욕">
                        <input class="foottx" type="submit" value="미용/목욕">
                    </form>
                </li>
                <li class="ft-menu">
                    <form action="search_product_list.php" method="post">
                        <input type="hidden" name="condition" value="category">
                        <input type="hidden" name="search" value="위생/배변">
                        <input class="foottx" type="submit" value="위생/배변">
                    </form>
                </li>
            </ul>
            <ul class="ft-big">
                <li class="ft-menu"><span>COMPANY INFO</span></li>
                <li class="ft-menu"><a href="compania-info.php">COMPANIA 소개</a></li>
                <li class="ft-menu"><a href="compania-job.php">채용 공고</a></li>
                <li class="ft-menu"><a href="compania-com.php">제휴/도매/입점 안내</a></li>                         
            </ul>
            <ul class="ft-big">
                <li class="ft-menu"><span>ACCOUNT</span></li>
                <li class="ft-menu"><a href="join_index.php">회원가입/로그인</a></li>
            </ul>
            <ul class="ft-big">
                <li class="ft-menu"><span>SUPPORT</span></li>
                <li class="ft-menu"><a href="QnAone_index.php">1 : 1 문의</a></li>
                <li class="ft-menu"><a href="QnA_index.php">FAQ</a></li>
                <li class="ft-menu">매장안내</li>
                <li class="ft-menu">구매 이용약관</li>
            </ul>
            <ul class="ft-big">
                <li class="ft-menu"><span>SOCIAL</span></li>
                <li class="ft-menu">인스타그램</li>
                <li class="ft-menu">페이스북</li>
                <li class="ft-menu">트위터</li>
                <li class="ft-menu">카카오톡</li>
            </ul>
        </div>
        
        <hr style="border:solid 0.25px rgba(30,60,89);">
                <!--라인 추가-->
        <div id="ft-ex">
            <p class="ft-left">ⓒCOMPANIA. ALL. RIGHTS RESERVED.</p>
            <ul class="ft-right">
                <li>구매 이용약관</li>
                <li>|</li>
                <li>개인정보 처리방침</li>
                <li>|</li>
                <li>사업자 정보 확인</li>
                <li>|</li>
                <li>공정거래 자율 준수</li>
            </ul>        
        </div>
    </div>            
</footer>