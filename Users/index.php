<?php include'header.php';

?>

<body>  
<div class="modal-content">
	<div class="modal-body">
		<div class="container-fluid">
      <!-- Table to show Tasks-->
      <div class="card mb-3">
        <div class="card-header">
		  <div style="float: left;">
          	<i class="fa fa-book"></i> My To Do List
		  </div>
		  <div style="float: right;">
		  	<a type="button" class="btn btn-info fa fas-new" href="AddTask.php">Add New Task</a>
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">View my Completed Tasks</button>
			  <a type="button" class="btn btn-danger fas fa-sign-out-alt" href="logout.php">Log Out</a>	
		  </div>	
		</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
				<!--  <th>Task ID</th> -->
                  <th>Task Name</th>
				  <th>Task Date</th>
				  <th>Task Time</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
				  <th></th>
                </tr>
              </thead>
              <tbody>
              	<?php

				  global $Email;
              	$db = mysqli_connect('localhost', 'root', '', 'ToDoDB');
				
              	$df = "SELECT * FROM tasks WHERE Email = '$Email' AND Status = 'Pending'";

              	$datafetch = mysqli_query($db, $df);

              	while($row = mysqli_fetch_array($datafetch, MYSQLI_ASSOC)) {
					echo "<tr><td>";
              		echo $row['TaskName'];
              		echo "</td><td>";
					echo $row['Time1'];
					echo "</td><td>";
					echo $row['Time2'];
					echo "</td><td>";
              		echo $row['Status'];
              		echo "</td><td>";
					echo "<a href='update.php?update=".$row['TaskID']."' class='btn btn-info'>Update Task Details</a>";
					echo "</td><td>";
					echo "<a href='delete.php?delete=".$row['TaskID']."' class='btn btn-info'>Delete Task</a>";
					echo "</td><td>";
					echo "<a href='status.php?complete=".$row['TaskID']."' class='btn btn-info'>Mark Task as Complete</a>";
					echo "</td></tr>";
					

				  }

              	?>

              </tbody>
            </table>
          </div>

        </div>
			
     </div>
    </div>
	</div>
	</div>  

<?php include'footer.php'; ?> 

<!-- Pop up table to display the completed tasks-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 style="text-align: center" class="modal-title" id="exampleModalLabel"><i class="fa fa-book"></i>My Completed Tasks</h3>
                <!--Close Button-->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    
			  <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Task Name</th>
				  <th>Task Date</th>
				  <th>Task Time</th>
                </tr>
              </thead>
              <tbody>
              	<?php

				  global $Email;
              	$db = mysqli_connect('localhost', 'root', '', 'ToDoDB');
				
              	$df = "SELECT * FROM tasks WHERE Email = '$Email' AND Status = 'Complete'";

              	$datafetch = mysqli_query($db, $df);

              	while($row = mysqli_fetch_array($datafetch, MYSQLI_ASSOC)) {
					echo "<tr><td>";
              		echo $row['TaskName'];
              		echo "</td><td>";
					echo $row['Time1'];
					echo "</td><td>";
					echo $row['Time2'];
					echo "</td></tr>";	

				  }

              	?>

              </tbody>
            </table>
          </div>

        </div>

              </div>
            </div>
          </div>



