<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>메인페이지</title>
<style>
body{
    margin:0;
    overflow:auto;
}
ul, li{
    list-style: none;
}
a{
    text-decoration:none;
    color:black;
}


#topbanner{
    background-color:rgba(252,194,124);
    text-align:center;
    margin:0;
    padding:0.01em;
    color:rgba(14,71,100);
    font-weight: bold;
    font-family: 'Noto Serif KR', serif;
}

#mn-top{
    padding:50px;
    margin:0 0 -50 0px;
}
#mn-logo{
    width:264px;
    height:34px;
    float:left;
    padding-left:80px;
}
#mn-searchBar{
    display:inline-block;
    position:absolute;
    transform:translate(-50%);
    left:50%;
}
#mn-searchBar>form>.input_Search{
    border:solid 0px;
    background-image: url('../images/searchbar.png');
    background-size:350px 40px;
    background-repeat: no-repeat;
    display:inline-block;
    width:350px;
    height:40px;
    text-align:center;
}
.btn_Search{
    background-color:rgba(0,0,0,0);
    border:solid 0px;
    position: relative;
    top:8px;
    right:55px;
}
#mn-info{
    font-family:'Noto Sans KR', sans-serif;
    float:right;
    margin:-10px;
    padding-right:80px;
}
#mn-info>ul>li>a{
    padding-right:10px;
}
#bef-info>li{
    display: inline-block;
}
#aft-info>li{
    display:inline-block;
}
#aft-info{
    display:none;
}

#mn-menu{
    margin:70px;
    text-align:center;
    font-family:'Noto Sans KR', sans-serif;
}
.menu-element-text{
    font-size:1.1em;
}
.menu-element-text>li>.menu-element-text_s{
    display:none;
    position: absolute;
}
#menu-text>ul>li>a>span:hover{
    color:rgba(1,165,141);
}
#menu-text>ul>li>a:hover{
    color:rgba(251,110,92);
}

.menu-element-text li:hover>.menu-element-text_s{
    display:block;
    position: absolute;
}
.menu-element-text_s{
    display:inline;
    width:150px;
    padding:0;
    background-color:rgba(251,110,92);
    border-radius:10px;
    box-shadow:10px 10px 25px rgba(0,0,0,0.2);
    margin:10 -50 50 0px;
    color:white;
}
.menu-element-text_s>li{
    padding:10px;
    
}
.menu-element-text_s>li:hover{
    font-weight:bold;
}

.menu-cycle>p>button{
    background-color:white;
    border:solid 0px;
}
.menu-cycle>p>button>img{
    width:100px;
    height:100px;
    padding:20px;
}
.menu-cycle>p{
    display:inline-block;
}
.menu-cycle_hover>p>button>img{
    width:100px;
    height:100px;
    padding:20px;
}
.menu-cycle_hover>p>button{
    background-color:white;
    border:solid 0px;
}
.menu-cycle_hover>p{
    display:inline-block;
}
.menu-box>div>p>a>button{
    background-color:white;
    border:solid 1px rgba(180,180,180);
    width:200px;
    height:50px;
}
.menu-box>div{
    display:none;
}
.menu-box>div>p{
    display:inline-block;
}
.menu-box>div>p>a>button{
    color:rgba(180,180,180);
    font-size:15px;
}
.menu-box>div>p>a>button:hover{
    border:solid 1px black;
    color:black;
}
.txbox-active{
    border:solid 1px black;
    color:black;
}

#menu-text>ul>li{
    display:inline-block;
    padding:0 30 10 0px;
}
#menu-text{
    margin:0;
}

#mn-md>div{
    text-align:center;
    margin:0 0 80 0px;
}
#mn-ProBanner{

}