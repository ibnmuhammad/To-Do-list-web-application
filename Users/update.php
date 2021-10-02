<?php
    include 'header.php';
	//session_start();
    if(isset($_SESSION['Email'])){
        $Email = $_SESSION['Email'];
    }
?>

		<?php 
			if(isset($_GET['update'])){
				$tid = $_GET['update'];
			}
		?>

<div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Update Task Details</li>	
            </ol>

<body>


<?php 
                
				$db = mysqli_connect('localhost', 'root', '', 'tododb');

				if(isset($_POST['submit'])){
				  $tid = $_POST['TaskID'];
				  $TaskName = $_POST['TaskName'];
				  $Time1 = $_POST['Time1'];
				  $Time2 = $_POST['Time2'];

				  $sql = "UPDATE tasks SET TaskName = '$TaskName', Time1 = '$Time1', Time2 = '$Time2' WHERE TaskID = '$tid'";
				  $jjQ = mysqli_query($db, $sql) or die(mysqli_error($db));
				  
				  //echo 'Is it Successfully';
				  //echo $tid;
				  //echo '<br>';
				  //echo $TaskName;
				  
				  //echo "<script>window.alert('Task Added Successfully')</script>";
				  header('Location: index.php');
				}
	  ?>

		
            <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <!-- Update Task Details Form -->
         <form class="form-horizontal" action="update.php" method="post">
			<input type="hidden" class="form-control" name="TaskID" value="<?php echo $tid;?>">
			<div class="form-group">
          		<label class="control-label col-sm-3">Task Name</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" name="TaskName" required>
          		</div>
          	</div>
			<div class="form-group">
          		<label class="control-label col-sm-3">Task Time(Date of Doing It)</label>
          		<div class="col-sm-9">
          			<input type="date" class="form-control" name="Time1" value="" required>
          		</div>
          	</div>
			  <div class="form-group">
          		<label class="control-label col-sm-3">Task Time(Time of Doing It)</label>
          		<div class="col-sm-9">
          			<input type="time" class="form-control" name="Time2" value="" required>
          		</div>
          	</div>
          	<div class="modal-footer">
				<input type="submit" class="btn btn-info" name="submit" value="UPDATE TASK">
				<a href="index.php" class="btn btn-info">Go Back</a>
        	</div>
          </form>
        </div>
        
      </div>

        </div>

<?php include 'footer.php'; ?>
