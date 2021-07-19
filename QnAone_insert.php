<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    if ( !$userid )
    {
        echo("
                    <script>
                    alert('1:1 상담은 로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }

	$title = $_POST["title"];
	$content = $_POST["content"];

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
	
	$con = mysqli_connect("localhost", "user2", "12345", "compania");

	$sql = "insert into qnaone (id, name, title, content, regist_day) ";
    $sql .= "values('$userid', '$username', '$title', '$content', '$regist_day')";
    
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'QnA_index.php';
	   </script>
	";
?>

  
