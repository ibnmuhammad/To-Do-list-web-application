<?php
    include 'header.php';
	//session_start();
    if(isset($_SESSION['Email'])){
        $Email = $_SESSION['Email'];
    }
?>


<?php 
                
                      $db = mysqli_connect('localhost', 'root', '', 'tododb');

                      //$Email = $_SESSION['Email'];
					  global $Email;
					  if(isset($_POST['submit'])){
						$TaskName = $_POST['TaskName'];
						$Time1 = $_POST['Time1'];      //Date entered by user
						$Time2 = $_POST['Time2'];	   //Muda
						//echo $Time1;
						$date1 = date("Y-m-d");			//Current date
						//$time2 = time();
						//$Email = $_SESSION['Email'];

						if($Time1 >= $date1){
						//	if($Time2 >= $time2){

						$sql = "INSERT INTO tasks (Email, TaskName, Time1, Time2) VALUES('$Email', '$TaskName', '$Time1', '$Time2')";
                        $jjQ = mysqli_query($db, $sql) or die(mysqli_error($dbconnection));
                        
                        //echo "<script>window.alert('Task Added Successfully')</script>";
						header('Location: index.php');
						}else{
							echo '<script>window.alert("Invalid Date Entered, Enter the Future Date")</script>';
						}
						//}
					  }
			?>

<div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Add Task</li>	
            </ol>

<body>
            <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <!-- Task Form -->
         <form class="form-horizontal" action="AddTask.php" method="post">
			<div class="form-group">
          		<label class="control-label col-sm-3">Task Name</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" name = "TaskName" placeholder="Enter the Task Name" required>
          		</div>
          	</div>
			<div class="form-group">
          		<label class="control-label col-sm-3">Task Time(Date of Doing It)</label>
          		<div class="col-sm-9">
          			<input type="date" class="form-control" name = "Time1" placeholder="Enter the Date to do the Task" value="" required>
          		</div>
          	</div>
			  <div class="form-group">
          		<label class="control-label col-sm-3">Task Time(Time of Doing It)</label>
          		<div class="col-sm-9">
          			<input type="time" class="form-control" name = "Time2" placeholder="Enter the Time to do the Task" value="" required>
          		</div>
          	</div>
          	<div class="modal-footer">
				<input type="submit" class="btn btn-info" name="submit" value="Add Task">
				<a href="index.php" class="btn btn-info">Go Back</a>
        	</div>
          </form>
        </div>
        
      </div>

        </div>

<?php include 'footer.php'; ?>
