<!-- <div id="wrapper">
            <h1>Baltimore County, Maryland</h1>
<div class="lineAnimation"></div>
<br><br>
            <div id = "image">
                <img id="slideshow" src="../assets/img/BaltimoreLogo.png" alt="slideshow">
            </div>
            <div id = content>
                <img id="map" src="../assets/img/map_of_baltimore_county.png" alt="map of Baltimore County">
                <h2>About</h2>
                <p>Baltimore County is a diversified and populated jurisdiction 
                    in the United States state of Maryland. It encircles Baltimore City 
                    and is part of the Baltimore metropolitan area. Baltimore County 
                    encompasses approximately 682 square miles in northern and eastern 
                    Maryland. Its scenery is diverse, with suburban settlements, rural 
                    areas, forests, and parks.</p>
            </div>
        </div> -->
<?php
	$fildir='home/';
	$page='Home';
	$path='../';
	require ($path.'assets/inc/header.php');
?>

	<?php

	require $path.'../../dbConnect.inc';     
	
	//internal CSS
	$sql = "SELECT CSS_Internal FROM modularSite where page='$page'";
	$result = $mysqli->query($sql);

	if($result->num_rows > 0){
		//output the data for each row
		while ($row = $result->FETCH_ASSOC()) {
			echo $row['CSS_Internal'];
		}
	}
	
		$sql = "SELECT content FROM modularSite where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results, did something wrong!";
		}
	?>
<?php
    require($path.'assets/inc/footer.php');
     mysqli_close($mysqli);

?>
