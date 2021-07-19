<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $tel1  = $_POST["tel1"];
    $tel2  = $_POST["tel2"];
    $tel3  = $_POST["tel3"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $tel = $tel1."-".$tel2."-".$tel3;
    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

              
    $con = mysqli_connect("localhost", "user2", "12345", "compania");

	$sql = "insert into members(id, pass, name, tel, email, animal_name, regist_day, level) ";
	$sql .= "values('$id', '$pass', '$name', '$tel', '$email', '$animal_name', '$regist_day', 9)";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'main_index.php';
	      </script>
	  ";
?>