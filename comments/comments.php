<?php
	$fildir='comments/';
	$page='Comments';
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

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if ($mysqli) {
        if (!empty($_POST['name']) && !empty($_POST['comment'])) {
    
            $name = test_input($_POST['name']);
            $comment = test_input($_POST['comment']);
            $date = date("h: i A / m-d-Y", time());
    
            $stmt = $mysqli->prepare("INSERT INTO comments (name, comment) values (?, ?)");
            $stmt->bind_param("ss", $name, $comment);
            $stmt->execute();
            $stmt->close();
        }
    }
    
        $sql = 'SELECT name, comment, date FROM comments';
        $res = $mysqli->query($sql);
        
    ?>

    <div id="comments-section">
		<?php
			if (mysqli_num_rows($res) > 0) {
				while ($row = $res->fetch_assoc()) {
					echo '<div class="comment-box">';
					echo '<p style="font-weight:bold; color:#19578A; margin-bottom:5px;">' 
						. htmlspecialchars($row['name']) . 
						' <span style="font-size:0.85em; color:#555;">(' . htmlspecialchars($row['date']) . ')</span></p>';
					echo '<p style="margin:0; color:#333;">' . htmlspecialchars($row['comment']) . '</p>';
					echo '</div>';
				}
				$res->free();
			} else {
				echo '<p style="text-align:center; color:white;">No comments yet — be the first to share your thoughts!</p>';
			}
		?>
		</div>

    </div> <!-- end of wrapper tag -->
<?php
    require($path.'assets/inc/footer.php');
     mysqli_close($mysqli);

?>
