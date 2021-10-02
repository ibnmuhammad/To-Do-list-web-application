<?php

            $db = mysqli_connect('localhost', 'root', '', 'ToDoDB');
            if(isset($_GET['complete'])){
                $id = $_GET['complete'];

               // $Status = "Complete";
				
				$sql = "UPDATE tasks SET Status = 'Complete' WHERE TaskID = $id ";
				$query = mysqli_query($db, $sql);

				header('Location: index.php');
            }
?>