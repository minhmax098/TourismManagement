<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Thành Công";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charshet="utf-8" />
	<title>Chi tiết gói Tour</title>
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
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
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
<?php include('includes/header.php');?>
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Chi tiết gói Tour </h1>
	</div>
</div>
<!--- /banner ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>


<form name="book" method="post">
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Loại Tour: </b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Địa điểm: </b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Chi tiết: </b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">Từ</label>
				<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">Đến</label>
				<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			</div>
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Tổng cộng</p>
					<h3>VND <?php echo htmlentities($result->PackagePrice);?></h3>
				</div>
			</div>
		<!-- <h3>Thông tin chi tiết</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>	
				<div class="clearfix"></div> -->
			<h3 dir="ltr" style="text-align: justify;">Thông tin chi tiết</h3>
			<!-- <span style="color:#;">
				<u>
					<strong style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?>
					</strong>
				</u>
			</span> -->
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>
				<div class="clearfix"></div>
			<br>
		</div>

		<div class="selectroom_top">
		


		<!-- 	<?php
    $apiKey = "770a5782ecdae86fa41659ddb581a6ee";
    $cityname = explode(" ", $result->PackageLocation)[0];
    // echo $cityname;
    $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $cityname . "&APPID=" . $apiKey."&units=Metric";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);

    curl_close($ch);
    $data = json_decode($response);
    $currentTime = time();
?> -->

<?php 
	$cityname = explode(",", $result->PackageLocation);
	$cityname = trim($cityname[count($cityname)-1]);

	/*Trick cho may cai thanh pho ko co du lieu*/
	if($cityname === "Quảng Nam"){$cityname="Hội An";}
?>



					<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: 0px">
						<h2>Thời tiết</h2>
						<h3><?php echo "Thời tiết tại: ".$result->PackageLocation?></h3>
		

						<!-- Bảng thời tiết -->
						<!-- <div class="report-container" id="frm">
						        <h2>Hue Weather Status</h2>
						        <div class="time">
						            <div>Friday 5:23 am</div>
						            <div>26th June, 2020</div>
						            <div>Few Clouds</div>
						        </div>
						        <div class="weather-forecast">
						            <img src="http://openweathermap.org/img/w/02d.png" class="weather-icon"> 33°C<span class="min-temperature">33°C</span>
						        </div>
						        <div class="time">
						            <div>Humidity: 63 %</div>
						            <div>Wind: 2.1 km/h</div>
						        </div>
						</div>					
 -->



 						<!-- <div class="report-container" id="frm">
       						<h2><?php echo $data->name; ?> Weather Status</h2>
        					<div class="time">
	            				<div><?php echo date("l g:i a", $currentTime); ?></div>
	            				<div><?php echo date("jS F, Y",$currentTime); ?></div>
	            				<div><?php echo ucwords($data->weather[0]->description); ?></div>
        					</div>
        					<div class="weather-forecast">
					            <img
					                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
					                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;C<span
					                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        					</div>
					        <div class="time">
					            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
					            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
					        </div>
    					</div> -->


						<div class="report-container">
					        <h2 class="location"></h2>
					        <div class="time">
					            <div class="currentTime"></div>
					            <!-- <div class ="currentTime2"></div> -->
					            <div class="description"></div>
					        </div>
					        <div class="weather-forecast">
					            <img src="" class="weather-icon" />
					            <span class="min-temperature"></span>
					        </div>
					        <div class="time">
					            <div  class="humid"></div>
					            <div class="wind"></div>
					        </div> 
    					</div>

    					<script type="text/javascript">
        
        $(document).ready(function(){
            setInterval(function() {getRealTimeData()}, 1000)
        });

        function getRealTimeData(){
            $.ajax({
                    url:'http://api.openweathermap.org/data/2.5/weather',
                    dataType: 'json',
                    type:'GET',
                    data:{q: <?php echo "'$cityname'"?>, appid:"770a5782ecdae86fa41659ddb581a6ee", units: 'Metric'},

                    // Neu thanh cong thi view ra thoi
                    success: function(data){
                        var wf = '';
                        var humid = '';
                        var wind='';
                        var temp_min = '';
                        var temp_max = '';
                        var src = "http://openweathermap.org/img/w/"+ data.weather[0].icon + ".png";
                        //var date = new Date();
                        var date = Date.now()  - 25200000;

                        $.each(data.weather, function(index, val){
                            wf += data.name+ "  Weather Status" ;
                            humid +="Humidity:  "+ data.main.humidity + "%";
                            wind +=  "Wind: " + data.wind.speed + "km/h";
                            temp_min += data.main.temp_min + "&deg;C";
                            temp_max += data.main.temp_min + "&deg;C";
                            //date = new Date(date - data.timezone);
                            date = new Date(date + data.timezone*1000)  ;
                           // date = date.toISOString();
                           // echo data.timezone;
                           //date = date('Y/m/d H:i:s', date - data.timezone);
                        });

                    $('h2.location').html(wf);
                    $('div.humid').html(humid);
                    $('div.wind').html(wind);
                    $('img.weather-icon').html(temp_max);
                    $('span.min-temperature').html(temp_min);
                    $(".weather-icon").attr("src", src);
                    // $(".currentTime").html(date.toISOString().substring(0, 20));
                    $(".currentTime").html(date.toString().substring(0, 24));
                }
            })
        }
    </script>
				


					</div>			
		</div>



		<div class="selectroom_top">
			<h2>Travels</h2>
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
				
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
					<?php if($_SESSION['login'])
					{?>
						<li class="spe" align="center">
					<button type="submit" name="submit2" class="btn-primary btn">Book</button>
						</li>
						<?php } else {?>
							<li class="sigi" align="center" style="margin-top: 1%">
							<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Đặt tour </a></li>
							<?php } ?>
					<div class="clearfix"></div>
				</ul>
			</div>	
		</div>
		</form>
<?php }} ?>


	</div>
</div>
<!--- /selectroom ---->
<<!--- /footer-top ---->
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