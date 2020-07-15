<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Xử lý tìm kiếm </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tourism Management System In PHP" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
	<style>
	.errorWrap {
	    padding: 10px;
	    margin: 0 0 20px 0;
	    background: #fff;
	    border-left: 4px solid #dd3d36;
	    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	}
	.succWrap{
	    padding: 10px;
	    margin: 0 0 20px 0;
	    background: #fff;
	    border-left: 4px solid #5cb85c;
	    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	}
	</style>
	<!-- <?php
	error_reporting(0);
	/*$username= $_GET['username'];*/
	echo'<h4 align="center" style="color: #bf0000;font-size:30px;font-family: font-family: Helvetica, Arial, Tahoma, sans-serif;font-weight:400" >Welcome</h4>';
	?> -->
</head>
<body>
	<div class="top-header">
	<?php include('includes/header.php');?>
	<div class="banner-1 ">
		<div class="container">
			<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Hệ thống quản lý du lịch</h1>
		</div>
	</div>
	<!--- /banner-1 ---->
	<!--- privacy ---->
	<div class="privacy">
		<div class="container">
			<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Tìm kiếm</h3>
			<form name="search" method="post" action="xulytimkiem.php">
			 <?php if($error){?><div class="errorWrap"><strong>LỖI</strong>:<?php echo htmlentities($error); ?> </div><?php } 
					else if($msg){?><div class="succWrap"><strong>THÀNH CÔNG</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

	<?php
			/*$link = new mysqli("localhost","root","","tourismmanagement");
			if(!$link){
				echo"Ket noi that bai";
				
			}*//*else{
				echo"Ket noi thanh cong";
			}*/
			echo"<br>";
			$sql = "SELECT * FROM tbltourpackages";
			$result = mysqli_query($link,$sql);
			if(mysqli_num_rows($result) > 0){
				$tourismmanagement = $_GET['tourismmanagement'];
				$luachon = $_GET['luachon'];
				echo '<h4 style="color: #bf0000;font-size:20px;font-family: font-family: Helvetica, Arial, Tahoma, sans-serif;font-weight:600">Dữ liệu cần tìm : '.$tourismmanagement.'</h4>';
				echo '<h4 style="color: #bf0000;font-size:20px;font-family: font-family: Helvetica, Arial, Tahoma, sans-serif;font-weight:600">Theo : '.$luachon.'</h4>';
				$count = 0;

				while($row = mysqli_fetch_assoc($result)){
					if($luachon == "PackageName")
					{
						if($row["PackageName"] == $tourismmanagement){
							$count = 1;
							echo'<tr><td style="font-size:30px;font-family: font-family: Helvetica, Arial, Tahoma, sans-serif;font-weight:500">'.$row["PackageName"].'</td><td style="font-size:30px;font-family: font-family: Helvetica, Arial, Tahoma, sans-serif;font-weight:500">'.$row["PackageType"].'</td></tr>';
						}
					}
					else if($luachon == "PackageType")
					{
						if($row["PackageType"] == $tourismmanagement){
							$count = 1;
							echo'<tr><td style="font-size:30px;font-family: font-family: Helvetica, Arial, Tahoma, sans-serif;font-weight:500" >'.$row["PackageName"].'</td><td style="font-size:30px;font-family: font-family: Helvetica, Arial, Tahoma, sans-serif;font-weight:500">'.$row["PackageType"].'</td></tr>';
						}
					}
					
				}if ($count ==0){
					echo "<br>";
					echo "Không tìm thấy thông tin ";
				}
				else{
					echo "<br>";
					echo "<center>";
					echo '<h3 style="color: #00bf5f;font-size:35px;font-family: font-family: Helvetica, Arial, Tahoma, sans-serif;font-weight:600"> Kết quả tìm kiếm </h3>';
				}
			} else{
				echo "0 result";
			}
			mysqli_close($link);
			// Nếu người dùng submit form thì thực hiện
        /*if (isset($_REQUEST['submit'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "select * from tbltourpackages where PackageName like '%$search%'";
 
                // Kết nối sql
                mysql_connect("localhost", "root", "", "tourismmanagement");
 
                // Thực thi câu truy vấn
                $sql = mysqli_query($query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = mysql_fetch_assoc($sql)) {
                        echo '<tr>';
                            echo "<td>{$row['PackageName']}</td>";
                            echo "<td>{$row['PackageType']}</td>";
                            echo "<td>{$row['PackageLocation']}</td>";
                            echo "<td>{$row['PackagePrice']}</td>";
                            echo "<td>{$row['PackageFetures']}</td>";
                            echo "<td>{$row['PackageDetails']}</td>";
                            echo "<td>{$row['Package']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }*/

		?>
</body>
</html>