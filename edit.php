<?php include "header.php";
include "db_connection1.php"; 
$id = $_GET['id'];
?>



<div class="container p-4">

	<div class="row">
		<div class="col-md-4">
		     		 
			 <?php 
					$query = "select * from dailytasks_dailytask where completed = '0'  and id='$id'";
					$result_tasks = mysqli_query($conn,$query);
					$row = mysqli_fetch_array($result_tasks);
			 ?>
			 			 
		  
			<div class="card card-body">
				<form action="updatetask.php" method="POST"> 
					
					<div class="form-group">
						<input type="text" name="id" class="form-control" placeholder="id" autofocus value ="<?php echo $row['id'];?>" readonly></input><br>
					</div>
					<div class="form-group">
						<input type="text" name="task" class="form-control" placeholder="Task Title" autofocus value ="<?php echo $row['task'];?>"></input><br>
					</div>
					<div class="form-group">
						<textarea name="description" rows="5" class="form-control" placeholder="Task Description"><?php echo $row['description']?></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="project" class="form-control" placeholder="Project Name" value = "<?php echo $row['project'];?>"></input><br>
					</div>
					<div class="form-group">
						<input type="text" name="region" class="form-control" placeholder="Region" value = "<?php echo $row['region'];?>"></input><br>
					</div>
					<div class="form-group">
						<input type="text" name="subregion" class="form-control" placeholder="Subregion" value = "<?php echo $row['subregion']?>"></input><br>
					</div>
					<input type="submit" class="btn btn-success btn-block" name="update_task" value="Update Task"></input>
					<input type="submit" class="btn btn-success btn-block" name="logout" value="Cancel" formaction="dailytaskadminmodule.php"></input>
				</form>
			</div>
		</div>
		
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
				   <tr>
	                  <th>ID</th>
				      <th>Task</th>
					  <th>Description</th>
					  <th>Project</th>
					  <th>Region</th>
					  <th>Subregion</th>
					  <th>Created At</th>
					  <th>Days Opened</th>
				   </tr>
			    </thead>
				<tbody>
					<?php 
					$query1 = "select * from dailytasks_dailytask where completed = '0'  and id=$id";
					$result_tasks1 = mysqli_query($conn,$query1);
					while($row = mysqli_fetch_array($result_tasks1)) { ?>
					  <tr>
					    <td><?php echo $row['id'] ?></td>
						<td><?php echo $row['task'] ?></td>
						<td><?php echo $row['description'] ?></td>
						<td><?php echo $row['project'] ?></td>
						<td><?php echo $row['region'] ?></td>
						<td><?php echo $row['subregion'] ?></td>
						<td><?php echo $row['creationdate'] ?></td>
						<td><?php echo $row['difference'] ?></td>
						</td>
					  </tr>
					<?php }?>
				<tbody>
			</table>
		</div>
	</div>
</div>

<?php include ("footer.php")?>