<?php 
require("utils.php");
session_start(); 
verify();
?>
<!DOCTYPE html>
<html>

	<link href="css/message.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<body>

	<?php include('nav.php'); ?>	
		
    <h1 class="title">Message Box</h1>

     <div class="diff">
            <?php
                $id = $_SESSION['id'];
                $db = new SQLite3(DB_PATH);
                if(!$db) {
                    echo $db->lastErrorMsg();
                }
                $query="SELECT * FROM CHAT WHERE idreceive='$id' ORDER BY Timestamp DESC;";
                $result=$db->query($query);
                while($row= $result->fetchArray()){
                    echo '<div>';
                    echo '<div style="padding-top: 20px;">DATE :'.$row['Timestamp']. '</div>';
                    echo '<div>SENDER : '.getUserPseudo($row['idsend']). '</div>';
                    echo '<div>TOPIC :'.$row['topic'].'</div>';
                    echo '<form action="messagescript.php" method="post">';
                    echo '<div style="width:200px;">';
                    echo '<button class="btn btn-primary btn-block" type="submit" name="up[]" value="rep_'.$row['id'].'">Reply</button>';
                    echo '</div>';
                    echo '<div style="width:200px;">';
                    echo '<button class="btn btn-primary btn-block" type="submit" name="up[]" value="del_'.$row['id'].'">Delete</button>';
                    echo '</div>';
                    echo '<div style="width:200px;">';
                    echo '<button class="btn btn-primary btn-block" type="submit" name="up[]" value="det_'.$row['id'].'">Details</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</form>';
                }
                $db->close();
            ?>
        </div>
	</body>
</html>