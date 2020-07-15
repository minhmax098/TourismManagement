<!DOCTYPE html>
<html>
<head>
	<title>Phân trang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		$connect = mysqli_connect('localhost','root','','tourismmanagement');
		mysqli_set_charset($connect, "utf-8");

	?>
	<?php
		$page = 1; //Khỏi tạo trang ban đầu
		$limit = 5; //Số bản ghi trên một trang là 5

		$arrs_list = mysqli_query($connect, "select PackageId from tbltourpackages");
		$total_record = mysqli_num_rows($arrs_list); //tính tổng các bản ghi có thể có trong bảng.


		$total_page = ceil($total_record/$limit); //tính tổng số trang sẽ chia 

		//Xem trang có vượt giưới hạn hay không:
		if(isset($_GET["page"]))
			$page =$_GET["page"];// nếu biến $GET["page"] tồn tại thì trang hiện tại là trang $_GET["page"].

		if($page < 1) // nếu trang hiện tại nhỏ hơn 1 thì gán bằng 1
			$page = 1;
		if($page > $total_page) // nếu trang hiện tại vượt quá số trang được chia thì sẽ bằng trang cuối cùng.
			$page = $total_page; 

		//tính start(vị trí bản ghi sẽ lấy ban đầu)
		$start = ($page-1)*$limit;


		//lấy ra danh sách và gán vào biến $arras
		$arras = mysqli_query($connect, "select * from tbltourpackages limit $start,$limit");
	?>

</body>
</html>