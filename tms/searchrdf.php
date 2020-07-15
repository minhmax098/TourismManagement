<?php
	require 'vendor/autoload.php';
	EasyRdf_Namespace::set('countryname', 'https://localhost:8080/composer/countryname#');

	$timkiem = isset($_REQUEST['txtSearch']) ? $_REQUEST['txtSearch'] : "";

	$graph = new EasyRdf_Graph();
	$graph->parseFile("service.rdf");
	// echo $graph->dump();
  $arr = $graph->resourcesMatching('tbltourpackages:author', $timkiem);
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tìm kiếm với RDF</title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<style>
	div {
	  background-image: url('bg.jpg');
	}
	</style>
</head>
<body>
	<button type="button" onclick="quay_lai_trang_truoc()">Quay lại trang trước</button>

  	<script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  	</script>
	<h1>Tìm kiếm thông tin về gói Tour</h1>
	<!-- <marquee></marquee>
	 -->
  	<!-- Page content -->
	  <div class="w3-content" style="max-width:2000px;margin: 50px;margin-left: 150px;">   
	    <?php 
	    	if (count($arr) > 0) {
	    		echo "<p style=\"font-size:20px;\">Find ".count($arr)." results.</p>";
	    		foreach ($arr as $row) {
	          $tennuoc = $row->get('tbltourpackages:title');
					  echo "<li style=\"font-size:40px;\"><a href='#'>$tennuoc</a></li>\n";
	    		
				    $tennc = $row->get('tbltourpackages:desc');
					  echo "<li style=\"font-size:20px;\">$tennc</a></li>\n";
	    		}			
			} else {
				echo "<p style=\"font-size:20px;\">NO RESULT!!.</p>";
			}
	    ?>

	  <!-- End Page Content -->
	  </div>


  <!-- Footer -->


  <script>
  // When the user clicks anywhere outside of the modal, close it
  var modal = document.getElementById('ticketModal');
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.js">
  	
  </script>

</body>
</html>