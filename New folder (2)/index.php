<?php include('InfoAction.php'); 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$edit_state = true;
		$recInfo = $objInfo->getInfoId($id);
		//echo $recInfo["id"];
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Case Study PHP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
	    </style>  
	</head>
    <body>
    	<div class="row">
    		<div class="col-sm-2"></div>
    		<div class="col-sm-8">
		    	<?php if (isset($_SESSION['msg'])): ?>
		    		<div class="alert alert-success">
		    			<strong>
		    			<?php 
		    				echo $_SESSION['msg'];
		    				unset($_SESSION['msg']);
		    			 ?>
		    			</strong>
		    		</div>
		    	<?php endif ?>
		    	<table class="table table-hover">
					<thead class="thead-light">
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$listInfo = $objInfo->selectAllData();
							foreach ($listInfo as $row)  
							{
						?>
							 	<tr>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['address']; ?></td>
									<td>
										<a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
									</td>
									<td>
										<a href="InfoAction.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger" >Delete</a>
									</td>
								</tr>
							 
						<?php 
							}
						?>	
						
					</tbody>
				</table>
				<hr size="5">	
				<?php if ($edit_state == false): ?>		
					<div class="panel panel-primary">	
						<div class="panel-heading">Nhập thông tin: </div>	
						<div class="panel-body">	
							<form class="form-horizontal" method="post" action="InfoAction.php">
								<div class="form-group">
									<label class="control-label col-sm-2" for="name">Name: </label>
									<div class="col-sm-10">
										<input type="text" name="name" class="form-control" placeholder="Input Name" >
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="address">Address: </label>
									<div class="col-sm-10">
										<input type="text" name="address" class="form-control" placeholder="Input Address" >
									</div>
								</div>	
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" name="save" class="btn btn-primary">Save</button>
									</div>
								</div>															
							</form>
						</div>
					</div>
				<?php else: ?>	
					<div class="panel panel-primary">	
						<div class="panel-heading">Nhập thông tin: </div>	
						<div class="panel-body">	
							<form class="form-horizontal" method="post" action="InfoAction.php">
								<input type="hidden" name="id" value="<?php echo $recInfo['id']; ?>">
								<div class="form-group">
									<label class="control-label col-sm-2" for="name">Name: </label>
									<div class="col-sm-10">
										<input type="text" name="name" class="form-control" value="<?php echo $recInfo['name']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="address">Address: </label>
									<div class="col-sm-10">
										<input type="text" name="address" class="form-control" value="<?php echo $recInfo['address']; ?>">
									</div>
								</div>	
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" name="update" class="btn btn-primary">Update</button>
									</div>
								</div>															
							</form>
						</div>
					</div>
				<?php endif ?>	
    		</div>
    		<div class="col-sm-2"></div>
    	</div>	

		
    </body>
</html>
