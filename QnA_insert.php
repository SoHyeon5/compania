<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    
    $category = $_POST["category"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

	$subject = htmlspecialchars($subject, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
	
	$con = mysqli_connect("localhost", "user2", "12345", "compania");

	$sql = "insert into qna (id, name, category, subject, content, regist_day, hit) ";
	$sql .= "values('$userid', '$username', '$category', '$subject', '$content', '$regist_day', 0)";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'admin.php';
	   </script>
	";
?>

  
