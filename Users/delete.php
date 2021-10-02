<?php
            //echo 'Are we there';
            //echo $_GET['delete'];
            $db = mysqli_connect('localhost', 'root', '', 'ToDoDB');
            
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
				
				$sql = "DELETE FROM tasks WHERE TaskID = $id ";
				$query = mysqli_query($db, $sql);
				header('Location: index.php');

            }
?>