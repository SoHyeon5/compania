<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>관리자 login_form</title>
<style>
    .html{
        margin: 0;
        padding: 0;
        font-size: 13px;
    }
    body {
        background-color: rgb(1, 165, 141);
    }
    ul{
        display: inline-block;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    a{
        text-decoration: none;
        display: inline-block;
    }
    .content{
        text-align: center;
        padding: 0;
        display: block;
        margin-top: 50px;
    }
    .main_box{
        display: inline-block;
        width: 450px;
        height: 650px;
        margin: 0;
        background-color: white;
        text-align: center;
        border: solid 0.5px;
        border-radius: 6px;
    }
    .logo_img{
        margin-top: 60px;
        margin-bottom: 0px;
        margin-right: 50px;
        margin-left: 80px;
        float: left;
    }
    .logo_box{
        display: block;
    }
    .seller_login {
        font-size: 30px;
        float: left;
        text-align: left;
        margin: 0;
        padding: 0;
        margin-top: 30px;
        margin-left: 90px;
        background-color: white;
        width: 200px;
        height:50px;
        display: block;
    }
    .seller_login ul {
        text-align: left;
    }
    .login_form {
        display: inline-block;
    }
    .login_form ul {
        float:left;
        margin-top: 10px;
        margin-left: 92px;
        margin-right: 100px;
    }
    .login_form ul li {
        margin-left: 0px;
    }
    .login_form input {	
        width: 260px; 
        height: 30px; 
    }
    .login_ckbox{
        font-size: 13px;
        margin-top: 10px;
        margin-left: 87px;
        margin-right: 100px;
        float: left;
    }
    .login_btn {
        margin-top: 20px;
        margin-left: 90px;
        margin-right: 100px;
        float: left;
        
    }
    .login_idsc{
        margin-top: 10px;
        font-size:  12px;
        margin-left: 0px;
    }
    .login_idsc a {
        padding: 10px 0 10px 140px;
        float: left;
        color: rgb(1,165,141);
        display: block;
    }
    .login_idsc a:hover {
        text-decoration: underline;
        font-weight: bold;
    }
    .sc_guard {
        font-size:  11px;
    }
    .sc_guard p{
        padding: 0 0 0 10px;
        float: left;
        color: rgb(1,165,141);
    }
    .login_passsc{
        font-size:  12px;
    }
    .login_passsc a {
        padding: 10px 0 10px 10px;
        float: left;
        color: rgb(1,165,141);
    }
    .login_passsc a:hover {
        text-decoration: underline;
        font-weight: bold;
    }
    .allow {
        margin-top: 140px;
        margin-left: 87px;
        width: 280px;
        height: 100px;
        background-color: rgb(238, 238, 238);
        line-height: 0px;
    }
    .allow h4 {
        float: left;
        padding: 0 0 0 10px;
    }
    .allow a {
        margin-top: 10px;
        margin-left: 10px;
        font-size: 17px;
        float: left;
        text-decoration: underline;
        color: rgb(0, 193, 116);
    }
    .allow a:hover {
        font-weight: bold;
    }
    .allow p {
        font-size: 11px;
        margin-top: 20px;
        margin-left: 10px;
        float: left;
    }
</style>
<script>
</script>
</head>
<body> 
	<header>
    </header>
	<section class = content>
        <aside class = main_box>
            <nav>
                <div class = logo_img><img src="./img/logo.png" width="132px" height="17px"></div>
            </nav>
            <nav class="seller_login">
            <ul>
                <li>로그인</li>
            </ul>
            </nav>
            <div class="login_box">
	    		<div class="login_form">
          		<form  name="login_form" method="post" action="login.php">		       	
                    <ul>아이디</ul>
                    <ul>
                    <li><input type="text" name="id" placeholder="아이디를 입력해주세요" ></li>
                    </ul>
                    <ul>비밀번호</ul>
                    <ul>
                    <li><input type="password" id="pass" name="pass" placeholder="비밀번호를 입력해주세요" ></li> <!-- pass -->
                  	</ul> 
           		</form>
                </div>
                <div class="login_ckbox">
                <form name="login_ckbox" method="post" action="login.php">
                    <label><input type="checkbox" id="check" name="check" value="check">아이디 저장</label>
                </form>
        		</div>
            </div>
            <div class="login_btn">
                      	<a href="#"><img src="./img/login_bt4.png" onclick="check_input()" width= "270px" height="40px"></a>
            </div>		
            <div class="login_idsc">
            <a href="#">아이디 찾기</a>
            </div>
            <div class="sc_guard">
                <p>ㅣ</p>
            </div>
            <div class="login_passsc">
            <a href="#">비밀번호 찾기</a>
            </div>
            <div class="allow">
                <h4>관리자가 아니십니까?</h4>
                <a href="#">관리자 승인 신청</a>
                <p>클릭 시 정보 입력 창으로 넘어갑니다</p>
            </div>
        </aside>
	</section> 
	<footer>
    </footer>
</body>
</html>




