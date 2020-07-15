<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charshet="utf-8" />
	<title>Hệ thống quản lý du lịch </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<!-- <div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS - Tourism Management System</h1>
	</div>
</div> -->


<div class="container-carousel wow fadeInDown animated animated">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    
    <div class="carousel-inner">

	  <div class="item">
        <img src="images/hoian2.jpg" alt="Hoi An" style="width:100%;">
        <div class="carousel-caption">
          <h3>Hội An </h3>
          <p>Hội An cổ kính</p>
        </div>
      </div>

      <div class="item active">
        <img src="images/banahill.jpg" alt="Ba Na Hill" style="width:100%;">
        <div class="carousel-caption">
          <h3>Bà Nà Hill</h3>
          <p>Đường lên tiên cảnh</p>
        </div>
      </div>

      <div class="item">
        <img src="images/salung.jpg" alt="Sa Lung" style="width:100%;">
        <div class="carousel-caption">
          <h3>Thung Lũng Sa Lung</h3>
          <p>Thiên đường vẫy gọi</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/hue3.jpg" alt="Hue" style="width:100%;">
        <div class="carousel-caption">
          <h3>Huế</h3>
          <p>Huế mộng mơ</p>
        </div>
      </div>

      <div class="item">
        <img src="images/saigon2.jpg" alt="Sai Gon" style="width:100%;">
        <div class="carousel-caption">
          <h3>Sài Gòn</h3>
          <p>Sài Gòn hoa lệ</p>
        </div>
      </div>
  
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!--- rupes ---->
<div class="container">
	<div class="rupes">
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-plane"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>700+ ĐIỂM ĐẾN</h3>
				<h4><a href="offers.html">
Đội ngũ chuyên gia của chúng tôi đã lựa chọn tất cả các điểm đến trong trang web này</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-h-square"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>ĐẢM BẢO GIÁ TỐT NHẤT</h3>
				<h4><a href="offers.html">
Giá khớp trong vòng 48 giờ sau khi xác nhận đơn hàng</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-mobile"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>HỖ TRỢ HÀNG ĐẦU</h3>
				<h4><a href="offers.html">
Chúng tôi ở đây để giúp đỡ, trước, trong và thậm chí sau chuyến đi của bạn</a></h4>
			
			</div>
				<div class="clearfix"></div>
		</div>
	
	</div>
</div>
<!--- /rupes ---->




<!---holiday---->
<div class="container">
	<div class="holiday">
	
	<h3>Danh sách các gói Tour</h3>

					
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Tên gói Tour: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Loại gói Tour : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Địa điểm gói Tour :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Đặc điểm</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
<div><a href="package-list.php" class="view">Xem nhiều gói Tour</a></div>
</div>
			<div class="clearfix"></div>
	</div>



<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>80000</h3>
				<p>Thắc mắc</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>Người dùng đánh giá cao</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>Đặt Tour</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>