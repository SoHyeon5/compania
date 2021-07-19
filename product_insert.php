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
                    alert('상품 등록은 로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }

   $name                   = $_POST["name"];
   $price                   = $_POST["price"];
   $dis_price                = $_POST["dis_price"];
   $sum_introduce          = $_POST["sum_introduce"];
   $brand                   = $_POST["brand"];
   $recommended_time       = $_POST["recommended_time"];
   $link                   = $_POST["link"];
   $event                   = $_POST["event"];
   $animal                   = $_POST["animal"];
   $category                = $_POST["category"];
   $category_f             = $_POST["category_f"];
   $introduce                = $_POST["introduce"];
   $information             = $_POST["information"];
   $component_a             = $_POST["component_a"];
   $component_b             = $_POST["component_b"];
   $component_c             = $_POST["component_c"];
   $component_d             = $_POST["component_d"];
   $component_e             = $_POST["component_e"];
   $component_f             = $_POST["component_f"];
   $component_g             = $_POST["component_g"];
   $daily_recommend          = $_POST["daily_recommend"];
   $way                      = $_POST["way"];
   $precautions             = $_POST["precautions"];

   $name = htmlspecialchars($name, ENT_QUOTES);
     $introduce = htmlspecialchars($introduce, ENT_QUOTES);
     $information = htmlspecialchars($information, ENT_QUOTES);

   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

   $upload_dir = './data/';

   $upfile_name    = $_FILES["upfile"]["name"];
   $upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
   $upfile_type     = $_FILES["upfile"]["type"];
   $upfile_size     = $_FILES["upfile"]["size"];
   $upfile_error    = $_FILES["upfile"]["error"];

   if ($upfile_name && !$upfile_error)
   {
      $file = explode(".", $upfile_name);
      $file_name = $file[0];
      $file_ext  = $file[1];

      $new_file_name = date("Y_m_d_H_i_s");
      $new_file_name = $new_file_name;
      $copied_file_name = $new_file_name.".".$file_ext;      
      $uploaded_file = $upload_dir.$copied_file_name;

      if (!move_uploaded_file($upfile_tmp_name, $uploaded_file) )
      {
            echo("
               <script>
               alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
               history.go(-1)
               </script>
            ");
            exit;
      }
   }
   else 
   {
      $upfile_name      = "";
      $upfile_type      = "";
      $copied_file_name = "";
   }
   
   $con = mysqli_connect("localhost", "user2", "12345", "compania");

   $sql = "insert into product (name, price, dis_price, sum_introduce, brand, recommended_time, link, event, animal, category, category_f, introduce, information, component_a, component_b, component_c, component_d, component_e, component_f, component_g, daily_recommend, way, precautions, regist_day, hit,  file_name, file_type, file_copied) ";
   $sql .= "values('$name', '$price', '$dis_price', '$sum_introduce', '$brand', '$recommended_time', '$link', '$event', '$animal', '$category', '$category_f', '$introduce', '$information', '$component_a', '$component_b', '$component_c', '$component_d', '$component_e', '$component_f', '$component_g', '$way', '$component_a', '$precautions', '$regist_day', 0, ";
   $sql .= "'$upfile_name', '$upfile_type', '$copied_file_name')";
   mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

   mysqli_close($con);                // DB 연결 끊기

   echo "
      <script>
       location.href = 'main_index.php';
      </script>
   ";
?>

  