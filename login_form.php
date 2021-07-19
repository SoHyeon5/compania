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
        display: block;
        width: 100%;
        height: 450px;
        margin: 0;
        background-color: lightgray;
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
        text-align: center;
        margin: 0;
        padding: 0;
        margin-top: 30px;
        margin-left: 40%;
        background-color: lightgray;
        width: 200px;
        height:50px;
    }
    .seller_login ul {
        font-weight: bold;
    }
    .login_form {
        display: block;
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
</style>
<script type="text/javascript" src="./js/login.js"></script>
</head>
<body> 
	<header>
    </header>
	<section class = "content">
        <aside class = "main_box">
            <nav class="seller_login">
            <ul>
                <li>로그인</li>
            </ul>
            </nav>
            <div class="login_box">
	    		<div class="login_form">
          		<form  name="login_form" method="post" action="login.php">		       	
                    <ul>
                    <li><input type="text" name="id" placeholder="아이디" ></li>
                    </ul>
                    <ul>
                    <li><input type="password" id="pass" name="pass" placeholder="비밀번호" ></li> <!-- pass -->
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
        </aside>
	</section> 
	<footer>
    </footer>
</body>
</html>




