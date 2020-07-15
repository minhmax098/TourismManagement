<?php
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(isset($_POST['submit2']))
	{
	$PackageId=$_POST['PackageId'];
	$PackageName=$_POST['PackageName'];	
	$PackageType=$_POST['PackageType'];
	$PackageLocation=$_POST['PackageLocation'];	
	$PackagePrice = $_POST['PackagePrice'];
	$PackageFetures = $_POST['PackageFetures'];
	$PackageDetails = $_POST['PackageDetails'];
	$PackageImage = $_POST['PackageImage'];
	$CreationDate = $_POST['CreationDate'];
	$UpdationDate = $_POST['UpdationDate'];
	/*$description=$_POST['description'];*/
	$sql="INSERT INTO  tbltourpackages(PackageId,PackageName,PackageType,PackageLocation,PackagePrice,PackageFetures,PackageDetails,PackageImage,CreationDate,UpdationDate) VALUES(:PackageId,:PackageName,:PackageType,:PackageLocation,:PackagePrice,:PackageFetures,:PackageDetails,:PackageImage,:CreationDate,:UpdationDate)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':PackageId',$fname,PDO::PARAM_STR);
	$query->bindParam(':PackageName',$email,PDO::PARAM_STR);
	$query->bindParam(':PackageType',$mobile,PDO::PARAM_STR);
	$query->bindParam(':PackageLocation',$subject,PDO::PARAM_STR);
	$query->bindParam(':PackagePrice',$description,PDO::PARAM_STR);
	$query->bindParam(':PackageFetures',$description,PDO::PARAM_STR);
	$query->bindParam(':PackageDetails',$description,PDO::PARAM_STR);
	$query->bindParam(':PackageImage',$description,PDO::PARAM_STR);
	$query->bindParam(':CreationDate',$description,PDO::PARAM_STR);
	$query->bindParam(':UpdationDate',$description,PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if($lastInsertId)
	{
		$msg="Tìm kiếm thành công.";
	}
	else 
	{
		$error="Đã xảy ra lỗi. Vui lòng thử lại";
	}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search</title>
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
</head>
<body>
	<!-- top-header -->
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
		<!-- <p style="width: 350px;">
			
				<b>Lựa chọn tìm kiếm theo</b>  <input type="text" name="fname" class="form-control" id="fname" placeholder="" required="">
		</p>  -->
		<tr> 
			<!-- <tr style="width: 200px;" -->> 
				<td><label style="color: #">Lựa chọn tìm theo:</label><select name ="luachon" >
				<option value ="PackageName">Tên Tour</option>
				<option value ="PackageType">Loại Tour </option>
				<option value ="PackageLocation">Địa điểm Tour</option>
				<option value ="PackageDetails">Chi tiết Tour</option>
				</select>
		
		</tr>
		<br>
			<tr>
					<td><label style="color: #">> Nhập thông tin cần tìm kiếm: </label><input name="dulieu" type="text" /></td>
			</tr>


				<p style="width: 350px;">
					<button type="submit" name="submit2" class="btn-primary btn">Tìm kiếm</button>
				</p>
				</form>

		
	</div>
</div>
<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>