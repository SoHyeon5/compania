<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
       <title>compania</title>
       
        <style>
            @import url(css/product_form-mobile.css);
            @import url(css/product_form-tablet.css);
        </style>
        
        <script>
            function check_input() {
                if (!document.product_form.name.value)
                {
                    alert("상품 명을 입력하세요!");
                    document.product_form.name.focus();
                    return;
                }
                if (!document.product_form.price.value)
                {
                    alert("원가를 입력하세요!");    
                    document.product_form.price.focus();
                    return;
                }
                if (!document.product_form.sum_introduce.value)
                {
                    alert("제품 소개를 입력하세요!");    
                    document.product_form.sum_introduce.focus();
                    return;
                }
                if (!document.product_form.information.value)
                {
                    alert("제품 정보를 입력하세요!");    
                    document.product_form.information.focus();
                    return;
                }
                document.product_form.submit();
            }
        </script>      
    </head>
    <body> 
        <?php include "header.php";?>

        <section id="product_form">    
            <div id="product_form-top">
                <div id="product-img">
                    <img src="images/hammeal.jpg">        
                </div>
                <form  name="product_form" method="post" action="product_insert.php" enctype="multipart/form-data">
                <div id="product-text">    
                    <input class="Pro_name" name="name" type="text" placeholder="상품 명">
                    <input class="Pro_price" name="dis_price" type="text" placeholder="세일가">
                    <input class="Pro_orilgn" name="price" type="text" placeholder="원가">

                    <table class="Pro_table">
                        <tr><th>제품 소개1</th> <td><textarea rows="3" name="sum_introduce" placeholder="제품 소개를 간략히 입력 해 주세요."></textarea></td></tr>
                        <tr><th>브랜드</th> <td><textarea rows="1" name="brand" placeholder="브랜드명을 입력 해 주세요."></textarea></td></tr>
                        <tr><th>권장 급여시기</th> <td><textarea rows="2" name="recommended_time" placeholder="권장 급여 시기를 입력 해 주세요."></textarea></td></tr>
                        <tr><th>판매사이트 링크</th> <td><textarea rows="2" name="link" placeholder="판매사이트 링크를 입력 해 주세요."></textarea></td></tr>
                    </table>
                </div>
            </div>

            <div id="product_form-bottom">
                    <div id="Pro-category">
                        <ul class="search_category">
                            <li>
                                <select name = "event"><!--추가-->
                                    <option value="">이벤트</option>
                                    <option value="행사중인 상품">행사중인 상품</option>
                                    <option value="뜨는 상품들">뜨는 상품들</option>
                                    <option value="이 상품은 어때요?">이 상품은 어때요?</option>
                                </select>
                                <select name="animal">
                                    <option value="">동물 분류</option>
                                    <option value="강아지">강아지</option>
                                    <option value="고양이">고양이</option>
                                    <option value="새">새</option>
                                    <option value="설치류">설치류</option>
                                    <option value="파충류">파충류</option>
                                </select>
                                <p> > </p>
                                <select name = "category">
                                    <option value="">카테고리 분류</option>
                                    <option value="푸드">푸드</option>
                                    <option value="외출용품">외출용품</option>
                                    <option value="리빙">리빙</option>
                                    <option value="미용/목욕">미용/목욕</option>
                                    <option value="위생/배변">위생/배변</option>
                                </select>           
                                 <select name = "category_f"><!--추가-->
                                    <option value="">푸드 분류</option>
                                    <option value="사료">사료</option>
                                    <option value="간식">간식</option>
                                    <option value="영양제">영양제</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="product_infor">
                        <div>
                            <p>제품 소개</p>
                            <textarea class="Pro_intro" rows="2" name="introduce"></textarea>
                        </div>
                        <div>
                            <p>제품 정보</p>
                            <textarea class="Pro_infor" rows="7" name="information">                    
    성분등록번호 : 
    사료의 명칭 : 
    사료의 용도 : 
    사료의 형태 : 
    실 용량 : 
    제조년원일 : 
    유통기한 : 

    그 외 제품 관련 정보가 있다면 추가 작성 해 주세요.
                            </textarea>
                        </div>
                        
                        <div>
                            <p>제품 등록 성분</p>                    
                            <div class="ingre">
                                <ul>
                                    <li>조단백</li>
                                    <li>조지방</li>
                                    <li>조섬유</li>
                                    <li>조회분</li>
                                    <li>칼슘</li>
                                    <li>인</li>
                                    <li>수분</li>
                                </ul>
                                <ul>
                                    <li><input type="text" name="component_a"></li>
                                    <li><input type="text" name="component_b"></li>
                                    <li><input type="text" name="component_c"></li>
                                    <li><input type="text" name="component_d"></li>
                                    <li><input type="text" name="component_e"></li>
                                    <li><input type="text" name="component_f"></li>
                                    <li><input type="text" name="component_g"></li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <p>주재료 및 첨가제 분석</p>
                            <div class="Pro_bar">
                                <p>성분 구성</p>
                                <prograss>
                            </div>
                        </div>
                        <p>1일 권장 급여량</p>
                        <textarea class="Pro_peeding"  rows="3" name="daily_recommend"></textarea>
                        <p>보관 및 사용 방법</p>
                        <textarea class="Pro_storage"  rows="3" name="way"></textarea>
                        <p>주의사항</p>
                        <textarea class="Pro_caution"  rows="3" name="precautions"></textarea>
                        <p>첨부 파일</p>
                        <input type="file" name="upfile">
                    </div>
                    <ul class="Pro_buttons">
                        <li><button type="button" onclick="check_input()">완료</button></li>
                        <li><button type="button" onclick="location.href='product_list.php'">목록</button></li>
                    </ul>
                </form> 
            </div>
        </section>

        <?php include "footer.php";?>
    </body>
</html>